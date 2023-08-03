<section class="index-products">
    <x-layout.container class="products">
        <div class="products--title">
            <x-layout.image image="several/heart-beat-line.png"/>
            <h2>Produtos <strong>Em Geral</strong></h2>
        </div>
        <x-layout.carousel carouselName="products-slider">
            @foreach ($products as $product)
                <div class="p-box">
                    <x-cards.card-product :product=$product/>
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
