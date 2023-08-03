<div class="card-course">
    {!! $helpers->gerarImg($card['icon'] ?? '', true, 'icon', false) ?? '' !!}
    <div class="card-course__content">
        <h5 class="card-course__content--title">{!! $card['text'] ?? '' !!}</h5>
        <x-buttons.primary
            variation="link"
            text="saiba mais"
            link="{{route('curso-interna', ['uri' =>$card['uri']])}}"
        />
    </div>
</div>
