<section class="news-inner">
    <x-layout.container class="inner">
        <aside class="inner__category">
            <div class="search">
                <h5>Busca</h5>
                <x-forms.search.search
                    variation="type-2"
                    action="{{ route('blog') }}"
                    placeholder="Digite aqui o que você procura..."
                />
            </div>
            <div class="current-category">
                <h4 class="current-category--title">Categorias</h4>
                <div class="current-category__content">
                    <a
                        href="{{ route('blog') }}"
                        class="item-category {{ empty($currentCategory) ? 'active' : '' }}"
                    >
                        <h5>Todas as notícias</h5>
                    </a>
                    @foreach($blogCategories as $key => $cat)
                        <a
                            href="{{route('blog-categoria', ['uri' => $cat['uri']])}}"
                            class="item-category {{ $currentCategory == $cat['id'] ? 'active' : '' }}">
                            <input type="checkbox"

                            >
                            <h5>{{$cat['titulo']}}</h5>
                        </a>
                    @endforeach
                </div>
            </div>
            @if (!empty($blogRecent))
                <div class="recents">
                    <h5>Matérias recentes</h5>
                    <div class="recents__cards">
                        @foreach (array_slice($blogRecent, 0, 3) as $key => $post)
                            <a class="card-recent" href="{{route('blog-interna', ['uri' =>$post['uri']])}}">
                                {!! $helpers->gerarImg($post['imagem'] ?? '', true, 'card-image', false) ?? '' !!}
                                <h4>{{ $post['titulo'] ?? '' }}</h4>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </aside>
        <div class="inner__content">
            <h2 class="post-title">{{ $post['titulo'] ?? '' }}</h2>

            @if (!empty($post['imagem']))
                {!! $helpers->gerarImg($post['imagem'], true, 'image-big', false) ?? '' !!}
            @endif
            <div class="post-share">
                <h4>COMPARTILHE</h4>
                <div class="links">
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{URL::current()}}"><i class="fab fa-facebook"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url={{URL::current()}}"><i class="fab fa-linkedin-in"></i></a>
                    <a target="_blank" href="https://twitter.com/intent/tweet?url={{URL::current()}}"><i class="fab fa-twitter"></i></a>
                    <a target="_blank" href="https://wa.me?text={{URL::current()}}"><i class="fab fa-whatsapp"></i></a>
                    <a target="_blank" href="mailto:?body={{URL::current()}}"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <hr>
            @if (!empty($post['texto']) || !empty($post['titulo']))
                <div class="inner__content--texts">
                    {!! $post['texto'] ?? '' !!}
                </div>
            @endif
            <div id="disqus_thread"></div>
            <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://g-medical.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
    </x-layout.container>
</section>
