<section class="footer-copyright {{$class ?? ''}}">
    <x-layout.container class="big">
        <div class="copyright">
            <h5>{{date('Y')}}© {{ mb_strtoupper('G-MEDICAL') }}</h5>
            <div @class(['terms'])>
                <ul>
                    <li class="@if(Route::current()->getName() == 'termos-de-uso') active @endif">
                        <x-buttons.link link="{{ route('termos-de-uso') }}">
                            <h5>{{ mb_strtoupper('Termos de Uso') }}</h5>
                        </x-buttons.link>
                    </li>
                    <li class="@if(Route::current()->getName() == 'politica-de-privacidade') active @endif">
                        <x-buttons.link link="{{ route('politica-de-privacidade') }}">
                            <h5>{{ mb_strtoupper('política de privacidade') }}</h5>
                        </x-buttons.link>
                    </li>
                </ul>
            </div>
            <x-buttons.link link="https://raddar.digital/" target="_blank">
                {!! $helpers->gerarImg('default/image/raddar.png', true, '') !!}
            </x-buttons.link>
        </div>
    </x-layout.container>
</section>
