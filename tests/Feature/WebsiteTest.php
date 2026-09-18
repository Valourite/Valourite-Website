<?php

use App\Mail\WebsiteEnquiry;
use Illuminate\Support\Facades\Mail;

beforeEach(function () {
    $this->withoutVite();
});

test('the homepage includes the services and both direct contacts', function () {
    $this->get(route('home'))
        ->assertSee('Business Automation')
        ->assertSee('Mining &amp; Industry', false)
        ->assertSee('Website Development')
        ->assertSee('Mobile Applications')
        ->assertSee('27794682081')
        ->assertSee('27714920019')
        ->assertSee('admin@valourite.co.za');
});

test('sample testimonials are visible and labelled in local development', function () {
    $this->app->instance('env', 'local');

    $this->get(route('home'))->assertSee('Sample testimonials')->assertSee('Sample client 10');
});

test('production excludes sample testimonials and displays genuine entries', function () {
    $this->app->instance('env', 'production');
    config(['website.testimonials' => [
        ['quote' => 'Development sample', 'name' => 'Sample client', 'rating' => 5, 'sample' => true],
        ['quote' => 'Approved feedback', 'name' => 'Approved client', 'rating' => 5, 'sample' => false],
    ]]);

    $this->get(route('home'))->assertDontSee('Development sample')->assertSee('Approved feedback');
});

test('production hides the testimonial section when it has only samples', function () {
    $this->app->instance('env', 'production');

    $this->get(route('home'))->assertDontSee('reviews-heading')->assertDontSee('Sample client');
});

test('valid enquiries go to the configured inbox with visitor reply details', function () {
    Mail::fake();

    $this->post(route('enquiries.store'), [
        'name' => 'Alex', 'email' => 'alex@example.com', 'message' => 'Please help us with stock management.',
        'recipient' => 'attacker@example.com',
    ])->assertRedirect(route('home').'#contact')->assertSessionHas('enquiry_sent');

    Mail::assertSent(WebsiteEnquiry::class, fn (WebsiteEnquiry $mail): bool =>
        $mail->hasTo('admin@valourite.co.za') && $mail->senderEmail === 'alex@example.com'
        && $mail->enquiryMessage === 'Please help us with stock management.'
    );
});

test('invalid enquiries do not send mail', function (array $payload, array $fields) {
    Mail::fake();

    $this->post(route('enquiries.store'), $payload)->assertSessionHasErrors($fields);

    Mail::assertNothingSent();
})->with([
    'missing fields' => [[], ['name', 'email', 'message']],
    'invalid email' => [['name' => 'Alex', 'email' => 'invalid', 'message' => 'A valid project enquiry.'], ['email']],
    'short message' => [['name' => 'Alex', 'email' => 'alex@example.com', 'message' => 'Hi'], ['message']],
    'long message' => [['name' => 'Alex', 'email' => 'alex@example.com', 'message' => str_repeat('a', 5001)], ['message']],
    'long name' => [['name' => str_repeat('a', 101), 'email' => 'alex@example.com', 'message' => 'A valid project enquiry.'], ['name']],
    'header injection' => [['name' => "Alex\r\nBcc: other@example.com", 'email' => 'alex@example.com', 'message' => 'A valid project enquiry.'], ['name']],
    'honeypot' => [['name' => 'Alex', 'email' => 'alex@example.com', 'message' => 'A valid project enquiry.', 'website' => 'https://spam.example'], ['website']],
]);

test('mail failures preserve the enquiry and offer direct contact', function () {
    Mail::shouldReceive('to')->once()->with('admin@valourite.co.za')->andThrow(new RuntimeException('Transport unavailable'));

    $this->post(route('enquiries.store'), [
        'name' => 'Alex', 'email' => 'alex@example.com', 'message' => 'Please help with our website.',
    ])->assertRedirect(route('home').'#contact')
        ->assertSessionHasErrors('delivery')
        ->assertSessionHasInput('message', 'Please help with our website.')
        ->assertSessionMissing('enquiry_sent');
});

test('production does not claim success when mail delivery is not configured', function () {
    $this->app->instance('env', 'production');
    config(['mail.default' => 'log']);
    Mail::fake();

    $this->post(route('enquiries.store'), [
        'name' => 'Alex', 'email' => 'alex@example.com', 'message' => 'Please help with our website.',
    ])->assertSessionHasErrors('delivery')->assertSessionMissing('enquiry_sent');

    Mail::assertNothingSent();
});

test('enquiry bursts are rate limited', function () {
    Mail::fake();
    for ($attempt = 0; $attempt < 5; $attempt++) {
        $this->post(route('enquiries.store'), []);
    }

    $this->post(route('enquiries.store'), [
        'name' => 'Alex', 'email' => 'alex@example.com', 'message' => 'Please help with our website.',
    ])->assertTooManyRequests();

    Mail::assertNothingSent();
});

test('enquiry mail escapes visitor content and uses the visitor as reply-to', function () {
    $mail = new WebsiteEnquiry('<script>name</script>', 'alex@example.com', '<script>message</script>');

    $mail->assertSeeInHtml('<script>name</script>');
    $mail->assertDontSeeInHtml('<script>message</script>', false);
    expect($mail->envelope()->replyTo[0]->address)->toBe('alex@example.com');
});

test('the sitemap provides the canonical homepage URL', function () {
    $this->get(route('sitemap'))->assertHeader('Content-Type', 'application/xml')->assertSee(route('home'));
});
