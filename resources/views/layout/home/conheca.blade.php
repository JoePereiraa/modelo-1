@if (!empty($home['know-gallery']))
    <section class="index-know">
        <x-layout.container class="know">
            <div class="know__content">
                <div class="intro">
                    <h2>
                        {!! $home['know-title'] ?? '' !!}
                    </h2>
                    <button
                        class="btn-primary quaternary"
                        ng-click="eventoAtual1 =! eventoAtual1"
                        ng-class="{'active' : eventoAtual1}"
                    >
                        <h5 class="title">Ver Todos</h5>
                        <h5 class="title">Ver menos</h5>
                    </button>
                </div>
                <div class="cards">
                    @foreach (array_slice($home['know-gallery'], 0, 6) as $image)
                        <a class="card-image" href="{{ $image['url'] }}" data-lightbox="know-gallery">
                            {!! $helpers->gerarImg($image, true, '', false) ?? '' !!}
                        </a>
                    @endforeach
                </div>
                <div class="cards rest" ng-if="eventoAtual1">
                    @foreach (array_slice($home['know-gallery'], 6, 9999) as $key => $image)
                        <a class="card-image" href="{{ $image['url'] }}" data-lightbox="know-gallery">
                            {!! $helpers->gerarImg($image, true, '', false) ?? '' !!}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="card-extra">
                <h2>
                    Seja você também um<br>
                    <strong>CLIENTE ESPECIAL!</strong>
                </h2>
                <h5>
                    Solicite agora um Orçamento Rápido com <br>
                    Nossos Consultores. <strong>Preços ESPECIAIS <br>
                    para REVENDEDORES e DISTRIBUIDORES</strong>
                </h5>
                <x-buttons.primary
                    variation="secondary"
                    text="FALAR COM NOSSOS CONSULTORES"
                    modalType="orcamento"
                />
            </div>
        </x-layout.container>
    </section>
@endif
