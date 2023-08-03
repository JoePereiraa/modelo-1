@if (!empty($page['benefit-card']))
    <section class="piel-benefits">
        <x-layout.container class="benefits">
            <div class="content">
                <h2>{!! $page['benefit-title'] ?? '' !!}</h2>
                <div class="content__cards">
                    @foreach ($page['benefit-card'] as $card)
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
