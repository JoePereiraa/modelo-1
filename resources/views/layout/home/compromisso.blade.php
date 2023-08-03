@if (!empty($courses))
    <section class="index-compr">
        <x-layout.container class="compr">
            <div class="compr--text">
                {!! $home['compr-text'] ?? '' !!}
            </div>
            <x-layout.carousel carouselName="compr-slider">
                @foreach ($courses as $key => $card)
                    <x-cards.card-course :key=$key :card=$card/>
                @endforeach
            </x-layout.carousel>
            <x-buttons.primary
                variation="tertiary"
                text="Ver todos os cursos"
                icon="ico_hat.png"
                link="{{ route('cursos-e-treinamentos') }}"
            />
        </x-layout.container>
    </section>
@endif
