<div class="card-product">
    <a class="card-content" href="{{route('produto-interna', ['uri' => $product['uri']])}}">
        <h5 class="title-card">{{ $product['titulo'] ?? '' }}</h5>
        {!! $helpers->gerarImg($product['image'] ?? '', true, 'card-image', false) ?? '' !!}
        <h6 class="mb-3">{!! Str::limit($product['resum'] ?? '', 100) !!}</h6>
        <h5 class="title-card"><strong>Preço sob consulta</strong></h5>
    </a>
    <x-buttons.primary variation="budget" text="orçamento rápido" icon="ico_budget.png" modalType="orcamento" ng-click="setAssunto('{{addslashes($product['titulo'])}}')" />
    <x-buttons.primary variation="whatsapp" text="compre <br> pelo whatsapp" icon="ico_whatsapp-2.png" link="{{ $helpers->linkZap($product['titulo']) }}" target="_blank" />
</div>