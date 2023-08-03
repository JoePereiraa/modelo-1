<?php 
    $icons="default/image/icons/"
?>

@props(['link', 'text', 'icon'])

<a {{ $attributes }}href="{{$link ?? '' }}" class="btn-link">
    @if (!empty ($icon))
        {!! $helpers->gerarImg($icons.$icon, true, '', false) ?? '' !!}
    @endif
    @if(!empty($text))
        <h5 class="btn-link__title">{{$text ?? ''}}</h5>
    @endif
    {{$slot}}
</a>
