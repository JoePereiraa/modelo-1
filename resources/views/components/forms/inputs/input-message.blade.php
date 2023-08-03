@props(['label', 'variation'])
<div class="input {{ $variation ?? '' }}">
    @if (!empty ($label))
        <label>{{ $label }}</label>
    @endif
    <textarea {{ $attributes }} name="mensagem" ng-model="form.mensagem"></textarea>
</div>