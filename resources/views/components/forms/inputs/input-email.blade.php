@props(['label', 'variation'])
<div class="input {{ $variation ?? '' }}">
    @if (!empty ($label))
        <label>{{ $label }}</label>
    @endif
    <input {{ $attributes }} type="email" name="email" ng-model="form.email" required>
</div>