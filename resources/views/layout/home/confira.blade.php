<section class="index-confer">
    <x-layout.container class="confer">
        <h2>Confira <strong>nossos produtos</strong></h2>
        <x-layout.carousel carouselName="category-slider">
            @foreach ($productsCategories as $cat)
                <a class="card-category" href="{{route('produtos', ['categoria' => $cat['uri']])}}">
                    @if (!empty($cat['icon']))
                        {!! $helpers->gerarImg($cat['icon'] ?? '', true, '', false) ?? '' !!}
                    @endif
                    <h5>{{ $cat['titulo'] }}</h5>
                </a>
            @endforeach
        </x-layout.carousel>
        <x-buttons.primary
            variation="tertiary"
            text="Ver Todos Os Produtos"
            link="{{ route('produtos') }}"
        />
    </x-layout.container>
</section>
