<?php

namespace App\Http\Controllers;

use App\Mail\WebsiteEnquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EnquiryController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100', 'not_regex:/[\r\n]/'],
            'email' => ['required', 'email:rfc', 'max:254', 'not_regex:/[\r\n]/'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
            'website' => ['nullable', 'string', 'max:0'],
        ]);

        try {
            if (app()->isProduction() && in_array(config('mail.default'), ['log', 'array'], true)) {
                throw new \RuntimeException('A delivery mailer must be configured for website enquiries.');
            }

            Mail::to(config('website.email'))->send(new WebsiteEnquiry(
                $data['name'], $data['email'], $data['message'],
            ));
        } catch (Throwable $exception) {
            report($exception);

            return redirect()->to(route('home').'#contact')
                ->withInput($request->only('name', 'email', 'message'))
                ->withErrors(['delivery' => 'Your message could not be sent. Please try again or contact Dayne or Ivan directly.']);
        }

        return redirect()->to(route('home').'#contact')
            ->with('enquiry_sent', 'Thanks for getting in touch. Your message has been sent to our team.');
    }
}
