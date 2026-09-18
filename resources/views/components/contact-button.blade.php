@props(['label' => 'WhatsApp us'])
<a href="#contact" data-contact-open {{ $attributes->merge(['class' => 'button']) }}><x-icon name="chat"/>{{ $label }}<x-icon name="arrow"/></a>
