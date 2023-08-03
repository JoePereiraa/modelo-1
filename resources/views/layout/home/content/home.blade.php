@extends('layout.template')

@section('content')
    <x-layout.banner :home=$home/>
    @include('layout.home.confira')
    @include('layout.home.produtos-pielsana')
    @include('layout.home.oferecemos')
    @include('layout.home.produtos')
    @include('layout.home.escolher')
    @include('layout.home.orcamento')
    @include('layout.home.representantes')

    @include('layout.home.compromisso')
    @include('layout.home.clientes')
    @include('layout.home.bem-vindo')
    @include('layout.home.conheca')
    @include('layout.home.duvidas')
    @include('layout.home.blog')
    @include('layout.home.redes')
@endsection
