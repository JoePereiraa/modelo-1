@props(['style'])
<video class="layout-video {{ $style ?? '' }}" {{ $attributes }}>
    {{$slot}}
</video>