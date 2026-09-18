@props(['mobile' => false])
@if($mobile)
    <div class="phone-group flex items-center justify-center gap-[15px] relative h-[390px] mobile:h-[365px]
        mobile:[&_.preview-caption]:bottom-[-8px]" aria-label="Illustrative app interface previews">
        @forelse(config('website.app_screenshots', []) as $screenshot)
            <div class="phone [border:5px_solid_#252a39] rounded-[29px] [background:linear-gradient(155deg,_#121b34,_#080e20)]
        [padding:25px_16px_18px] w-[190px] h-90 shadow-[12px_20px_45px_#0008] overflow-hidden relative
        [--phone-angle:0deg] animate-[phone-float_7s_ease-in-out_infinite] [&.primary]:[transform:rotate(8deg)]
        [&.primary]:mt-[-12px] [&.primary]:[--phone-angle:8deg] [&.primary]:[animation-delay:-3s]
        [&.secondary]:[transform:rotate(-9deg)] [&.secondary]:mt-3 [&.secondary]:[--phone-angle:-9deg]
        [&.secondary]:[animation-duration:8s] [&_.eyebrow]:text-[6px] [&_.eyebrow]:tracking-[1px]
        [&_.eyebrow]:[margin:7px_0_15px] [&_h3]:text-[21px] [&_h3]:mb-3 [&_p]:text-[9px] [&_p]:text-[#a6b9d4]
        [&_>_img]:w-full [&_>_img]:h-full [&_>_img]:object-cover tablet:w-[165px] tablet:h-85 tablet:px-3
        tablet:[&_h3]:text-[18px] mobile:w-[175px] mobile:h-85
        reduce-motion:[&.primary]:[transform:rotate(8deg)] reduce-motion:[&.secondary]:[transform:rotate(-9deg)]"><img src="{{ asset($screenshot['image']) }}" alt="{{ $screenshot['alt'] }}" loading="lazy" width="280" height="560"></div>
        @empty
            <div class="phone secondary [border:5px_solid_#252a39] rounded-[29px] [background:linear-gradient(155deg,_#121b34,_#080e20)]
        [padding:25px_16px_18px] w-[190px] h-90 shadow-[12px_20px_45px_#0008] overflow-hidden relative
        [--phone-angle:0deg] animate-[phone-float_7s_ease-in-out_infinite] [&.primary]:[transform:rotate(8deg)]
        [&.primary]:mt-[-12px] [&.primary]:[--phone-angle:8deg] [&.primary]:[animation-delay:-3s]
        [&.secondary]:[transform:rotate(-9deg)] [&.secondary]:mt-3 [&.secondary]:[--phone-angle:-9deg]
        [&.secondary]:[animation-duration:8s] [&_.eyebrow]:text-[6px] [&_.eyebrow]:tracking-[1px]
        [&_.eyebrow]:[margin:7px_0_15px] [&_h3]:text-[21px] [&_h3]:mb-3 [&_p]:text-[9px] [&_p]:text-[#a6b9d4]
        [&_>_img]:w-full [&_>_img]:h-full [&_>_img]:object-cover tablet:w-[165px] tablet:h-85 tablet:px-3
        tablet:[&_h3]:text-[18px] mobile:w-[175px] mobile:h-85
        reduce-motion:[&.primary]:[transform:rotate(8deg)] reduce-motion:[&.secondary]:[transform:rotate(-9deg)]"><div class="phone-notch w-[55px] h-[9px] rounded-[9px] [background:#020613] absolute top-2 left-[50%] [transform:translateX(-50%)]"></div><span class="eyebrow text-[11px] font-semibold tracking-[2.7px] text-[#a2a8ff] mb-[22px] mobile:mb-[18px] desktop:text-[13px]">YOUR WORKDAY</span><h3 class="leading-[1.15] font-semibold">Good morning.</h3><p>Everything in one place.</p><div class="app-tile text-[9px] [background:#182440] [padding:11px_9px] flex justify-between items-center rounded-[7px]
        mt-[11px] [&_.icon]:w-[14px] [&_.icon]:h-[14px] [&_.icon]:text-[#afa0ff] [&_b]:text-[14px]
        [&_b]:text-[#acb6ff]">Today's jobs <b>08</b></div><div class="app-tile text-[9px] [background:#182440] [padding:11px_9px] flex justify-between items-center rounded-[7px]
        mt-[11px] [&_.icon]:w-[14px] [&_.icon]:h-[14px] [&_.icon]:text-[#afa0ff] [&_b]:text-[14px]
        [&_b]:text-[#acb6ff]">Your team <b>12</b></div><div class="app-tile text-[9px] [background:#182440] [padding:11px_9px] flex justify-between items-center rounded-[7px]
        mt-[11px] [&_.icon]:w-[14px] [&_.icon]:h-[14px] [&_.icon]:text-[#afa0ff] [&_b]:text-[14px]
        [&_b]:text-[#acb6ff]">Stock overview <x-icon name="industry"/></div><div class="app-chart h-16 flex items-end gap-2 mt-[15px] [&_i]:flex-1 [&_i]:[background:linear-gradient(#9387fa,_#434da5)]
        [&_i]:h-[40%] [&_i]:rounded-[3px] [&_i]:origin-bottom
        [&_i]:animate-[chart-breathe_4s_ease-in-out_infinite_alternate] [&_i:nth-child(2)]:h-[70%]
        [&_i:nth-child(3)]:h-[50%] [&_i:nth-child(4)]:h-[85%] [&_i:nth-child(5)]:h-full
        [&_i:nth-child(2n)]:[animation-delay:-2s]"><i></i><i></i><i></i><i></i><i></i></div></div>
            <div class="phone primary [border:5px_solid_#252a39] rounded-[29px] [background:linear-gradient(155deg,_#121b34,_#080e20)]
        [padding:25px_16px_18px] w-[190px] h-90 shadow-[12px_20px_45px_#0008] overflow-hidden relative
        [--phone-angle:0deg] animate-[phone-float_7s_ease-in-out_infinite] [&.primary]:[transform:rotate(8deg)]
        [&.primary]:mt-[-12px] [&.primary]:[--phone-angle:8deg] [&.primary]:[animation-delay:-3s]
        [&.secondary]:[transform:rotate(-9deg)] [&.secondary]:mt-3 [&.secondary]:[--phone-angle:-9deg]
        [&.secondary]:[animation-duration:8s] [&_.eyebrow]:text-[6px] [&_.eyebrow]:tracking-[1px]
        [&_.eyebrow]:[margin:7px_0_15px] [&_h3]:text-[21px] [&_h3]:mb-3 [&_p]:text-[9px] [&_p]:text-[#a6b9d4]
        [&_>_img]:w-full [&_>_img]:h-full [&_>_img]:object-cover tablet:w-[165px] tablet:h-85 tablet:px-3
        tablet:[&_h3]:text-[18px] mobile:w-[175px] mobile:h-85
        reduce-motion:[&.primary]:[transform:rotate(8deg)] reduce-motion:[&.secondary]:[transform:rotate(-9deg)]"><div class="phone-notch w-[55px] h-[9px] rounded-[9px] [background:#020613] absolute top-2 left-[50%] [transform:translateX(-50%)]"></div><span class="eyebrow text-[11px] font-semibold tracking-[2.7px] text-[#a2a8ff] mb-[22px] mobile:mb-[18px] desktop:text-[13px]">ON THE MOVE</span><h3 class="leading-[1.15] font-semibold">Ready for<br>what's next.</h3><div class="app-orb h-[103px] grid place-items-center [background:radial-gradient(ellipse,_#7360ee60,_transparent_65%)]
        [&_.icon]:w-13 [&_.icon]:h-13 [&_.icon]:text-[#a99bff]"><x-icon name="mobile"/></div><div class="app-tile text-[9px] [background:#182440] [padding:11px_9px] flex justify-between items-center rounded-[7px]
        mt-[11px] [&_.icon]:w-[14px] [&_.icon]:h-[14px] [&_.icon]:text-[#afa0ff] [&_b]:text-[14px]
        [&_b]:text-[#acb6ff]">Connected workspace <span class="status-dot w-[6px] h-[6px] [background:#68d9b9] rounded-full"></span></div><div class="app-tile text-[9px] [background:#182440] [padding:11px_9px] flex justify-between items-center rounded-[7px]
        mt-[11px] [&_.icon]:w-[14px] [&_.icon]:h-[14px] [&_.icon]:text-[#afa0ff] [&_b]:text-[14px]
        [&_b]:text-[#acb6ff]">Tasks & updates <x-icon name="check"/></div><span class="app-button block [background:#624bef] rounded-[6px] [padding:9px_4px] text-center text-[8px] mt-[14px]">Your tools. Anywhere.</span></div>
        @endforelse
        @if(empty(config('website.app_screenshots')))<p class="preview-caption absolute bottom-[-20px] left-0 right-0 text-center text-[#8fa2bf] text-[10px] tracking-[0.4px]
        mobile:text-[9px] desktop:text-[12px]">Illustrative interfaces</p>@endif
    </div>
@else
    <div class="browser-group h-[365px] relative perspective-[1000px]
        [&:hover_.browser-front]:[transform:rotate(0)_translateY(-8px)]
        [&:hover_.browser-back]:[transform:rotate(-3deg)_translateX(-8px)] tablet:h-[330px] mobile:h-[345px]" aria-label="Website previews">
        @forelse(config('website.projects', []) as $project)
            <a class="[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] browser-card block
        [border:1px_solid_#6e84ae70] rounded-[9px] overflow-hidden [background:#101c30]
        shadow-[0_25px_60px_#0008] w-[72%] [transition:transform_0.6s]
        [&:hover_.project-image_img]:[transform:translateY(min(0px,_calc(310px_-_100%)))]" href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer"><div class="browser-bar h-[25px] [background:#c9d9ef] text-[#283e5b] text-[7px] [padding:5px_12px] tracking-[0.5px]"><span>● ● ●</span> {{ $project['name'] }} ↗</div><div class="project-image h-[310px] overflow-hidden [&_img]:w-full [&_img]:h-auto [&_img]:[transition:transform_5s_ease]"><img src="{{ asset($project['image']) }}" alt="{{ $project['name'] }} website" loading="lazy" width="600" height="900"></div></a>
        @empty
            <div class="browser-card browser-back block [border:1px_solid_#6e84ae70] rounded-[9px] overflow-hidden [background:#101c30]
        shadow-[0_25px_60px_#0008] w-[72%] [transition:transform_0.6s]
        [&:hover_.project-image_img]:[transform:translateY(min(0px,_calc(310px_-_100%)))] absolute left-0 top-10
        [transform:rotate(-7deg)]"><div class="browser-bar h-[25px] [background:#c9d9ef] text-[#283e5b] text-[7px] [padding:5px_12px] tracking-[0.5px]">● ● ● &nbsp; WEBSITE CONCEPT</div><div class="mini-site purple h-73 relative [padding:25px_22px] overflow-hidden
        [background:linear-gradient(135deg,_#cde0e5,_#94aab9)] text-[#142d40] [&_>_span:first-child]:text-[7px]
        [&_>_span:first-child]:tracking-[1px] [&_h3]:text-[32px] [&_h3]:[margin:16px_0_12px]
        [&_h3]:tracking-[-1px] [&_h3]:relative [&_h3]:z-2 [&_p]:text-[9px] [&_p]:relative [&_p]:z-2
        [&.purple]:[background:#161032] [&.purple]:text-white tablet:h-65 tablet:[&_h3]:text-[28px]"><span>MADE FOR PEOPLE</span><h3 class="leading-[1.15] font-semibold">Ideas into<br>impact.</h3><div class="mini-orb w-[170px] h-[170px]
        [background:radial-gradient(_circle_at_30%_30%,_#e8c0ff,_#674ac7_40%,_#100823_75%_)] rounded-full
        absolute right-[-60px] bottom-[10px] shadow-[0_0_25px_#a386ec50]"></div><p>Thoughtful design.<br>Real possibilities.</p><div class="mini-lines "></div></div></div>
            <div class="browser-card browser-front block [border:1px_solid_#6e84ae70] rounded-[9px] overflow-hidden [background:#101c30]
        shadow-[0_25px_60px_#0008] w-[72%] [transition:transform_0.6s]
        [&:hover_.project-image_img]:[transform:translateY(min(0px,_calc(310px_-_100%)))] absolute right-0 top-0
        [transform:rotate(3deg)]"><div class="browser-bar h-[25px] [background:#c9d9ef] text-[#283e5b] text-[7px] [padding:5px_12px] tracking-[0.5px]">● ● ● &nbsp; WEBSITE CONCEPT</div><div class="mini-site h-73 relative [padding:25px_22px] overflow-hidden
        [background:linear-gradient(135deg,_#cde0e5,_#94aab9)] text-[#142d40] [&_>_span:first-child]:text-[7px]
        [&_>_span:first-child]:tracking-[1px] [&_h3]:text-[32px] [&_h3]:[margin:16px_0_12px]
        [&_h3]:tracking-[-1px] [&_h3]:relative [&_h3]:z-2 [&_p]:text-[9px] [&_p]:relative [&_p]:z-2
        [&.purple]:[background:#161032] [&.purple]:text-white tablet:h-65 tablet:[&_h3]:text-[28px]"><span>A DIFFERENT PERSPECTIVE</span><h3 class="leading-[1.15] font-semibold">Build a<br>brighter<br>tomorrow.</h3><p>Room for your next big idea.</p><span class="mini-button text-[8px] [background:#1c394c] text-white [padding:7px_10px] inline-block mt-[13px] relative z-2">Explore what's possible ↗</span><div class="mini-landscape absolute right-[-45px] bottom-0 w-[70%] h-[70%]
        [background:linear-gradient(135deg,_#4d8796,_#1b354c)]
        [clip-path:polygon(0_100%,_40%_20%,_60%_50%,_85%_0,_100%_100%)]"></div><div class="mini-lines "></div></div></div>
            <p class="preview-caption absolute bottom-[-20px] left-0 right-0 text-center text-[#8fa2bf] text-[10px] tracking-[0.4px]
        mobile:text-[9px] desktop:text-[12px]">Design concepts · client previews coming soon</p>
        @endforelse
    </div>
@endif
