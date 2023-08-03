<section class="products-index">
    <x-layout.container class="index">
        <div class="index__aside">
            <div class="search">
                <h5>BUSCA</h5>
                <x-forms.search.search busca="{{$busca??''}}" variation="type-2" action="{{ route('produtos') }}" placeholder="Digite aqui o que você procura..." icon="ico_search.png" />
            </div>
            <div class="current-category">
                <h4 class="current-category--title">Categorias</h4>
                <div class="current-category__content">
                    <a href="{{ route('produtos') }}" class="item-category {{ empty($currentCategory) ? 'active' : '' }}">
                        <h5>Todos os produtos</h5>
                    </a>
                    @foreach($productCategories as $key => $cat)
                    <a href="{{route('produtos', ['categoria' => $cat['uri']])}}" class="item-category {{ $currentCategory == $cat['id'] ? 'active' : '' }}">
                        <input type="checkbox">
                        <h5>{{$cat['titulo']}}</h5>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="index__content">
            <div class="cards">
                @if (!empty($products['data']))
                @foreach ($products['data'] as $key => $product)
                <x-cards.card-product :product=$product />
                @endforeach
                @else
                <x-extras.not-found text="Nenhum produto encontrado" />
                @endif
            </div>
            @include('components.extras.pagination', ['data' => $products])
        </div>
    </x-layout.container>
</section>