<section class="header menu-fixed">
    <x-layout.container class="content">
        <div class="menu-top hide-desktop">
            <a ng-click="abrirMobile=!abrirMobile" ng-class="{'active' : abrirMobile == true}">
                <svg width="50" viewBox="0 0 100 100" class="exibirMobile">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </a>
            <x-buttons.link link="{{ route('home') }}" class="hide-desktop @if(Route::current()->getName() == 'home') active @endif">
                {!! $helpers->gerarImg($config['image_logo'], true, 'logo', false) ?? '' !!}
            </x-buttons.link>
        </div>
        <x-buttons.link class="hide-mobile" link="{{ route('home') }}">
            {!! $helpers->gerarImg($config['image_logo'], true, 'logo', false) ?? '' !!}
        </x-buttons.link>
        <div class="aside">
            <div class="aside__contact">
                <x-buttons.contact.telephone title="Fale com a <strong>G-Medical</strong>" icon="ico_telephone.png" />
                <x-buttons.contact.whatsapp title="Chame no <strong>Whatsapp</strong>" icon="ico_whatsapp.png" />
                <x-buttons.primary text="Compre no Atacado" icon="ico_box.png" modalType="atacado" />
                <x-layout.icons class="icons" instagram facebook />
            </div>
            <div class="aside__search">
                <form class="form-search" action="{{route('produtos')}}">
                    <div class="content-form">
                        <input value="{{ $busca ?? '' }}" type="search" name="busca" placeholder="Digite aqui..." class="content-form--seek" required>
                        <button class="content-form--btn" type="submit">
                            <x-layout.image image="icons/ico_search.png" />
                        </button>
                    </div>
                </form>
                {{-- <x-buttons.cart-link /> --}}
            </div>
        </div>
    </x-layout.container>
    @include('includes.header.menu')
</section>
