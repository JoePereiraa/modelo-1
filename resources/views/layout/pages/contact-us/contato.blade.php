<section class="contact-us">
    <x-layout.container class="us">
        <div class="us__content">
            <form name="fale_conosco" ng-controller="EmailController" ng-submit="submitForm($event,'',fale_conosco.$error)">
                <div class="form-text">
                    <h5>Tem alguma dúvida?</h5>
                    <h2>Preencha o formulário</h2>
                </div>
                <div class="inputs">
                    <x-forms.inputs.input-name variation="secondary" placeholder="Nome" />
                    <div class="input secondary">
                        <input type="text" ng-model="form.empresa" placeholder="Empresa">
                    </div>
                    <x-forms.inputs.input-email variation="secondary" placeholder="E-mail" />
                    <x-forms.inputs.input-telephone variation="secondary" placeholder="Telefone" />
                    <x-forms.inputs.input-message variation="secondary" rows="6" placeholder="Mensagem" />
                    <span class="min-text">*Após preencher todos os campos, clique em "Enviar" para nos encaminhar sua mensagem. Nossa equipe revisará sua solicitação e responderá o mais rápido possível.</span>
                    <x-forms.inputs.input-button variation="radius" text="ENVIAR " />
                </div>
            </form>
            <div class="extra-content">
                {!! $contact['support-text'] ?? '' !!}
            </div>
        </div>
        <x-cards.card-contact title="Entre em Contato">
            <x-buttons.contact.telephone title="Fale com a <strong>G-Medical</strong>" icon="ico_telephone.png" />
            <x-buttons.contact.whatsapp title="Chame no <strong>Whatsapp</strong>" icon="ico_whatsapp.png" />
            <x-buttons.contact.local title="<strong>Local</strong>" icon="ico_local.png" />
            <x-buttons.contact.email title="<strong>Email</strong>" icon="ico_email.png" />
            <x-buttons.contact.time title="Funcionamento" icon="ico_watch.png" />
        </x-cards.card-contact>
    </x-layout.container>
</section>