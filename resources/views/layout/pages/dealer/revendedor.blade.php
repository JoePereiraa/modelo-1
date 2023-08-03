<section class="budget">
    <x-layout.container class="bud">
        <div class="bud__content">
            <form name="revendedor" ng-controller="EmailController" ng-submit="submitForm($event,'',revendedor.$error)">
                <div class="form-text">
                    <h5>Se interessou?</h5>
                    <h2>Preencha o formulário</h2>
                </div>
                <div class="inputs">
                    <x-forms.inputs.input-name variation="secondary" placeholder="Nome" />
                    <div class="input secondary">
                        <input type="text" ng-model="form.empresa" placeholder="Empresa">
                    </div>
                    <x-forms.inputs.input-email variation="secondary" placeholder="E-mail" />
                    <x-forms.inputs.input-telephone variation="secondary" placeholder="Telefone" />
                    <div class="input secondary">
                        <input type="text" placeholder="CNPJ" class="cnpj" name="cnpj" ng-model="form.cnpj">
                    </div>
                    <div class="input secondary">
                        <select name="regiao" ng-model="form.regiao">
                            <option value="">Para qual região gostaria de revender?</option>
                            @foreach ($dealer as $item)
                            <option>{{ $item['titulo'] ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="content-box">
                        <div class="box-file">
                            <div class="box-file__content" type="file" ngf-select="uploadFiles($file, $invalidFiles)" accept=".jpg,.doc,.docx,.pdf,.txt,.xls,.xlsx" ngf-max-size="5MB">
                                <div class="name-file">
                                    <span ng-show="f.progress >= 0">@{{f.name}} @{{errFile.name}} @{{errFile.$error}}
                                        @{{errFile.$errorParam}}</span>
                                    <span ng-hide="f.progress >= 0">Anexar documentos</span>
                                </div>
                                <button class="btn-primary radius">
                                    <h5 class="title" ng-hide="f.progress >= 0">SELECIONAR</h5>
                                    <h5 class="title" ng-show="f.progress >= 0">ENVIAR</h5>
                                </button>
                            </div>
                        </div>
                        <div ng-if="loadingFile">
                            <div class="alert alert-warning mt-3">
                                <i class="fas fa-spinner fa-spin me-3"></i>
                                Carregando arquivo...
                            </div>
                        </div>
                        <label>Somente arquivos do tipo: JPG/DOC/DOCX/PDF e Tamanho máximo de 5MB</label>
                    </div>
                    <div class="checkboxs">
                        <h5>Anexos:</h5>
                        <div class="checkboxs--content">
                            <x-forms.inputs.input-checkbox label="PERMISSÃO DA ANVISA" value="PERMISSÃO DA ANVISA" name="anvisa" checklist-model="form.anexos" />
                            <x-forms.inputs.input-checkbox label="ANOTAÇÃO DE RESPONSABILIDADE TÉCNICA - CRT" value="ANOTAÇÃO DE RESPONSABILIDADE TÉCNICA - CRT" name="responsabilidade_tecnica" checklist-model="form.anexos" />
                            <x-forms.inputs.input-checkbox label="RASTREABILIDADE" value="RASTREABILIDADE" name="rastreabilidade" checklist-model="form.anexos" />
                            <x-forms.inputs.input-checkbox label="ALVARÁ DA VIGILÂNCIA SANITÁRIA" value="ALVARÁ DA VIGILÂNCIA SANITÁRIA" name="vigilancia_sanitaria" checklist-model="form.anexos" />
                            <x-forms.inputs.input-checkbox label="AFF - ANVISA BOAS PRÁTICAS DE FABRICAÇÃO" value="AFF - ANVISA BOAS PRÁTICAS DE FABRICAÇÃO" name="AFF" checklist-model="form.anexos" />
                        </div>
                    </div>
                    <x-forms.inputs.input-message variation="secondary" rows="5" placeholder="Mensagem Adicional" />
                    <span class="min-text">*Clique em "Enviar" após preencher todos os campos para nos enviar sua solicitação de revendedor. Analisaremos suas informações e entraremos em contato para discutir os próximos passos.</span>
                    <x-forms.inputs.input-button variation="radius" text="ENVIAR " />
                </div>
            </form>
        </div>
        <x-cards.card-contact title="Entre em contato">
            <x-buttons.contact.telephone title="Fale com a <strong>G-Medical</strong>" icon="ico_telephone.png" />
            <x-buttons.contact.whatsapp title="Chame no <strong>Whatsapp</strong>" icon="ico_whatsapp.png" />
            <x-buttons.contact.local title="<strong>Local</strong>" icon="ico_local.png" />
            <x-buttons.contact.email title="<strong>Email</strong>" icon="ico_email.png" />
            <div class="text-content">
                <x-layout.image image="logo/type-1.png" />
                <h5>Agradecemos seu interesse em fazer um orçamento ou se tornar um revendedor da G-Medical. Estamos ansiosos para atender às suas necessidades e explorar oportunidades de parceria. Nossa equipe responderá prontamente às suas solicitações. Obrigado por escolher a G-Medical!
                </h5>
            </div>
        </x-cards.card-contact>
    </x-layout.container>
</section>