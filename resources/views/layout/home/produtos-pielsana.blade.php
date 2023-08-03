<section class="index-products-piel {{ $class ?? '' }}">
    <div class="image-intro">
        <x-layout.image image="several/s-pielsana.png"/>
    </div>
    <x-layout.container class="products">
        <div class="products--title">
            <x-layout.image image="several/heart-beat-line.png"/>
            <h2>Produtos <strong>Em Destaque</strong></h2>
            <h2><strong>Nossa linha completa de produtos pielsana</strong></h2>
        </div>
        <x-layout.carousel carouselName="products-slider">
            @foreach ($productsHighlight as $key => $product)
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
