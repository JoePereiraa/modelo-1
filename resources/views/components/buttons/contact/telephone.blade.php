<?php
    $icons = "default/image/icons/";
?>
@props(['style', 'variation', 'icon', 'title'])
@if (!empty ( $config['whatsapp']['numero'] ))
    <a class="btn-telephone{{ $style ?? ''}} {{ $variation ?? '' }}" href="{{ $config['telefone']['link'] }}">
        @if (!empty($icon))
        {!! $helpers->gerarImg($icons.$icon, true, '', false) ?? '' !!}
        @endif
        <h5>
            <span>{!! $title ?? '' !!}</span>
            {!! $config['telefone']['numero'] ?? '' !!}
        </h5>
    </a>
@endif
