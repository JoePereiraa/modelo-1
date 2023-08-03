<section class="carrinho">
    <div class="container big">
        <div class="passos d-none d-lg-flex">
            <a class="ativo">
                <strong>1</strong>
                Lista de produtos
            </a>
            <a class="ativo">
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
            <a class="ativo">Dados</a>
            <a>Enviado</a>
        </div>
        <div class="form">
            <h1>Concluir Orçamento</h1>
            <h5>Para solicitar o orçamento, preencha o formulário abaixo:</h5>
            <h6>Nossa equipe entrará em contato com você.</h6>
            <form name="carrinho" ng-controller="EmailController" ng-submit="submitForm($event,'',carrinho.$error)">
                <label>Nome</label>
                <input name="nome" ng-model="form.nome" required type="text" placeholder="Digite aqui">
                <label>E-mail</label>
                <input name="email" ng-model="form.email" type="email" required placeholder="Digite aqui">
                <label>Telefone</label>
                <input name="telefone" ng-model="form.telefone" required type="text" class="celular" placeholder="(00) (00000-0000)">
                <label>Observações</label>
                <textarea name="observacoes" rows="4" ng-model="form.observacoes" placeholder="Digite aqui"></textarea>
                <div class="text-center">
                    <button class="btn-primary">
                        <h4 class="title">ENVIAR MENSAGEM</h4>
                    </button>
                </div>

                <div class="d-none">
                    @foreach ($carrinho as $key => $item)
                    <input type="text" disabled="true" ng-model="form.carrinho[{{ $key }}].titulo" ng-init="form.carrinho[{{ $key }}].titulo='{{ $item['titulo'] }}'">
                    @if (!empty($item['opcoes']))
                    <input type="text" disabled="true" ng-model="form.carrinho[{{ $key }}].opcoes" ng-init="form.carrinho[{{ $key }}].opcoes='{{ $helpers->opcoesCarrinho($item['opcoes']) }}'">
                    @endif
                    <input type="text" disabled="true" ng-model="form.carrinho[{{ $key }}].valor" ng-init="form.carrinho[{{ $key }}].valor='{{ $item['valor'] != 0 ? 'R$ ' . number_format($item['valor'], 2, ',', '.') : 'Sob consulta' }}'">
                    <input type="text" disabled="true" ng-model="form.carrinho[{{ $key }}].qtd" ng-init="form.carrinho[{{ $key }}].qtd='{{ $item['quantidade'] }}'">
                    <input type="text" disabled="true" ng-model="form.carrinho[{{ $key }}].subtotal" ng-init="form.carrinho[{{ $key }}].subtotal='{{ $item['total'] != 0 ? 'R$ ' . number_format($item['total'], 2, ',', '.') : 'Sob consulta' }}'">
                    @endforeach
                </div>
            </form>
        </div>
    </div>
</section>
