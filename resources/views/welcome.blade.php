<!DOCTYPE html>
<html lang="en-ZA">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#050b18">
    <title>Valourite | Custom Software, Websites & Apps South Africa</title>
    <meta name="description" content="Custom business software, stock and job card systems, websites and Android & iOS apps. Valourite helps businesses across South Africa work smarter.">
    <link rel="canonical" href="{{ route('home') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Valourite — Software that moves your business forward">
    <meta property="og:description" content="Custom software, websites and mobile apps for businesses across South Africa.">
    <meta property="og:url" content="{{ route('home') }}">
    <meta property="og:image" content="{{ asset('images/hero-1600.webp') }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="preload" as="image" href="{{ asset('images/hero-1600.webp') }}">
    @if(! app()->isProduction())<meta name="robots" content="noindex, nofollow">@endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="application/ld+json">{!! json_encode(['@context' => 'https://schema.org', '@type' => 'Organization', 'name' => 'Valourite', 'url' => route('home'), 'email' => config('website.email'), 'areaServed' => ['@type' => 'Country', 'name' => 'South Africa'], 'contactPoint' => collect($contacts)->map(fn ($contact) => ['@type' => 'ContactPoint', 'telephone' => '+'.$contact['number'], 'contactType' => 'sales', 'availableLanguage' => 'English'])->all()], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES) !!}</script>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <a href="{{ route('home') }}" class="wordmark" aria-label="Valourite home">VALOURITE<span class="brand-dot">.</span></a>
    <button class="menu-toggle" aria-expanded="false" aria-controls="navigation" hidden>Menu <span>☰</span></button>
    <nav id="navigation" aria-label="Main navigation"><a href="#services">Services</a><a href="#websites">Our work</a><a href="#contact">Contact</a><x-contact-button/></nav>
</header>
<main id="main">
    <section class="hero" aria-labelledby="hero-heading">
        <div class="hero-background"></div>
        <div class="container hero-content">
            <p class="eyebrow">LOCAL SOFTWARE DEVELOPMENT · SOUTH AFRICA</p>
            <p class="hero-brand">VALOURITE</p>
            <h1 id="hero-heading">Software that moves <br>your business <span>forward.</span></h1>
            <p class="hero-description">Less admin. Smarter systems. More possibilities.</p>
            <div class="flex flex-wrap items-center gap-6"><x-contact-button/><a class="text-link" href="mailto:{{ config('website.email') }}"><x-icon name="mail"/>Email us</a><a class="text-link" href="#contact"><x-icon name="phone"/>Call us</a></div>
            <a class="scroll-cue" href="#services">EXPLORE THE POSSIBILITIES <span>↓</span></a>
        </div>
        <p class="hero-side">CUSTOM<br>SYSTEMS.<br>REAL<br>POSSIBILITIES.</p>
    </section>
    <section id="services" class="overview container" aria-labelledby="services-heading">
        <div class="overview-heading"><p class="eyebrow">OUR SERVICES</p><h2 id="services-heading">What can we<br>build for you?</h2><p>Four ways to move your business forward.</p></div>
        <div class="service-cards">
        @foreach($services as $service)
            <a class="service-card reveal card-{{ $loop->index }}" href="#{{ $service['id'] }}">
                @if($service['image'])<img src="{{ asset('images/'.$service['image'].'-800.webp') }}" alt="" loading="lazy" width="800" height="530">@endif
                <x-icon :name="$service['icon']"/><div><span class="card-number">0{{ $loop->iteration }}</span><h3>{{ $service['name'] }}</h3><ul>@foreach($service['summary'] as $point)<li>{{ $point }}</li>@endforeach</ul></div><span class="card-arrow"><x-icon name="arrow"/></span>
            </a>
        @endforeach
        </div>
    </section>
    @if($testimonials->isNotEmpty())
    <section class="testimonials" aria-labelledby="reviews-heading">
        <div class="container reviews-heading"><div><p class="eyebrow">CLIENT FEEDBACK</p><h2 id="reviews-heading">Good systems. Happy clients.</h2></div><div>@if($hasSamples)<p class="sample-notice">Sample testimonials · development preview only</p>@endif</div></div>
        @foreach($testimonials->chunk((int) ceil($testimonials->count() / 2)) as $row)
        <div class="review-row {{ $loop->even ? 'reverse' : '' }}"><div class="review-track"><div class="review-set">
            @foreach($row as $testimonial)
            <article class="review-card" tabindex="0"><p>{{ $testimonial['quote'] }}</p><div class="stars" aria-label="{{ $testimonial['rating'] }} out of 5 stars">{{ str_repeat('★', max(0, min(5, (int) $testimonial['rating']))) }}</div><span>{{ $testimonial['name'] }}</span>@if($testimonial['sample'] ?? true)<small>Illustrative sample</small>@endif</article>
            @endforeach
        </div></div></div>
        @endforeach
    </section>
    @endif
    <div class="detail-sections">
    @foreach($services as $service)
        <section id="{{ $service['id'] }}" class="service-detail {{ $loop->even ? 'align-right' : '' }} detail-{{ $service['id'] }}" aria-labelledby="heading-{{ $service['id'] }}">
            <div class="section-surface">
            @if($service['image'])<picture class="detail-photo"><source media="(max-width: 700px)" srcset="{{ asset('images/'.$service['image'].'-800.webp') }}"><img src="{{ asset('images/'.$service['image'].'-1600.webp') }}" alt="{{ $service['image'] === 'automation' ? 'Laptop displaying business reporting dashboards' : 'Warehouse team managing stock with a tablet' }}" loading="lazy" width="1600" height="1060"></picture>@endif
            <div class="container detail-inner">
                <div class="detail-copy reveal"><p class="eyebrow">{{ strtoupper($service['name']) }}</p><h2 id="heading-{{ $service['id'] }}">{{ $service['heading'] }}</h2><p class="service-description">{{ $service['description'] }}</p><ul class="service-points">@foreach($service['points'] as $point)<li><x-icon name="check"/><span>{{ $point }}</span></li>@endforeach</ul><x-contact-button :label="$service['cta']"/></div>
                @if($service['id'] === 'websites')<div class="detail-art reveal"><x-project-previews/></div>@endif
                @if($service['id'] === 'mobile-applications')<div class="detail-art reveal"><x-project-previews :mobile="true"/></div>@endif
            </div>
            </div>
        </section>
    @endforeach
    </div>
