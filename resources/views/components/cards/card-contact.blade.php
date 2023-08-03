@props(['title'])
<div class="card-contact">
    <div class="card-contact--title">
        <h3>{{ $title ?? '' }}</h3>
    </div>
    <div class="card-contact__content">
        {{ $slot }}
    </div>
</div>
