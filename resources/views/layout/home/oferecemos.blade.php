@if (!empty($home['offer-card']))
    <section class="index-offer">
        <x-layout.container class="offer">
            <div class="content">
                <h2>{!! $home['offer-title'] ?? '' !!}</h2>
                <div class="content__cards">
                    @foreach ($home['offer-card'] as $card)
                        <div class="card-offer">
                            {!! $helpers->gerarImg($card['icon'], true, 'icon', false) ?? '' !!}
                            <div class="card-offer__text">
                                <h5>{{ $card['title'] ?? '' }}</h5>
                                <p>{{ $card['text'] ?? '' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-layout.container>
    </section>
@endif
