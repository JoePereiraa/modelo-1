@props(['carouselName'])
<div {{ $attributes }} class="{{$carouselName ?? ''}} owl-carousel owl-theme">
    {{$slot}}
</div>