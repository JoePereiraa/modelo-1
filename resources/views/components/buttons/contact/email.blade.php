<?php
    $icons = "default/image/icons/";
?>
@props(['style', 'variation', 'icon', 'title'])
@if (!empty ( $config['redes']['email'] ))
    <a class="btn-email{{ $style ?? ''}} {{ $variation ?? '' }}" href="mailto:{{ $config['redes']['email'] ?? '' }}" target="_blank">
        @if (!empty($icon))
        {!! $helpers->gerarImg($icons.$icon, true, '', false) ?? '' !!}
        @endif
        <h5 class="btn-email{{ $style ?? '' }}__text">
            <span>{!! $title ?? '' !!}</span>
            {!! $config['redes']['email'] ?? '' !!}
        </h5>
    </a>
@endif
