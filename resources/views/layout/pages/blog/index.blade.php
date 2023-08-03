
<section class="blog-list">
    <x-layout.container class="list">
        <aside @class(['list__category'])>
            <div class="search">
                <h5>Busca</h5>
                <x-forms.search.search
                    variation="type-2"
                    action="{{ route('blog') }}"
                    placeholder="Digite aqui o que você procura..."
                    icon="ico_search.png"
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
            @if (!empty($posts['data']))
                <div class="recents">
                    <h5>Matérias recentes</h5>
                    <div class="recents__cards">
                        @foreach (array_slice($posts['data'], 0, 3) as $key => $post)
                            <a class="card-recent" href="{{route('blog-interna', ['uri' =>$post['uri']])}}">
                                {!! $helpers->gerarImg($post['imagem'] ?? '', true, 'card-image', false) ?? '' !!}
                                <h4>{{ Str::limit($post['titulo'] ?? '', 60) }}</h4>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </aside>
        <div class="list__content">
            <div>
                <h3 class="list__content--title">{{ $titleCurrentCategory ?? '' }}</h3>
                <div class="list__content--cards">
                    @if(!empty($posts['data']))
                        @foreach ($posts['data'] as $key => $post)
                            <x-cards.card-blog
                                variation="secondary"
                                :key=$key
                                :post=$post
                            />
                        @endforeach
                    @else
                    <x-extras.not-found
                        text="Nenhum post encontrado"
                    />
                    @endempty
                </div>
                @include('components.extras.pagination', ['data' => $posts])
            </div>
        </div>
    </x-layout.container>
</section>
