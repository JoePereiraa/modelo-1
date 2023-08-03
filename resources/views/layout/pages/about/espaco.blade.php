@if (!empty($about['space-gallery']))
    <section class="about-space">
        <h2>Conheça nosso espaço</h2>
        <x-layout.carousel carouselName="space-slider">
            @foreach ($about['space-gallery'] as $image)
                <x-buttons.link class="card-image" link="{{ $image['url'] ?? '' }}" data-lightbox="space-gallery">
                    {!! $helpers->gerarImg($image, true, 'image-slider', false) ?? '' !!}
                </x-buttons.link>
            @endforeach
        </x-layout.carousel>
    </section>
@endif
