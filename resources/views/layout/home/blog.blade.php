@if (!empty($blog))
    <section class="index-blog">
        <x-layout.container class="blog">
            <h2>Confira as matérias <strong>do nosso blog</strong></h2>
            <x-layout.carousel carouselName="blog-slider">
                @foreach ($blog as $post)
                    <x-cards.card-blog :post=$post/>
                @endforeach
            </x-layout.carousel>
            <x-buttons.primary
                text="ACESSAR O BLOG"
                variation="tertiary"
                link="{{ route('blog') }}"
            />
        </x-layout.container>
    </section>
@endif
