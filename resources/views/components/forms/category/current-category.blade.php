@props(['title'])
<div {{ $attributes }} class="current-category">
    @if (!empty($title))
        <h5 class="current-category--title">{{$title ?? ''}}</h5>
    @else
        <h5 class="current-category--title">Categorias</h5>
    @endif
    <div class="current-category__content">
        {{ $slot }}     
    </div>         
</div>