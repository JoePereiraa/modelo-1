@if (!empty($productsRelations))
    <section class="products-relation">
        <x-layout.container class="relation">
            <h2>Confira TAMBÉM <strong>OUTROS PRODUTOS</strong> DE NOSSO CATÁLOGO!</h2>
            <x-layout.carousel carouselName="products-slider">
                @foreach ($productsRelations as $product)
                    <div class="p-box">
                        <x-cards.card-product :product=$product />
                    </div>
                @endforeach
            </x-layout.carousel>
            <x-buttons.primary
                variation="tertiary"
                text="ver todos os produtos"
                link="{{ route('produtos') }}"
            />
        </x-layout.container>
    </section>
@endif
