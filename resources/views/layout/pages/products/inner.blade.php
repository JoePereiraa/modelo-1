<section class="products-inner">
    <x-layout.container class="inner">
        <div class="inner__aside">
            <div class="search">
                <h5>BUSCA</h5>
                <x-forms.search.search variation="type-2" action="{{ route('produtos') }}" placeholder="Digite aqui o que você procura..." icon="ico_search.png" />
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
        <div class="inner__content">
            <div class="product-info">
                <div class="gallery">
                    @if (!empty ($product['gallery']))
                    <div class="image-big">
                        <x-layout.carousel carouselName="product-inner-slider">
                            @foreach ($product['gallery'] as $image)
                            <a href="{{ $image['url'] }}" data-lightbox="product-inner-gallery">
                                {!! $helpers->gerarImg($image, true, 'image-product', false) ?? '' !!}
                            </a>
                            @endforeach
                        </x-layout.carousel>
                    </div>
                    <div class="mini-images">
                        @foreach(array_slice($product['gallery'], 0, 3) as $key => $img)
                        <a ng-click="alterarImgPrincipal({{$key}}, '.product-inner-slider')">
                            {!! $helpers->gerarImg($img, true, '', false) !!}
                        </a>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="infos">
                    <h2>{{ $product['titulo'] ?? '' }}</h2>
                    <h5 class="my-3">{{ $product['size'] ?? '' }}</h5>
                    <h6>{{ $product['quant'] ?? '' }}</h6>
                    <hr>
                    <div class="infos--btns">
                        <h2>Preço sob consulta</h2>
                        <x-buttons.primary variation="budget" text="orçamento rápido" icon="ico_budget.png" modalType="orcamento" ng-click="setAssunto('{{addslashes($product['titulo'])}}')" />
                        <x-buttons.primary variation="whatsapp" text="compre <br> pelo whatsapp" icon="ico_whatsapp-2.png" link="{{ $config['whatsapp']['link'] ?? '' }}" target="_blank" />
                    </div>
                </div>
            </div>
            @if (!empty($product['inst']))
            <div class="product-description">
                <h4>INSTRUÇÕES DE USO</h4>
                <p>{!! nl2br($product['inst'] ?? '') !!}</p>
            </div>
            @endif
            @if (!empty($product['descricao-completa']))
            <div class="product-description mt-4">
                <h4>DESCRIÇÃO</h4>
                <p>{!! $product['descricao-completa'] !!}</p>
            </div>
            @endif
        </div>
    </x-layout.container>
</section>
