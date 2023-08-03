<section class="carrinho">
    <div class="container big">
        <div class="passos d-none d-lg-flex">
            <a class="ativo">
                <strong>1</strong>
                Lista de produtos
            </a>
            <a>
                <strong>2</strong>
                Informe os seus dados
            </a>
            <a>
                <strong>3</strong>
                Envie o seu orçamento
            </a>
        </div>
        <div class="passos d-flex d-lg-none">
            <a class="ativo">Produtos</a>
            <a>Dados</a>
            <a>Enviado</a>
        </div>
        @if(!empty($carrinho))
        <div class="d-none d-lg-block">
            <table class="tabela-carrinho">
                <thead>
                    <tr class="d-flex">
                        <td class="col-4">Produto</td>
                        <td class="col-4 text-center">Quantidade</td>
                        <td class="col-2 text-center">Preço</td>
                        <td class="col-2 text-center">Ação</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carrinho as $key => $item)
                    <tr class="d-flex">
                        <td class="col-lg-4">
                            <a href="{{route('produto-interna', ['uri' => $item['uri'] ?? ''])}}" class="produto">
                                @if(!empty($item['imagem']['url']))
                                {!! $helpers->gerarImg($item['imagem'], true, 'img-thumbnail') !!}
                                @else
                                {!! $helpers->gerarImg('default/image/caixa.png', true, 'img-thumbnail') !!}
                                @endif
                                <div class="ms-3">
                                    <h5>{{$item['titulo']}}</h5>
                                    @if(!empty($item['opcoes']))
                                    <div class="opcoes-produto">
                                        @foreach($item['opcoes'] as $optKey => $opt)
                                        <strong>{{$optKey}}:</strong> {{$opt}}
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </a>
                        </td>
                        <td class="col-4">
                            <div class="quantidade" id="editor{{$key}}">
                                <input ng-disabled="ajaxPendente" ng-change="alterarQtdCarrinhoInput('{{$key}}')" ng-model-options="{ debounce: 500 }" type="text" class="mask-numero" ng-model="qtdCarrinho{{$key}}" ng-init="qtdCarrinho{{$key}} = {{$item['quantidade']}}"></input>
                                <div class="opcoes">
                                    <a class="aumentar" ng-click="aumentarQtdCarrinho('{{$key}}')"><i class="fas fa-plus"></i></a>
                                    <a class="diminuir" ng-click="diminuirQtdCarrinho('{{$key}}')"><i class="fas fa-minus"></i></a>
                                </div>
                                <div class="qtd-loading">
                                    <i class="fas fa-spinner fa-spin"></i>
                                </div>
                            </div>
                        </td>
                        <td class="col-2">
                            <strong>{{$item['valor'] != 0 ? 'R$ ' . number_format($item['valor'], 2, ',', '.') : 'Sob consulta'}}</strong>
                        </td>
                        <td class="col-2">
                            <a class="remover" ng-click="removerCarrinho('{{$key}}', $event)">
                                <i class="fas fa-trash-alt"></i
                                <i class="fas fa-spinner fa-spin loader"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-block d-lg-none">
            <div class="carrinho-mobile">
                @foreach($carrinho as $key => $item)
                <div class="row produto">
                    <div class="col-3 p-0">
                        <a href="{{route('produto-interna', ['uri' => $item['uri'] ?? ''])}}">
                            @if(!empty($item['imagem']['url']))
                            {!! $helpers->gerarImg($item['imagem']) !!}
                            @else
                            {!! $helpers->gerarImg('default/image/caixa.png') !!}
                            @endif
                        </a>
                    </div>
                    <div class="col-9">
                        <a href="{{route('produto-interna', ['uri' => $item['uri'] ?? ''])}}">
                            <strong>{{$item['titulo']}}</strong>
                        </a><br>
                        @if(!empty($item['opcoes']))
                        <div class="opcoes-produto">
                            @foreach($item['opcoes'] as $optKey => $opt)
                            <strong>{{$optKey}}:</strong> {{$opt}}
                            @endforeach
                        </div>
                        @endif
                        <span class="titulo">Preço:</span>
                        {{$item['valor'] != 0 ? 'R$ ' . number_format($item['valor'], 2, ',', '.') : 'Consulte-nos'}}<br>
                        <span class="titulo">Quantidade:</span>
                        <div class="quantidade" id="editorMobile{{$key}}">
                            <input ng-disabled="ajaxPendente" ng-change="alterarQtdCarrinhoInput('{{$key}}')" ng-model-options="{ debounce: 500 }" type="text" class="mask-numero" ng-model="qtdCarrinho{{$key}}" ng-init="qtdCarrinho{{$key}} = {{$item['quantidade']}}"></input>
                            <div class="opcoes">
                                <a class="aumentar" ng-click="aumentarQtdCarrinho('{{$key}}')"><i class="fas fa-plus"></i></a>
                                <a class="diminuir" ng-click="diminuirQtdCarrinho('{{$key}}')"><i class="fas fa-minus"></i></a>
                            </div>
                            <div class="qtd-loading">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div class="col-12">
                        <a class="removerMobile" ng-click="removerCarrinho('{{$key}}', $event)">
                            <span>
                                <i class="fas fa-trash-alt"></i> Remover
                            </span>
                            <i class="fas fa-spinner fa-spin loader"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="empty mb-lg-3">Seu carrinho está vazio!</div>
        @endif
        <div class="box text-center">
            <a href="{{@route('carrinho-dados')}}" class="btn-primary">
                <i class="far fa-check-square"></i>
                <h5 class="btn-primary__title">PRÓXIMO PASSO</h5>
            </a>
            <div class="aaaa mt-4">
                <a href="{{$returnUrl}}" class="continuar">
                    <i class="fas fa-chevron-left me-2"></i>CONTINUAR COMPRANDO
                </a>
            </div>
        </div>
    </div>
</section>
