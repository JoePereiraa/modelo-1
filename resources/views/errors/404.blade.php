@extends('layout.template')

@section('content')
<section class="error-404">
    <x-layout.container>
        <div @class(['box'])>
            <h2>Oops, parece que você freou na página errada!</h3>
            <h1>404</h1>
            <h6>
                Mas não se preocupe, estamos com o pé no acelerador e trabalhando para corrigir isso. Enquanto isso, que tal dar uma volta pelo nosso site e conferir nossos produtos?
            </h6>
            <x-buttons.primary 
                link="{{ route('home') }}"
                variation="primary-gradient"
                text="{{ mb_strtoupper('Voltar Para A Página Anterior') }}"
            >
            </x-buttons.primary>
        </div>
    </x-layout.container>
</section>
@endsection
