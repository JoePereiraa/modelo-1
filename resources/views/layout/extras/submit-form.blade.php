@extends('layout.template')

@section('content')
<section class="formulario-enviado">
    <div class="container">
        <div class="box-in">
            <h3>Fique tranquilo!</h3>
            <h1>Recebemos seu contato!</h1>
            <h5>
                Em breve nossa equipe irá retorná-lo.
            </h5>
            <a href="{{route('home')}}" class="btn-voltar"><i class="fas fa-chevron-left"></i> VOLTAR PARA A
                PÁGINA ANTERIOR</a>
        </div>
    </div>
</section>
@endsection
