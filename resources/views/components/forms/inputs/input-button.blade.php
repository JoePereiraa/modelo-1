<?php
    $icons="default/image/icons/"
?>

@props(['text', 'icon', 'variation'])

<button type="submit" class="btn-primary {{$variation ?? '' }}">
    @if (!empty ($icon))
        {!! $helpers->gerarImg($icons.$icon, true, 'icone', false) ?? '' !!}
    @endif
    @if(!empty($text))
        <h5 class="title">{{ mb_strtoupper($text ?? '')}}</h5>
    @endif
    {{$slot}}
</button>
