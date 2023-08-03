<?php 
    $icons = "default/image/icons/";
?>
@props(['style', 'variation', 'icon', 'title'])
@if (!empty ( $config['whatsapp']['numero'] ))
    <a class="btn-time {{ $variation ?? '' }} pe-none">
        {!! $helpers->gerarImg($icons.$icon, true, '', false) ?? '' !!}
        <h5 class="title">
            <strong>Funcionamento</strong>
            {!! $config['redes']['funcionamento'] !!}
        </h5>
    </a>
@endif