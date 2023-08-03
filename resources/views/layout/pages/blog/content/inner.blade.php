@extends('layout.template')

@section('content')
    @include('includes.header.header-content', ['class' => 'inner-blog'])
    @include('layout.pages.blog.inner')
    @include('layout.pages.blog.relacionados')
    @include('layout.home.redes')
@endsection
