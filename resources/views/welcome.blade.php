<!DOCTYPE html>
<html class="[color-scheme:dark] [--ink:#050b18] [--muted:#a6b5ce] [--blue:#50bdff] [--purple:#9275ff] [--line:#263754]
        [--section-cut:clamp(36px,_4vw,_72px)] [&_*]:box-border scroll-smooth [scroll-padding-top:85px]
        mobile:[scroll-padding-top:25px] reduce-motion:scroll-auto reduce-motion:[&_*]:animate-none!
        reduce-motion:[&_*]:transition-none! reduce-motion:[&_*:before]:animate-none!
        reduce-motion:[&_*:before]:transition-none! reduce-motion:[&_*:after]:animate-none!
        reduce-motion:[&_*:after]:transition-none! reduce-motion:[&_[data-repeat]]:hidden
        mobile:[--section-cut:28px]" lang="en-ZA">
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
<body class="m-0 [background:var(--ink)] text-[#f4f7ff] font-sans text-[16px] leading-[1.65] overflow-x-clip">
<a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] skip-link fixed
        top-[-100px] left-5 z-100 [background:#2639b5] p-3 focus:top-[10px]" href="#main">Skip to content</a>
<header class="site-header h-[86px] [padding:0_48px] flex justify-between items-center absolute [inset:0_0_auto] z-10
        [&_nav]:flex [&_nav]:items-center [&_nav]:gap-[34px] [&_nav]:text-[14px]
        [&_nav_>_a:hover]:text-[#a8b4ff] [&_.button]:[padding:9px_16px] [&_.button]:min-h-[42px]
        [&_.button]:text-[12px] tablet:px-8 tablet:[&_nav]:gap-5 mobile:h-auto mobile:min-h-19 mobile:p-5
        mobile:items-start mobile:gap-[18px] mobile:[&_nav]:flex-wrap mobile:[&_nav]:justify-end
        mobile:[&_nav]:gap-[14px] mobile:[&_nav]:text-[12px] mobile:[&_nav_.button]:hidden
        mobile:[&.has-menu_nav]:absolute mobile:[&.has-menu_nav]:left-5 mobile:[&.has-menu_nav]:right-5
        mobile:[&.has-menu_nav]:top-19 mobile:[&.has-menu_nav]:hidden
        mobile:[&.has-menu_nav]:[background:#0b162af5] mobile:[&.has-menu_nav]:[border:1px_solid_#394666]
        mobile:[&.has-menu_nav]:rounded-[10px] mobile:[&.has-menu_nav]:p-5 mobile:[&.has-menu_nav]:flex-col
        mobile:[&.has-menu_nav]:items-stretch mobile:[&.has-menu_nav]:gap-[22px]
        mobile:[&.has-menu_nav.is-open]:flex desktop:[&_nav]:text-[17px] desktop:[&_.button]:text-[15px]">
    <a href="{{ route('home') }}" class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] wordmark text-[21px]
        tracking-[4px] font-medium mobile:text-[18px] mobile:tracking-[3px]" aria-label="Valourite home">VALOURITE<span class="brand-dot text-[#8188ff]">.</span></a>
    <button class="[-webkit-tap-highlight-color:transparent] touch-manipulation cursor-pointer
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] menu-toggle bg-none
        [border:1px_solid_var(--line)] rounded-[6px] [padding:8px_12px] hidden mobile:[&:not([hidden])]:block
        mobile:[&:not([hidden])]:text-[12px] mobile:[&_span]:ml-2" aria-expanded="false" aria-controls="navigation" hidden>Menu <span>☰</span></button>
    <nav id="navigation" aria-label="Main navigation"><a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px]" href="#services">Services</a><a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px]" href="#websites">Our work</a><a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px]" href="#contact">Contact</a><x-contact-button/></nav>
</header>
<main id="main">
    <section class="hero min-h-[min(880px,_100svh)] relative isolate [padding:175px_0_135px]
        [clip-path:polygon(0_0,_100%_0,_100%_90%,_0_100%)]
        [background:linear-gradient(100deg,_#7760ff,_#54bfff)] mb-[-1px] [&_h1]:text-[clamp(32px,_3.9vw,_55px)]
        [&_h1]:font-semibold [&_h1]:max-w-185 [&_h1]:tracking-[-1.5px] [&_h1_span]:text-[#c2c8ff]
        wide:min-h-[850px] mobile:[padding:155px_0_105px] mobile:min-h-165
        mobile:[clip-path:polygon(0_0,_100%_0,_100%_95%,_0_100%)] mobile:[&_.eyebrow]:text-[8px]
        mobile:[&_.eyebrow]:tracking-[1.5px] mobile:[&_.eyebrow]:max-w-70
        mobile:[&_h1]:text-[clamp(35px,_9.2vw,_47px)] mobile:[&_h1]:leading-[1.15]
        mobile:[&_h1]:[text-shadow:0_2px_18px_#020713] mobile:[&_h1]:tracking-[-1px] mobile:[&_h1_br]:hidden
        desktop:pt-[170px] desktop:min-h-[850px] desktop:[&_h1]:text-[clamp(48px,_4.1vw,_68px)]
        desktop:[&_h1]:max-w-[890px]" aria-labelledby="hero-heading">
        <div class="hero-background absolute [inset:0_0_2px] z-[-1]
        [background-image:linear-gradient(90deg,_#020713e8_0%,_#030919bf_40%,_#0208172b_100%),_url('/images/hero-1600.webp')]
        bg-cover bg-center bg-fixed [clip-path:polygon(0_0,_100%_0,_100%_90%,_0_100%)] mobile:fixed
        mobile:[inset:0] mobile:h-[100svh] mobile:bg-scroll mobile:[background-position:60%_center]
        mobile:[clip-path:none]
        mobile:[background-image:linear-gradient(90deg,_#020713ed_0%,_#030919c4_48%,_#02081755_100%),_url('/images/hero-1600.webp')]
        reduce-motion:bg-scroll reduce-motion:absolute reduce-motion:h-full"></div>
        <div class="layout-container hero-content w-[min(1200px,_calc(100%_-_96px))] mx-auto tablet:w-[calc(100%_-_64px)]
        mobile:w-[calc(100%_-_40px)] desktop:w-[min(1400px,_calc(100%_-_112px))] sm:max-w-[640px]
        md:max-w-[768px] lg:max-w-[1024px] xl:max-w-[1280px] 2xl:max-w-[1536px]">
            <p class="eyebrow text-[13px] font-semibold tracking-[2.7px] text-[#a2a8ff] mb-[22px] mobile:mb-[18px] desktop:text-[13px]">LOCAL SOFTWARE DEVELOPMENT · SOUTH AFRICA</p>
            <p class="hero-brand text-[clamp(46px,_7.4vw,_104px)] tracking-[0.14em] leading-[1.05] font-normal mb-[25px]
        tablet:text-[8vw] mobile:text-[clamp(35px,_10vw,_65px)] mobile:tracking-[0.11em]
        desktop:text-[clamp(90px,_8vw,_120px)]">VALOURITE</p>
            <h1 class="leading-[1.15]" id="hero-heading">Software that moves <br>your business <span>forward.</span></h1>
            <p class="hero-description text-[#cbd5e6] [margin:25px_0_34px] text-[17px] mobile:text-[17px] mobile:text-[#eef2ff]
        mobile:max-w-75 desktop:text-[21px]">Less admin. Smarter systems. More possibilities.</p>
            <div class="hero-actions flex flex-wrap items-center gap-6 mobile:gap-[18px]"><x-contact-button/><a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] text-link inline-flex
        items-center gap-[9px] text-[14px] [&_.icon]:text-[#999bff] [&_.icon]:w-5 hover:text-[#9edaff]
        desktop:text-[17px]" href="mailto:{{ config('website.email') }}"><x-icon name="mail"/>Email us</a><a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] text-link inline-flex
        items-center gap-[9px] text-[14px] [&_.icon]:text-[#999bff] [&_.icon]:w-5 hover:text-[#9edaff]
        desktop:text-[17px]" href="#contact"><x-icon name="phone"/>Call us</a></div>
            <a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] scroll-cue flex gap-[25px]
        items-center text-[10px] tracking-[2px] text-[#95a6c3] mt-[54px] [&_span]:text-[23px]
        [&_span]:text-[#99bfff] mobile:mt-10" href="#services">EXPLORE THE POSSIBILITIES <span>↓</span></a>
        </div>
        <p class="hero-side absolute right-12 bottom-45 text-white font-bold text-sm tracking-[3px] text-right leading-[2] tablet:hidden">CUSTOM SYSTEMS. REAL POSSIBILITIES.</p>
    </section>
    <section id="services" class="overview layout-container relative [padding:65px_0_85px] mobile:[padding:50px_0_65px]
        w-[min(1200px,_calc(100%_-_96px))] mx-auto tablet:w-[calc(100%_-_64px)] mobile:w-[calc(100%_-_40px)]
        desktop:w-[min(1400px,_calc(100%_-_112px))] sm:max-w-[640px] md:max-w-[768px] lg:max-w-[1024px]
        xl:max-w-[1280px] 2xl:max-w-[1536px]" aria-labelledby="services-heading">
        <div class="overview-heading absolute top-[85px] left-0 w-[45%] [&_p:last-child]:text-[var(--muted)] [&_p:last-child]:mt-5
        [&_p:last-child]:text-[14px] mobile:static mobile:w-auto mobile:mb-[35px] mobile:[&_h2_br]:hidden
        desktop:[&_p:last-child]:text-[18px]"><p class="eyebrow text-[11px] font-semibold tracking-[2.7px] text-[#a2a8ff] mb-[22px] mobile:mb-[18px] desktop:text-[13px]">OUR SERVICES</p><h2 class="leading-[1.15] text-[clamp(29px,_3vw,_46px)] font-semibold tracking-[-1.2px] desktop:text-[clamp(38px,_3.4vw,_54px)]" id="services-heading">What can we<br>build for you?</h2><p>Four ways to move your business forward.</p></div>
        <div class="service-cards grid grid-cols-2 gap-x-[9%] gap-y-0 mobile:flex mobile:flex-col mobile:gap-[18px]">
        @foreach($services as $service)
            <a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] service-card reveal card-{{
        $loop->index }} relative overflow-hidden isolate flex items-start gap-[22px] p-[30px] rounded-[14px]
        [border:1px_solid_#4baaff9c] [background:linear-gradient(125deg,_#0e2037,_#091526)] min-h-47
        shadow-[inset_0_1px_1px_#ffffff10] [transition:transform_0.3s,_box-shadow_0.3s]
        [&:nth-child(odd)]:col-start-2 [&:nth-child(even)]:col-start-1 [&:nth-child(even)]:border-[#8963e69c]
        [&:nth-child(even):not(.card-3)]:[background:linear-gradient(125deg,_#191931,_#091526)]
        [&:not(:first-child)]:mt-[-24px] [&_h3]:text-[20px] [&_h3]:mb-4 [&_h3]:relative [&_li]:text-[13px]
        [&_li]:text-[#c1cde0] [&_li]:mt-[5px] [&_li:before]:[content:'–'] [&_li:before]:text-[#64bbff]
        [&_li:before]:mr-[9px] [&_>_.icon]:text-[#6bb5ff] [&_>_.icon]:w-8 [&_>_.icon]:h-8 [&_>_.icon]:mt-[3px]
        [&:nth-child(even)_>_.icon]:text-[#a07aff] [&_img]:absolute [&_img]:[inset:0] [&_img]:h-full
        [&_img]:w-full [&_img]:object-cover [&_img]:z-[-2] [&_img]:opacity-[0.17]
        [&_img]:[mask-image:linear-gradient(90deg,_transparent,_#000)] hover:[transform:translateY(-5px)]
        hover:shadow-[0_0_28px_#6366f13d] tablet:[padding:25px_20px] tablet:gap-[14px] tablet:[&_h3]:text-[18px]
        mobile:[&:not(:first-child)]:mt-0 mobile:min-h-[185px] mobile:[padding:27px_22px]
        mobile:[&_h3]:text-[20px] mobile:[&_>_.icon]:w-[29px] [&.card-0]:row-start-1 [&.card-1]:row-start-2
        [&.card-2]:row-start-3 [&.card-3]:row-start-4
        [&.card-2]:[background:linear-gradient(110deg,_#0c1b30ed,_#0b163599),_url('/images/website-card.webp')_right_center_/_cover]
        [&.card-3]:[background:linear-gradient(110deg,_#14152ced,_#0d15377a),_url('/images/mobile-card.webp')_right_center_/_cover]
        desktop:min-h-55 desktop:p-[34px] desktop:[&_h3]:text-[25px] desktop:[&_li]:text-[17px]
        [&.is-waiting]:opacity-0 [&.is-waiting]:[transform:translateY(35px)]
        [transition:opacity_0.75s_ease,_transform_0.75s_ease] reduce-motion:[&.is-waiting]:opacity-[1]
        reduce-motion:[&.is-waiting]:[transform:none]" href="#{{ $service['id'] }}">
                @if($service['image'])<img src="{{ asset('images/'.$service['image'].'-800.webp') }}" alt="" loading="lazy" width="800" height="530">@endif
                <x-icon :name="$service['icon']"/><div><span class="card-number absolute right-[23px] top-5 text-[#7182a3] text-[10px] tracking-[2px]">0{{ $loop->iteration }}</span><h3 class="leading-[1.15] font-semibold">{{ $service['name'] }}</h3><ul>@foreach($service['summary'] as $point)<li>{{ $point }}</li>@endforeach</ul></div><span class="card-arrow absolute right-[19px] bottom-[18px] [border:1px_solid_#526788] rounded-full p-[6px]
        [&_.icon]:w-[17px] [&_.icon]:h-[17px] tablet:right-3 tablet:bottom-3"><x-icon name="arrow"/></span>
            </a>
        @endforeach
        </div>
    </section>
    @if($testimonials->isNotEmpty())
    <section class="testimonials [border-top:1px_solid_#6052db] [padding:65px_0_95px] overflow-hidden
        [background:radial-gradient(ellipse_at_50%_0,_#1720396b,_transparent_70%)] mobile:[padding:45px_0_65px]" aria-labelledby="reviews-heading">
        <div class="layout-container reviews-heading w-[min(1200px,_calc(100%_-_96px))] mx-auto tablet:w-[calc(100%_-_64px)]
        mobile:w-[calc(100%_-_40px)] desktop:w-[min(1400px,_calc(100%_-_112px))] sm:max-w-[640px]
        md:max-w-[768px] lg:max-w-[1024px] xl:max-w-[1280px] 2xl:max-w-[1536px] flex items-end justify-between
        gap-5 mb-[35px] [&_h2]:text-[clamp(28px,_2.7vw,_38px)] mobile:items-start mobile:flex-col
        mobile:gap-[18px] desktop:[&_h2]:text-[43px]"><div><p class="eyebrow text-[11px] font-semibold tracking-[2.7px] text-[#a2a8ff] mb-[22px] mobile:mb-[18px] desktop:text-[13px]">CLIENT FEEDBACK</p><h2 class="leading-[1.15] text-[clamp(29px,_3vw,_46px)] font-semibold tracking-[-1.2px] desktop:text-[clamp(38px,_3.4vw,_54px)]" id="reviews-heading">Good systems. Happy clients.</h2></div><div>@if($hasSamples)<p class="sample-notice text-[11px] text-[#a5b4ca] desktop:text-[12px]">Sample testimonials · development preview only</p>@endif</div></div>
        @foreach($testimonials->chunk((int) ceil($testimonials->count() / 2)) as $row)
        <div class="review-row {{ $loop->even ? 'reverse' : '' }} overflow-hidden mt-[17px] [padding-block:12px] overflow-x-auto
        [&.is-animated_.review-track]:animate-[marquee_65s_linear_infinite_reverse]
        [&.reverse.is-animated_.review-track]:[animation-direction:normal] reduce-motion:overflow-x-auto
        [&.is-animated]:overflow-hidden reduce-motion:[&.is-animated]:overflow-x-auto"><div class="review-track flex w-max gap-5 reduce-motion:[transform:none]!"><div class="review-set flex gap-5 pr-0 reduce-motion:[&[data-clone]]:hidden">
            @foreach($row as $testimonial)
            <article class="review-card w-[275px] flex-none p-6 [background:#091424] [border:1px_solid_#233c58] rounded-[12px]
        [transition:box-shadow_0.3s,_border-color_0.3s] [&:nth-child(2n)]:w-[310px] [&:nth-child(3n)]:w-[245px]
        [&_p]:text-[14px] [&_p]:min-h-18 [&_p]:leading-[1.6] [&_p]:text-[#d9e0eb] [&_>_span]:text-[12px]
        [&_>_span]:text-[#b6c5d9] [&_small]:block [&_small]:text-[10px] [&_small]:text-[#92a4bf] [&_small]:mt-1
        focus-visible:border-[#a375ff] focus-visible:shadow-[0_0_25px_#925aff80] [&.is-pressed]:border-[#a375ff]
        [&.is-pressed]:shadow-[0_0_25px_#925aff80] [&:focus-visible_.stars]:[text-shadow:0_0_12px_#a3b7ff]
        [&:focus-visible_.stars]:text-[#c3d4ff] [&.is-pressed_.stars]:[text-shadow:0_0_12px_#a3b7ff]
        [&.is-pressed_.stars]:text-[#c3d4ff] mouse:hover:border-[#a375ff]
        mouse:hover:shadow-[0_0_25px_#925aff80] mouse:[&:hover_.stars]:[text-shadow:0_0_12px_#a3b7ff]
        mouse:[&:hover_.stars]:text-[#c3d4ff] mobile:w-65 mobile:[&:nth-child(2n)]:w-[285px]
        desktop:[&_p]:text-[17px] desktop:[&_p]:min-h-27 desktop:[&_>_span]:text-[14px]
        desktop:[&_small]:text-[12px]" tabindex="0"><p>{{ $testimonial['quote'] }}</p><div class="stars text-[#8197ff] tracking-[3px] [margin:14px_0_7px]" aria-label="{{ $testimonial['rating'] }} out of 5 stars">{{ str_repeat('★', max(0, min(5, (int) $testimonial['rating']))) }}</div><span>{{ $testimonial['name'] }}</span>@if($testimonial['sample'] ?? true)<small>Illustrative sample</small>@endif</article>
            @endforeach
        </div></div></div>
        @endforeach
    </section>
    @endif
    <div class="detail-sections pt-0 mobile:pt-0">
    @foreach($services as $service)
        <section id="{{ $service['id'] }}" class="service-detail {{ $loop->even ? 'align-right' : '' }} detail-{{ $service['id'] }}
        [--section-edge:polygon(0_0,_100%_var(--section-cut),_100%_100%,_0_100%)] relative isolate
        [background:linear-gradient(100deg,_#8570ff,_#368af4,_#a06bff)] [clip-path:var(--section-edge)]
        [padding:2px_0_0] [&_+_.service-detail]:mt-[calc(-1_*_var(--section-cut))]
        [&:nth-child(even)]:[--section-edge:polygon(0_var(--section-cut),_100%_0,_100%_100%,_0_100%)]
        [&.align-right_.detail-copy]:col-start-2 [&.align-right_.detail-copy]:text-right
        [&.align-right_.detail-copy]:row-start-1 [&.align-right_.service-points_li]:flex-row-reverse
        [&.align-right_.service-description]:ml-auto [&.align-right_.detail-art]:col-start-1
        [&.align-right_.detail-art]:row-start-1
        [&.align-right_.detail-photo:after]:[background:linear-gradient(_90deg,_#050e1b20,_#050e1b65_35%,_#050e1bf2_65%,_#050e1bfa_)]
        [&.detail-business-automation_.detail-photo_img]:[object-position:75%_center]
        [&.detail-mining-industry_.detail-photo_img]:[object-position:25%_center]
        [&.detail-websites_.section-surface]:[background:radial-gradient(ellipse_at_80%_50%,_#172944,_#06101d_65%)]
        [&.detail-mobile-applications_.section-surface]:[background:radial-gradient(ellipse_at_20%_50%,_#1b1b47,_#06101d_65%)]
        mobile:[&.align-right_.detail-copy]:text-left mobile:[&.align-right_.service-points_li]:flex-row
        mobile:[&.align-right_.detail-photo:after]:[background:linear-gradient(90deg,_#050e1bef,_#050e1ba6)]" aria-labelledby="heading-{{ $service['id'] }}">
            <div class="section-surface relative isolate overflow-hidden min-h-[650px] [background:#06101d]
        [clip-path:var(--section-edge)] mobile:min-h-145">
            @if($service['image'])<picture class="detail-photo absolute [inset:0] z-[-2] [&_img]:w-full [&_img]:h-full [&_img]:object-cover [&_img]:object-center
        [&:after]:[content:''] [&:after]:absolute [&:after]:[inset:0]
        [&:after]:[background:linear-gradient(_90deg,_#050e1bf5_0%,_#050e1bec_30%,_#050e1b60_70%,_#050e1b30_)]
        mobile:[&_img]:[object-position:65%_center]
        mobile:[&:after]:[background:linear-gradient(90deg,_#050e1bef,_#050e1ba6)]"><source media="(max-width: 700px)" srcset="{{ asset('images/'.$service['image'].'-800.webp') }}"><img src="{{ asset('images/'.$service['image'].'-1600.webp') }}" alt="{{ $service['image'] === 'automation' ? 'Laptop displaying business reporting dashboards' : 'Warehouse team managing stock with a tablet' }}" loading="lazy" width="1600" height="1060"></picture>@endif
            <div class="layout-container detail-inner w-[min(1200px,_calc(100%_-_96px))] mx-auto tablet:w-[calc(100%_-_64px)]
        mobile:w-[calc(100%_-_40px)] desktop:w-[min(1400px,_calc(100%_-_112px))] sm:max-w-[640px]
        md:max-w-[768px] lg:max-w-[1024px] xl:max-w-[1280px] 2xl:max-w-[1536px] grid grid-cols-2 items-center
        gap-[70px] min-h-[650px] [padding-block:calc(var(--section-cut)_+_60px)_110px] tablet:gap-[35px]
        mobile:flex mobile:flex-col mobile:items-stretch mobile:gap-10 mobile:min-h-145
        mobile:[padding:calc(var(--section-cut)_+_48px)_0_90px] desktop:min-h-175">
                <div class="detail-copy reveal relative z-2 [&_h2]:text-[clamp(30px,_3.2vw,_44px)] mobile:[&_h2]:text-[34px]
        mobile:[&_h2]:max-w-[390px] desktop:[&_h2]:text-[clamp(38px,_3.2vw,_52px)] [&.is-waiting]:opacity-0
        [&.is-waiting]:[transform:translateY(35px)] [transition:opacity_0.75s_ease,_transform_0.75s_ease]
        reduce-motion:[&.is-waiting]:opacity-[1] reduce-motion:[&.is-waiting]:[transform:none]"><p class="eyebrow text-[11px] font-semibold tracking-[2.7px] text-[#a2a8ff] mb-[22px] mobile:mb-[18px] desktop:text-[13px]">{{ strtoupper($service['name']) }}</p><h2 class="leading-[1.15] text-[clamp(29px,_3vw,_46px)] font-semibold tracking-[-1.2px] desktop:text-[clamp(38px,_3.4vw,_54px)]" id="heading-{{ $service['id'] }}">{{ $service['heading'] }}</h2><p class="service-description text-[#ccd5e4] text-[15px] mt-[22px] max-w-125 mobile:text-[15px] desktop:text-[20px]
        desktop:max-w-150">{{ $service['description'] }}</p><ul class="service-points flex flex-col gap-[15px] [margin:30px_0] [&_li]:flex [&_li]:items-center [&_li]:gap-3
        [&_li]:text-[14px] [&_li]:text-[#d9e2f0] [&_.icon]:text-[#a393ff] [&_.icon]:w-[22px]
        mobile:[&_li]:text-[13px] mobile:[&_li]:items-start desktop:[&_li]:text-[18px]">@foreach($service['points'] as $point)<li><x-icon name="check"/><span>{{ $point }}</span></li>@endforeach</ul><x-contact-button :label="$service['cta']"/></div>
                @if($service['id'] === 'websites')<div class="detail-art reveal mobile:w-[min(420px,_100%)] mobile:m-auto [&.is-waiting]:opacity-0
        [&.is-waiting]:[transform:translateY(35px)] [transition:opacity_0.75s_ease,_transform_0.75s_ease]
        reduce-motion:[&.is-waiting]:opacity-[1] reduce-motion:[&.is-waiting]:[transform:none]"><x-project-previews/></div>@endif
                @if($service['id'] === 'mobile-applications')<div class="detail-art reveal mobile:w-[min(420px,_100%)] mobile:m-auto [&.is-waiting]:opacity-0
        [&.is-waiting]:[transform:translateY(35px)] [transition:opacity_0.75s_ease,_transform_0.75s_ease]
        reduce-motion:[&.is-waiting]:opacity-[1] reduce-motion:[&.is-waiting]:[transform:none]"><x-project-previews :mobile="true"/></div>@endif
            </div>
            </div>
        </section>
    @endforeach
    </div>
</main>
<footer id="contact" class="contact-section [--section-edge:polygon(0_0,_100%_var(--section-cut),_100%_100%,_0_100%)] relative isolate
        [background:linear-gradient(100deg,_#8570ff,_#368af4,_#a06bff)] [clip-path:var(--section-edge)]
        [padding:2px_0_0] mt-[calc(-1_*_var(--section-cut))] [&_h2]:text-[28px] [&_h2]:tracking-[-0.5px]
        desktop:[&_h2]:text-[34px]">
    <div class="contact-surface [padding:calc(var(--section-cut)_+_70px)_0_25px] [clip-path:var(--section-edge)]
        [background:linear-gradient(#050b18e8,_#050b18dc),_url('/images/hero-1600.webp')_center_/_cover]
        mobile:pt-[calc(var(--section-cut)_+_50px)]">
    <div class="layout-container contact-grid w-[min(1200px,_calc(100%_-_96px))] mx-auto tablet:w-[calc(100%_-_64px)]
        mobile:w-[calc(100%_-_40px)] desktop:w-[min(1400px,_calc(100%_-_112px))] sm:max-w-[640px]
        md:max-w-[768px] lg:max-w-[1024px] xl:max-w-[1280px] 2xl:max-w-[1536px] grid grid-cols-[1.15fr_1fr]
        gap-[90px] items-start tablet:gap-10 mobile:grid-cols-1 mobile:gap-10">
        <div><p class="eyebrow text-[11px] font-semibold tracking-[2.7px] text-[#a2a8ff] mb-[22px] mobile:mb-[18px] desktop:text-[13px]">LET’S MAKE IT HAPPEN</p><p class="footer-brand text-[clamp(34px,_5.3vw,_72px)] tracking-[0.13em] leading-[1] mb-[25px]
        mobile:text-[clamp(35px,_9vw,_60px)]">VALOURITE</p><h2 class="leading-[1.15] text-[clamp(29px,_3vw,_46px)] font-semibold tracking-[-1.2px] desktop:text-[clamp(38px,_3.4vw,_54px)]">Let’s build something useful.</h2><p class="contact-intro text-[var(--muted)] text-[14px] mt-5 desktop:text-[18px]">Tell us what you have in mind.<br>We work with businesses across South Africa.</p><div class="contact-people grid grid-cols-2 gap-[25px] mt-8 mobile:gap-5">
        @foreach($contacts as $contact)
            <div class="contact-person [&_h3]:text-[17px] [&_h3]:mb-[5px] [&_>_a]:text-[15px] [&_>_a]:text-[#ccd8eb] [&_>_div]:mt-[13px]
        [&_.text-link]:text-[12px] [&_.icon]:w-4 mobile:[&_>_div]:gap-[14px] desktop:[&_>_a]:text-[18px]
        desktop:[&_h3]:text-[22px] desktop:[&_.text-link]:text-[15px]"><h3 class="leading-[1.15] font-semibold">{{ $contact['name'] }}</h3><a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px]" href="tel:+{{ $contact['number'] }}">{{ $contact['display'] }}</a><div class="flex gap-5 "><a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] text-link inline-flex
        items-center gap-[9px] text-[14px] [&_.icon]:text-[#999bff] [&_.icon]:w-5 hover:text-[#9edaff]
        desktop:text-[17px]" href="https://wa.me/{{ $contact['number'] }}"><x-icon name="chat"/>WhatsApp</a><a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] text-link inline-flex
        items-center gap-[9px] text-[14px] [&_.icon]:text-[#999bff] [&_.icon]:w-5 hover:text-[#9edaff]
        desktop:text-[17px]" href="tel:+{{ $contact['number'] }}"><x-icon name="phone"/>Call</a></div></div>
        @endforeach
        </div><a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] text-link email-link
        inline-flex items-center gap-[9px] text-[14px] [&_.icon]:text-[#999bff] [&_.icon]:w-5
        hover:text-[#9edaff] desktop:text-[17px] mt-7" href="mailto:{{ config('website.email') }}"><x-icon name="mail"/>{{ config('website.email') }}</a></div>
        <form id="enquiry-form" tabindex="-1" class="contact-form [background:#071321e8] [border:1px_solid_#263c58] rounded-[15px] p-[30px]
        shadow-[0_20px_80px_#0003] [&_h3]:text-[18px] [&_h3]:mb-6 [&_label]:block [&_label]:text-[12px]
        [&_label]:text-[#bdcce0] [&_label]:[margin:16px_0_7px] [&_input]:block [&_input]:w-full
        [&_input]:[border:1px_solid_#233950] [&_input]:[background:#0c192a] [&_input]:[padding:11px_13px]
        [&_input]:rounded-[7px] [&_input]:text-[#ecf2ff] [&_input]:text-[14px] [&_textarea]:block
        [&_textarea]:w-full [&_textarea]:[border:1px_solid_#233950] [&_textarea]:[background:#0c192a]
        [&_textarea]:[padding:11px_13px] [&_textarea]:rounded-[7px] [&_textarea]:text-[#ecf2ff]
        [&_textarea]:text-[14px] [&_textarea]:resize-y [&_textarea]:min-h-30 [&_.button]:w-full
        [&_.button]:mt-[18px] mobile:p-6 desktop:[&_h3]:text-[22px] desktop:[&_label]:text-[15px]
        desktop:[&_input]:text-[17px] desktop:[&_textarea]:text-[17px]" method="post" action="{{ route('enquiries.store') }}#contact">
            @csrf
            <h3 class="leading-[1.15] font-semibold">Prefer to leave a message?</h3>
            @if(session('enquiry_sent'))<p class="form-success p-[14px] [border:1px_solid_#a6777c] [background:#0e302a] rounded-[6px] text-[13px] border-[#448d7a]" role="status">{{ session('enquiry_sent') }}</p>@endif
            @if($errors->any())<div class="form-errors p-[14px] [border:1px_solid_#a6777c] [background:#331c2b] rounded-[6px] text-[13px] [&_ul]:pl-4
        [&_ul]:list-disc" role="alert"><p>Please check your message:</p><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
            <label for="name">Name</label><input class="[-webkit-tap-highlight-color:transparent] focus:[outline:2px_solid_#8494ff] focus:outline-offset-[2px]" id="name" name="name" autocomplete="name" placeholder="Your name" required maxlength="100" value="{{ old('name') }}" @error('name') aria-invalid="true" @enderror>
            <label for="email">Email</label><input class="[-webkit-tap-highlight-color:transparent] focus:[outline:2px_solid_#8494ff] focus:outline-offset-[2px]" id="email" name="email" type="email" autocomplete="email" placeholder="you@company.co.za" required maxlength="254" value="{{ old('email') }}" @error('email') aria-invalid="true" @enderror>
            <label for="message">What can we help you with?</label><textarea class="[-webkit-tap-highlight-color:transparent] focus:[outline:2px_solid_#8494ff] focus:outline-offset-[2px]" id="message" name="message" rows="4" placeholder="Tell us a little about your project…" required minlength="10" maxlength="5000" @error('message') aria-invalid="true" @enderror>{{ old('message') }}</textarea>
            <div class="honeypot absolute left-[-10000px] w-[1px] h-[1px] overflow-hidden" aria-hidden="true"><label for="website">Leave this empty</label><input class="[-webkit-tap-highlight-color:transparent] focus:[outline:2px_solid_#8494ff] focus:outline-offset-[2px]" id="website" name="website" tabindex="-1" autocomplete="off"></div>
            <p class="form-note text-[11px] text-[#9bacbf] mt-[15px] desktop:text-[13px]">We’ll use these details to respond to your enquiry.</p><button type="submit" class="[-webkit-tap-highlight-color:transparent] touch-manipulation cursor-pointer
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] button inline-flex
        items-center justify-center gap-3 [padding:13px_20px] [border:1px_solid_#7487ff99] rounded-[9px]
        [background:linear-gradient(110deg,_#6448ef,_#354af2)] text-white text-[14px] font-semibold
        shadow-[0_0_24px_#5144ff45] [transition:box-shadow_0.25s,_transform_0.25s] min-h-12
        [&_.icon:last-child]:w-[18px] hover:[transform:translateY(-3px)] hover:shadow-[0_0_32px_#7255ff90]
        mobile:text-[13px] mobile:px-4 desktop:text-[17px] desktop:[padding:15px_23px]">Send message <x-icon name="arrow"/></button>
        </form>
    </div>
    <div class="layout-container footer-bottom w-[min(1200px,_calc(100%_-_96px))] mx-auto tablet:w-[calc(100%_-_64px)]
        mobile:w-[calc(100%_-_40px)] desktop:w-[min(1400px,_calc(100%_-_112px))] sm:max-w-[640px]
        md:max-w-[768px] lg:max-w-[1024px] xl:max-w-[1280px] 2xl:max-w-[1536px] flex justify-between gap-[25px]
        [border-top:1px_solid_#23324a] mt-[65px] pt-[25px] text-[#8d9cb3] text-[10px] [&_span]:tracking-[2px]
        mobile:flex-wrap mobile:mt-10 mobile:gap-[18px] mobile:[&_span]:w-full mobile:[&_span]:text-[9px]
        desktop:text-[13px]"><p>© {{ date('Y') }} Valourite. All rights reserved.</p><a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px]" href="#main">Back to top ↑</a><span>IDEAS → SYSTEMS → PROGRESS</span></div>
    </div>
</footer>
</body>
</html>
