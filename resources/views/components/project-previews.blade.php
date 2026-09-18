@props(['mobile' => false])
@if($mobile)
    <div class="phone-group" aria-label="Illustrative app interface previews">
        @forelse(config('website.app_screenshots', []) as $screenshot)
            <div class="phone"><img src="{{ asset($screenshot['image']) }}" alt="{{ $screenshot['alt'] }}" loading="lazy" width="280" height="560"></div>
        @empty
            <div class="phone secondary"><div class="phone-notch"></div><span class="eyebrow">YOUR WORKDAY</span><h3>Good morning.</h3><p>Everything in one place.</p><div class="app-tile">Today's jobs <b>08</b></div><div class="app-tile">Your team <b>12</b></div><div class="app-tile">Stock overview <x-icon name="industry"/></div><div class="app-chart"><i></i><i></i><i></i><i></i><i></i></div></div>
            <div class="phone primary"><div class="phone-notch"></div><span class="eyebrow">ON THE MOVE</span><h3>Ready for<br>what's next.</h3><div class="app-orb"><x-icon name="mobile"/></div><div class="app-tile">Connected workspace <span class="status-dot"></span></div><div class="app-tile">Tasks & updates <x-icon name="check"/></div><span class="app-button">Your tools. Anywhere.</span></div>
        @endforelse
        @if(empty(config('website.app_screenshots')))<p class="preview-caption">Illustrative interfaces</p>@endif
    </div>
@else
    <div class="browser-group" aria-label="Website previews">
        @forelse(config('website.projects', []) as $project)
            <a class="browser-card" href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer"><div class="browser-bar"><span>● ● ●</span> {{ $project['name'] }} ↗</div><div class="project-image"><img src="{{ asset($project['image']) }}" alt="{{ $project['name'] }} website" loading="lazy" width="600" height="900"></div></a>
        @empty
            <div class="browser-card browser-back"><div class="browser-bar">● ● ● &nbsp; WEBSITE CONCEPT</div><div class="mini-site purple"><span>MADE FOR PEOPLE</span><h3>Ideas into<br>impact.</h3><div class="mini-orb"></div><p>Thoughtful design.<br>Real possibilities.</p><div class="mini-lines"></div></div></div>
            <div class="browser-card browser-front"><div class="browser-bar">● ● ● &nbsp; WEBSITE CONCEPT</div><div class="mini-site"><span>A DIFFERENT PERSPECTIVE</span><h3>Build a<br>brighter<br>tomorrow.</h3><p>Room for your next big idea.</p><span class="mini-button">Explore what's possible ↗</span><div class="mini-landscape"></div><div class="mini-lines"></div></div></div>
            <p class="preview-caption">Design concepts · client previews coming soon</p>
        @endforelse
    </div>
@endif