</main>
<footer id="contact" class="contact-section">
    <div class="contact-surface">
    <div class="container contact-grid">
        <div><p class="eyebrow">LET’S MAKE IT HAPPEN</p><p class="footer-brand">VALOURITE</p><h2>Let’s build something useful.</h2><p class="contact-intro">Tell us what you have in mind.<br>We work with businesses across South Africa.</p><div class="contact-people">
        @foreach($contacts as $contact)
            <div class="contact-person"><h3>{{ $contact['name'] }}</h3><a href="tel:+{{ $contact['number'] }}">{{ $contact['display'] }}</a><div class="flex gap-5"><a class="text-link" href="https://wa.me/{{ $contact['number'] }}"><x-icon name="chat"/>WhatsApp</a><a class="text-link" href="tel:+{{ $contact['number'] }}"><x-icon name="phone"/>Call</a></div></div>
        @endforeach
        </div><a class="text-link email-link" href="mailto:{{ config('website.email') }}"><x-icon name="mail"/>{{ config('website.email') }}</a></div>
        <form id="enquiry-form" tabindex="-1" class="contact-form" method="post" action="{{ route('enquiries.store') }}#contact">
            @csrf
            <h3>Prefer to leave a message?</h3>
            @if(session('enquiry_sent'))<p class="form-success" role="status">{{ session('enquiry_sent') }}</p>@endif
            @if($errors->any())<div class="form-errors" role="alert"><p>Please check your message:</p><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
            <label for="name">Name</label><input id="name" name="name" autocomplete="name" placeholder="Your name" required maxlength="100" value="{{ old('name') }}" @error('name') aria-invalid="true" @enderror>
            <label for="email">Email</label><input id="email" name="email" type="email" autocomplete="email" placeholder="you@company.co.za" required maxlength="254" value="{{ old('email') }}" @error('email') aria-invalid="true" @enderror>
            <label for="message">What can we help you with?</label><textarea id="message" name="message" rows="4" placeholder="Tell us a little about your project…" required minlength="10" maxlength="5000" @error('message') aria-invalid="true" @enderror>{{ old('message') }}</textarea>
            <div class="honeypot" aria-hidden="true"><label for="website">Leave this empty</label><input id="website" name="website" tabindex="-1" autocomplete="off"></div>
            <p class="form-note">We’ll use these details to respond to your enquiry.</p><button type="submit" class="button">Send message <x-icon name="arrow"/></button>
        </form>
    </div>
    <div class="container footer-bottom"><p>© {{ date('Y') }} Valourite. All rights reserved.</p><a href="#main">Back to top ↑</a><span>IDEAS → SYSTEMS → PROGRESS</span></div>
    </div>
</footer>
</body>
</html>
