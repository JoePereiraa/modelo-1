<section class="index-budget">
    <x-layout.container class="budget">
        <form
            name="orcamento"
            ng-controller="EmailController"
            ng-submit="submitForm($event,'',orcamento.$error)"
        >
            <div class="text">
                <div class="text__introduction">
                    <x-layout.image image="icons/ico_budget-2.png"/>
                    <h2>{!! $home['budget-title'] ?? '' !!}</h2>
                </div>
                <p>{!! $home['budget-phrase'] ?? '' !!}</p>
            </div>
            <div class="inputs">
                <x-forms.inputs.input-name placeholder="Nome"/>
                <x-forms.inputs.input-email placeholder="E-mail"/>
                <x-forms.inputs.input-telephone placeholder="Telefone"/>
                <x-forms.inputs.input-message rows="4" placeholder="Mensagem"/>
                <x-forms.inputs.input-button
                    variation="secondary type-2"
                    text="quero um Orçamento"
                />
            </div>
        </form>
    </x-layout.container>
</section>
