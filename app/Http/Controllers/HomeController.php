<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $testimonials = collect(config('website.testimonials', []))
            ->filter(fn (array $testimonial): bool => ! ($testimonial['sample'] ?? true) || app()->environment('local', 'testing'))
            ->values();

        return view('welcome', [
            'services' => config('website.services'),
            'contacts' => config('website.contacts'),
            'testimonials' => $testimonials,
            'hasSamples' => $testimonials->contains(fn (array $testimonial): bool => $testimonial['sample'] ?? true),
        ]);
    }
}
