<?php
    $icons = "default/image/icons/";
?>
@props(['style', 'variation', 'icon', 'title'])
@if (!empty( $unidade['endereco'] ))
    <a class="btn-local{{ $style ?? ''}} {{ $variation ?? '' }}" href="{{ $unidade['link'] ?? '' }}" target="_blank">
        @if (!empty($icon))
        {!! $helpers->gerarImg($icons.$icon, true, '', false) ?? '' !!}
        @endif
        <h5>
            <span>{!! $title ?? '' !!}</span>
            {!! $unidade['endereco'] ?? '' !!}
        </h5>
    </a>
@endif
