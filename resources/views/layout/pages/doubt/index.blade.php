<section class="doubt-main">
    <x-layout.container class="main">
        <div class="main__content">
            @if (!empty($doubts))
                <h2 class="main__content--title">{{ $currentTitle ?? '' }}</h2>
                <div class="main__content__cards" ng-init="duvida0 = true">
                    @foreach ($doubts as $key => $item)
                        <x-cards.card-helper :key=$key :item=$item/>
                    @endforeach
                </div>
            @else
            <x-extras.not-found
                text="Nenhuma dúvida encontrada"
            />
            @endif
        </div>
        <x-forms.search.search action="{{ route('duvidas') }}"/>
        <x-forms.category.current-category>
            <x-buttons.link
                link="{{ route('duvidas') }}"
                {{-- class="item-category" --}}
                class="item-category {{ empty($currentCategory) ? 'active' : '' }}"
            >
                <h6>Dúvidas Gerais</h6>
            </x-buttons.link>
            @foreach($doubtCategories as $key => $cat)
                <a
                    href="{{route('duvidas', ['uri' => $cat['uri']])}}"
                    {{-- class="item-category" --}}
                    class="item-category {{ $currentCategory == $cat['id'] ? 'active' : '' }} "
                >
                    <input type="checkbox">
                    <h6>{{$cat['titulo']}}</h6>
                </a>
            @endforeach
        </x-forms.category.current-category>
        {{-- <form
            name="duvidas"
            ng-controller="EmailController"
            ng-submit="submitForm($event,'',duvidas.$error)"
        >
            <div class="form-title">
                {!! $helpers->gerarImg('default/image/icons/ico_calendar.png', true, '', false) ?? '' !!}
                <h5>Tire suas dúvidas</h5>
                <h6>Tem alguma dúvida?<br> Envie para a nossa equipe e ela irá ajudá-lo.</h6>
            </div>
            <div class="inputs">
                <x-forms.inputs.input-name variation="secondary" placeholder="Nome"/>
                <x-forms.inputs.input-telephone variation="secondary" placeholder="Telefone"/>
                <x-forms.inputs.input-email variation="secondary" placeholder="E-mail"/>
                <x-forms.inputs.input-message variation="secondary" rows="5" placeholder="Digite sua dúvida aqui"/>
                <x-forms.inputs.input-button
                    text="ENVIAR DÚVIDA"
                />
            </div>
        </form> --}}
    </x-layout.container>
</section>
