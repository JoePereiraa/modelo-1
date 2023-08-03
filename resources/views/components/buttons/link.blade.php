@props(['link'])

<a {{ $attributes }} 
    @if(!empty ( $link )) 
        href="{{$link ?? '' }}" 
    @endif
    @if(empty($link)) class="btn-error"  @endif
>
    {{$slot}}
</a>
