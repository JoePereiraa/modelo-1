@extends('layout.template')

@section('content')
    @include('includes.header.header-content')
    @include('layout.pages.pielsana.somos')

    @include('layout.pages.pielsana.beneficios')
    @include('layout.home.produtos-pielsana', ['class' => 'pielsana'])
    @include('layout.pages.pielsana.revenda')
    @include('layout.home.redes')
@endsection
