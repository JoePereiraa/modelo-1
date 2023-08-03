@if (!empty ($blogRelation))
    <section class="blog-relation">
        <x-layout.container class="relation">
            <h2 class="relation--title">Confira aqui outras matérias</h2>
            <x-layout.carousel carouselName="relations-slider">
                @foreach ($blogRelation as $post)
                    <x-cards.card-blog :post=$post/>
                @endforeach
            </x-layout.carousel>
        </x-layout.container>
    </section>
@endif
