@if(!empty($work['card-work']))
    <section class="work-areas">
        <h2>Aqui estão algumas das áreas de atuação em destaque:</h2>
        <x-layout.carousel carouselName="areas-slider">
            @foreach ($work['card-work'] as $card)
                <div class="card-work" style="background-image: url('{{ $card['background']['url'] ?? '' }}')">
                    <span>{!! $card['title'] ?? '' !!}</span>
                </div>
            @endforeach
        </x-layout.carousel>
    </section>
@endif
