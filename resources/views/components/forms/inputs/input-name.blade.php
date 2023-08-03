@props(['label', 'variation'])
<div class="input {{ $variation ?? '' }}">
    @if (!empty ($label))
        <label>{{ $label }}</label>
    @endif
    <input {{ $attributes }} type="text" name="nome" ng-model="form.nome" required>
</div>