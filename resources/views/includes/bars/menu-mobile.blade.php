<div class="menu-mobile" ng-class="{'aberto':abrirMobile}">
    <a href="{{ route('home') }}">
        <div class="logo">
            {!! $helpers->gerarImg($config['image_logo'], true) !!}
        </div>
    </a>
    <hr>
    <ul>
        @foreach ($config['menu'] as $key => $menu)
            <li>
                <a href="{{ $menu['url'] ?? '' }}"
                    class="paginas {{ $config['rota-atual'] == $menu['url'] ? 'current' : '' }}">
                    {{ $menu['title'] }}
                </a>
            </li>
        @endforeach
        <li>
            <a href="{{ route('politica-de-privacidade') }}" class="@if(Route::current()->getName() == 'politica-de-privacidade') current @endif">
                Política de Privacidade
            </a>
        </li>
        <li>
            <a href="{{ route('termos-de-uso') }}" class="@if(Route::current()->getName() == 'termos-de-uso') current @endif">
                Termos de Uso
            </a>
        </li>
    </ul>
    <hr>
    <x-buttons.icons class="icons">
        <x-slot name="instagram">
            <x-buttons.link-icon link="{{ $config['redes']['instagram'] ?? '' }}" icon="ico_instagram.png" target="_blank"/>
        </x-slot>
        <x-slot name="facebook">
            <x-buttons.link-icon link="{{ $config['redes']['facebook'] ?? '' }}" icon="ico_facebook.png" target="_blank"/>
        </x-slot>
    </x-buttons.icons>
    <div class="fechar" ng-click="abrirMobile=!abrirMobile">
        <i class="fas fa-times"></i>
    </div>
</div>
