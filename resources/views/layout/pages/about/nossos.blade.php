@if (!empty($about['card-extra']))
<section class="about-ours">
    <x-layout.container class="ours">
        <x-layout.carousel carouselName="ours-slider">
            @foreach ($about['card-extra'] as $card)
                <div class="card-ours">
                    <div class="content">
                        {!! $helpers->gerarImg($card['image'], true, 'image-slider', false) ?? '' !!}
                        <div class="content--text">
                            <h2>{{ $card['title'] ?? '' }}</h2>
                            <h5>{{ $card['text'] ?? '' }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </x-layout.carousel>
    </x-layout.container>
</section>
@endif
