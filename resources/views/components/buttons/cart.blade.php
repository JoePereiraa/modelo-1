@props(['text'])
<a  class="btn-cart" {{$attributes}}>
    {!! $helpers->gerarImg('default/image/icons/ico_cart-2.png' , true, '', false) ?? '' !!}
    @if (!empty($text)) <h6>{{ $text ?? '' }}</h6> @endif
</a>