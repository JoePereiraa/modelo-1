<?php
    $dir = 'default/image/'
?>

@props(['image'])
@if (!empty ( $image ))
    <div {{ $attributes }}>
        {!! $helpers->gerarImg($dir.$image, true, '', false) ?? '' !!}
    </div>
@endif
