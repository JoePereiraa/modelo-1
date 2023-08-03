<?php
    $icons = "default/image/icons/";
?>
@props(['style', 'variation', 'icon', 'title'])
@if (!empty ( $config['whatsapp']['numero'] ))
    <a class="btn-whatsapp{{ $style ?? ''}} {{ $variation ?? '' }}" href="{{ $config['whatsapp']['link'] }}" target="_blank">
        @if (!empty($icon))
        {!! $helpers->gerarImg($icons.$icon, true, '', false) ?? '' !!}
        @endif
        <h5 class="btn-whatsapp{{ $style ?? '' }}__text">
            <span>{!! $title ?? '' !!}</span>
            {!! $config['whatsapp']['numero'] ?? '' !!}
        </h5>
    </a>
@endif
