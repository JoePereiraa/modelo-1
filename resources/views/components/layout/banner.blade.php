@if (!empty($home['banner-home']))
    <section class="banner">
        <x-layout.carousel carouselName="banner-slider">
            @foreach ($home['banner-home'] as $key => $banner)
                <a class="item-banner"
                    @if ($key == 0 )
                        href="{{ route('produtos-pielsana') }}"
                    @elseif ($key == 1)
                        href="{{ route('produtos') }}"
                    @elseif ($key ==2)
                        href="{{ route('cursos-e-treinamentos') }}"
                    @endif
                >
                    {!! $helpers->gerarImg($banner['banner-desktop'], true, 'image-banner hide-mobile', false) ?? '' !!}
                    {!! $helpers->gerarImg($banner['banner-mobile'], true, 'image-banner hide-desktop', false) ?? '' !!}
                    @if (!empty ($banner['text']))
                        <x-layout.container class="content">
                            <div class="texts">
                                {!! $banner['text'] !!}

                                <div class="btn-primary secondary">
                                    <h5 class="title">{{ $banner['text-button'] ?? '' }}</h5>
                                </div>
                            </div>
                        </x-layout.container>
                    @endif
                </a>
            @endforeach
        </x-layout.carousel>
    </section>
@endif
<section class="s-objective">
    <x-layout.container class="objective">
        <span class="img">
            <x-layout.image image="pseudo/s-objective-heart.png" />
        </span>
        <h6>{!! $home['objective-phrase'] ?? '' !!}</h6>
        <x-buttons.contact.whatsapp
            title="Chame no <strong>Whatsapp</strong>"
            icon="ico_whatsapp.png"
        />
        <x-buttons.primary
            variation="budget"
            text="seja um revendedor"
            icon="ico_budget.png"
            link="{{ route('revendedor') }}"
        />
        <x-buttons.primary
            text="compre no atacado"
            icon="ico_box.png"
            modalType="atacado"
        />
    </x-layout.container>
</section>

