@if (!empty($depositions))
    <section class="index-clients">
        <x-layout.container class="clients">
            <div class="clients--text">
                {!! $home['clients-text'] ?? '' !!}
            </div>
            <x-layout.carousel carouselName="clients-slider">
                @foreach ($depositions as $card)
                    <div class="card-deposition">
                        <div class="card-image">
                            {!! $helpers->gerarImg($card['image'], true, '', false) ?? '' !!}
                        </div>
                        <div class="card-content">
                            <h5>{!! $card['titulo'] ?? '' !!}</h5>
                            <h6>{!! $card['depoimento'] ?? '' !!}</h6>
                        </div>
                    </div>
                @endforeach
            </x-layout.carousel>
        </x-layout.container>
    </section>

@endif
