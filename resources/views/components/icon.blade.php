@props(['name'])
<svg {{ $attributes->merge(['class' => 'icon']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @switch($name)
        @case('automation') <path d="m9 3-1 3-3 1 1 3-2 2 2 2-1 3 3 1 1 3h6l1-3 3-1-1-3 2-2-2-2 1-3-3-1-1-3Z"/><circle cx="12" cy="12" r="3"/> @break
        @case('industry') <path d="M3 21V10l6 3V7l6 4V3h5l1 18ZM7 17h1m4 0h1m4 0h1"/> @break
        @case('website') <rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8m-4-4v4"/> @break
        @case('mobile') <rect x="6" y="2" width="12" height="20" rx="3"/><path d="M10 5h4m-3 14h2"/> @break
        @case('chat') <path d="M21 11.5a9 9 0 0 1-13 8L3 21l1.5-5A9 9 0 1 1 21 11.5Z"/><path d="M8 9h8m-8 4h5"/> @break
        @case('mail') <rect x="2" y="4" width="20" height="16" rx="2"/><path d="m3 6 9 7 9-7"/> @break
        @case('phone') <path d="m6 3 4 4-3 3c2 4 3 5 7 7l3-3 4 4c-1 4-4 4-7 3C7 18 3 14 2 7c0-3 1-4 4-4Z"/> @break
        @case('arrow') <path d="M4 12h16m-6-6 6 6-6 6"/> @break
        @default <path d="m5 12 4 4L19 6"/>
    @endswitch
</svg>
