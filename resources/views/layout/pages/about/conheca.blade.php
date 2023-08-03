@if (!empty($about['know-gallery']))
    <section class="about-know">
        <x-layout.container class="know">
            <div class="content">
                <div class="content--text">
                    {!! $about['know-text'] ?? '' !!}
                </div>
                <x-layout.carousel carouselName="know-slider">
                    @foreach ($about['know-gallery'] as $image)
                        <x-buttons.link link="{{ $image['url'] }}" data-lightbox="know-gallery">
                            {!! $helpers->gerarImg($image, true, 'image-slider', false) ?? '' !!}
                        </x-buttons.link>
                    @endforeach
                </x-layout.carousel>
            </div>
        </x-layout.container>
    </section>
@endif
