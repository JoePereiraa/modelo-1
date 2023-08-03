<?php
    $icons="default/image/icons/"
?>

@props(['link', 'text', 'icon', 'variation', 'modalType'])

<a
    {{ $attributes }}
    @if(empty($link) || empty($modalType))
        @if (!empty($link))
            href="{{$link ?? ''}}"
        @endif
        @if (!empty($modalType))
            data-bs-target="#{{ $modalType ?? ''}}Modal"
            data-bs-toggle="modal"
        @endif
        class="btn-primary {{$variation ?? ''}} @if(empty($link) && empty($modalType)) btn-error @endif"
    @endif
>
    @if (!empty ($icon))
        {!! $helpers->gerarImg($icons.$icon, true, 'icone', false) ?? '' !!}
    @endif
    @if(!empty($text))
        <h5 class="title">{!! mb_strtoupper($text ?? '') !!}</h5>
    @endif
    {{$slot}}
</a>
