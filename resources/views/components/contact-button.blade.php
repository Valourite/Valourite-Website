@props(['label' => 'Contact us'])
<a href="#enquiry-form"
   data-contact-cta
   data-mobile-href="https://wa.me/{{ config('website.contacts.0.number') }}?text={{ rawurlencode('Hi Dayne, I would like to discuss a project with Valourite.') }}"
   {{ $attributes->merge(['class' => '[-webkit-tap-highlight-color:transparent] touch-manipulation no-underline
        focus-visible:[outline:2px_solid_#7dd3fc] focus-visible:outline-offset-[6px] button inline-flex
        items-center justify-center gap-3 [padding:13px_20px] [border:1px_solid_#7487ff99] rounded-[9px]
        [background:linear-gradient(110deg,_#6448ef,_#354af2)] text-white text-[14px] font-semibold
        shadow-[0_0_24px_#5144ff45] [transition:box-shadow_0.25s,_transform_0.25s] min-h-12
        [&_.icon:last-child]:w-[18px] hover:[transform:translateY(-3px)] hover:shadow-[0_0_32px_#7255ff90]
        mobile:text-[13px] mobile:px-4 desktop:text-[17px] desktop:[padding:15px_23px]']) }}>
    <x-icon name="chat"/>{{ $label }}<x-icon name="arrow"/>
</a>
