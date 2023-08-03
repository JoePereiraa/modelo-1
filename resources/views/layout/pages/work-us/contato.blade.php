<section class="work-contact">
    <x-layout.container class="contact">
        <form name="trabalhe" ng-controller="EmailController" ng-submit="submitForm($event,'',trabalhe.$error)">
            <h2>Entre em contato conosco</h2>
            <div class="inputs">
                <x-forms.inputs.input-name variation="secondary" placeholder="Nome" />
                <div class="inputs--cols">
                    <x-forms.inputs.input-telephone variation="secondary" placeholder="Telefone" />
                    <x-forms.inputs.input-email variation="secondary" placeholder="E-mail" />
                </div>
                <div class="content-box">
                    <div class="box-file">
                        <div class="box-file__content" type="file" ngf-select="uploadFiles($file, $invalidFiles)" accept=".jpg,.doc,.docx,.pdf,.txt,.xls,.xlsx" ngf-max-size="5MB">
                            <div class="name-file">
                                <span ng-show="f.progress >= 0">@{{f.name}} @{{errFile.name}} @{{errFile.$error}}
                                    @{{errFile.$errorParam}}</span>
                                <span ng-hide="f.progress >= 0">Envie seu curriculo</span>
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
                <div class="input secondary">
                    <select name="vaga" ng-model="form.vaga">
                        <option value="">Selecione a vaga</option>
                        @foreach ($vacancys as $vacancy)
                        <option>{{ $vacancy['titulo'] ?? '' }}</option>
                        @endforeach
                    </select>
                </div>
                <x-forms.inputs.input-message variation="secondary" rows="6" placeholder="Mensagem" />
                <x-forms.inputs.input-button variation="radius" text="ENVIAR CURRÍCULO" />
            </div>
        </form>
    </x-layout.container>
</section>