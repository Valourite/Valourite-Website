@props(['label' => 'Contact us'])
<a href="#enquiry-form"
   data-contact-cta
   data-mobile-href="https://wa.me/{{ config('website.contacts.0.number') }}?text={{ rawurlencode('Hi Dayne, I would like to discuss a project with Valourite.') }}"
   {{ $attributes->merge(['class' => 'button']) }}>
    <x-icon name="chat"/>{{ $label }}<x-icon name="arrow"/>
</a>
