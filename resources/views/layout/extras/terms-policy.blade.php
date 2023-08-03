@extends('layout.template')

@section('content')
    <section class="terms">
        <x-layout.container class="content">
            <div class="content--text">
                <h1 class="mb-3">{{ $pageTitle }}</h1>
                {!! $page['text'] !!}
            </div>
        </x-layout.container>
    </section>
@endsection
