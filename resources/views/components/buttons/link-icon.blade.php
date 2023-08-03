<?php 
    $icons = 'default/image/icons/'
?>

@props(['link', 'icon'])

<a {{ $attributes }} href="{{$link ?? '' }}" class="btn-linkIcon">
    {!! $helpers->gerarImg($icons.$icon, true, 'icon', false) ?? '' !!}
</a>