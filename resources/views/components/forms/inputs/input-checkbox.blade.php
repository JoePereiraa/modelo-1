@props(['label', 'variation'])
@php
$idCheck = uniqid();
@endphp
<div class="input-checkbox {{ $variation ?? '' }}">
    <input {{ $attributes }} type="checkbox" id="checkbox_{{$idCheck}}">
    @if (!empty ($label))
    <label for="checkbox_{{$idCheck}}">{{ $label ?? ''}}</label>
    @endif
</div>