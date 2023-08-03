<section class="piel-sell">
    <x-layout.container class="sell">
        <form name="revendedor" ng-controller="EmailController" ng-submit="submitForm($event,'',revendedor.$error)">
            <div class="text">
                <div class="text__introduction">
                    <x-layout.image image="icons/ico_dealing.png" />
                    <h2>{!! $page['sell-title'] ?? '' !!}</h2>
                </div>
                {!! $page['sell-text'] ?? '' !!}
            </div>
            <div class="inputs">
                <x-forms.inputs.input-name placeholder="Nome" />
                <x-forms.inputs.input-email placeholder="E-mail" />
                <x-forms.inputs.input-telephone placeholder="Telefone" />
                <div class="input">
                    <select name="produtos" ng-model="form.produtos">
                        <option value="">Quais produtos gostaria de adquirir?</option>
                        @foreach ($products as $product)
                        <option>{{ $product['titulo'] ?? '' }}</option>
                        @endforeach
                    </select>
                </div>
                <x-forms.inputs.input-button variation="secondary type-2" text="QUERO SER UM REVENDEDOR" />
            </div>
        </form>
    </x-layout.container>
</section>