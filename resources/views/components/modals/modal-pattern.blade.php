{{-- ORÇAMENTO --}}

<div class="modal fade" id="orcamentoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content budget">
            <button type="button" class="close closebtn" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">fechar [X]</span>
            </button>
            <div class="modal-body">
                <div class="conteudo-modal">
                    <div class="title">
                        <div>
                            <span>$</span>
                            <h2>Orçamento Rápido</h2>
                        </div>
                        <p>Preencha o formulário e aguarde<br> um de nossos consultores.</p>
                    </div>
                </div>
                <form name="orcamento" ng-controller="EmailController" ng-submit="submitForm($event,'',orcamento.$error)">
                    <x-forms.inputs.input-name placeholder="Nome"/>
                    <x-forms.inputs.input-telephone placeholder="Telefone"/>
                    <x-forms.inputs.input-email placeholder="Seu melhor e-mail"/>
                    <input name="assunto" type="text" placeholder="Assunto" disabled ng-if="$root.formulario.itens" ng-model="$root.formulario.itens">
                    <x-forms.inputs.input-message rows="4" placeholder="Mensagem"/>
                    <button class="btn-modal">
                        <h5 class="title">ENVIAR ORÇAMENTO</h5>
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- LIGAMOS PARA VOÇÊ --}}

<div class="modal fade" id="especialistaModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content specialist">
            <button type="button" class="close closebtn" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">fechar [X]</span>
            </button>
            <div class="modal-body">
                <div class="conteudo-modal">
                    <div class="title">
                        <div>
                            <i class="fas fa-users"></i>
                            <h2>Nós ligamos para você</h2>
                        </div>
                        <p>Preencha o formulário e aguarde<br> um de nossos consultores.</p>
                    </div>
                </div>
                <form name="ligamos" ng-controller="EmailController" ng-submit="submitForm($event,'',ligamos.$error)">
                    <x-forms.inputs.input-name placeholder="Nome"/>
                    <x-forms.inputs.input-telephone placeholder="Telefone"/>
                    <x-forms.inputs.input-email placeholder="Seu melhor e-mail"/>
                    {{-- <input name="assunto" type="text" placeholder="Assunto" disabled ng-if="$root.formulario.itens" ng-model="$root.formulario.itens"> --}}
                    <x-forms.inputs.input-message rows="4" placeholder="Digite a sua mensagem"/>
                    <button class="btn-modal">
                        <h5 class="title">ENVIAR MENSAGEM</h5>
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- ATACADO --}}
<div class="modal fade" id="atacadoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content specialist">
            <button type="button" class="close closebtn" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">fechar [X]</span>
            </button>
            <div class="modal-body">
                <div class="conteudo-modal">
                    <div class="title">
                        <div>
                            <i class="fas fa-store"></i>
                            <h2>Compre no Atacado</h2>
                        </div>
                        <p>Preencha o formulário e aguarde<br> um de nossos consultores.</p>
                    </div>
                </div>
                <form name="atacado" ng-controller="EmailController" ng-submit="submitForm($event,'',atacado.$error)">
                    <x-forms.inputs.input-name placeholder="Nome"/>
                    <x-forms.inputs.input-telephone placeholder="Telefone"/>
                    <x-forms.inputs.input-email placeholder="Seu melhor e-mail"/>
                    {{-- <input name="assunto" type="text" placeholder="Assunto" disabled ng-if="$root.formulario.itens" ng-model="$root.formulario.itens"> --}}
                    <x-forms.inputs.input-message rows="4" placeholder="Digite a sua mensagem"/>
                    <button class="btn-modal">
                        <h5 class="title">ENVIAR MENSAGEM</h5>
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
