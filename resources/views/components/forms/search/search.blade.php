@props(['variation', 'icon', 'busca'])
<form class="form-search {{ $variation ?? '' }}" {{ $attributes }}>
    <div class="content-form">
        <input id="search" type="search" name="busca" value="{{$busca ?? ''}}" placeholder="Digite aqui..." class="content-form--seek" required>
        @if (!empty($icon))
        <button class="content-form--btn">
            {!! $helpers->gerarImg('default/image/icons/'.$icon, true, '', false) ?? '' !!}
        </button>
        @endif
    </div>
</form>