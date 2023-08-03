@props(['label', 'variation'])
<div class="input {{ $variation ?? '' }}">
    @if (!empty ($label))
        <label>{{ $label }}</label>
    @endif
    <input {{ $attributes }} id="celular" type="text" name="telefone" ng-model="form.telefone" required>
</div>