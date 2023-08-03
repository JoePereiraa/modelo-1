@if (!empty($home['choose-card']))
    <section class="index-choose">
        <x-layout.container class="choose">
            <h2>{!! $home['choose-title'] ?? '' !!}</h2>
            <div class="choose__cards">
                @foreach ($home['choose-card'] as $card)
                    <div class="card-choose">
                        {!! $helpers->gerarImg($card['icon'], true, '', false) ?? '' !!}
                        <div class="card-choose__text">
                            <span>{{ $card['title'] ?? '' }}</span>
                            <p>{{ $card['text'] ?? '' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-layout.container>
    </section>
@endif
