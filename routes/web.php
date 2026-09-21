<?php

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/enquiries', [EnquiryController::class, 'store'])->middleware('throttle:5,1')->name('enquiries.store');
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::post('/deploy', function (Request $request) {
    $configuredToken = (string) config('services.deploy.token');
    $providedToken = (string) $request->bearerToken();

    abort_if($configuredToken === '', 404);

    abort_unless(
        hash_equals($configuredToken, $providedToken),
        404
    );

    $result = Process::timeout(600)->run(
        '/bin/bash /home/valourit/repositories/Valourite-Website/deploy.sh'
    );

    if ($result->failed()) {
        return response()->json([
            'status' => 'failed',
            'message' => 'Deployment failed. Check storage/logs/deploy.log on the server.',
            'error' => $result->errorOutput(),
        ], 500);
    }

    return response()->json([
        'status' => 'success',
        'message' => 'Deployment completed.',
        'output' => $result->output(),
    ]);
});
