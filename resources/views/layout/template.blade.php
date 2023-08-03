@php
if ($_SERVER['HTTP_HOST'] == 'localhost') {
$version = '?raddarAtt=' . md5(rand(1, 999999999));
} else {
$version = '?raddarAtt=' . md5('02/08/23 08:00');
}
@endphp
<!doctype html>
<html lang="pt-br" data-ng-app="raddarSite">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="imagetoolbar" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--    Seo Html    -->
    <title>{{ $seo['title'] }}</title>
    <meta name="description" content="{{ $seo['description'] }}" />
    <meta name="keywords" content="{{ $seo['keywords'] }}" />
    <meta name="robots" content="index, follow">
    <meta property="og:site_name" content="{{ $seo['site_name'] }}">
    <meta property="og:locale" content="{{ $seo['lang'] }}">
    <meta property="og:url" content="{{ $seo['url'] }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $seo['title'] }}">
    <meta property="og:image" content="{{ $seo['image'] }}">
    <meta property="og:description" content="{{ $seo['description'] }}">
    <meta property="article:author" content="{{ $seo['author'] }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $seo['title'] }}">
    <meta name="twitter:description" content="{{ $seo['description'] }}">

    <!--    Favicon     -->
    <link href="{{ $seo['favicon'] }}" rel="apple-touch-icon" type="image/png">
    <link href="{{ $seo['favicon'] }}" rel="icon" type="image/x-icon">
    <link href="{{ $seo['favicon'] }}" rel="shortcut icon" type="image/x-icon">

    <!-- Bootstrap     -->
    <link href="{{ URL::to('plugins/bootstrap-5.0.0-beta1/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- FontAwesome    -->
    <link href="{{ URL::to('plugins/fontawesome-free-5.15.2/css/all.min.css') }}" rel="stylesheet">
    <!-- Owl Carousel    -->
    <link href="{{ URL::to('plugins/owlcarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- LightBox -->
    <link href="{{ URL::to('plugins/lightbox2/dist/css/lightbox.min.css') }}" rel="stylesheet">
    <!-- Animate Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Css     -->
    <link href="{{ URL::to('default/css/custom.css') . $version }}" rel="stylesheet">

    @livewireStyles

    <!-- Tag manager -->
    @if ($_SERVER['HTTP_HOST'] != 'localhost')
    {!! $config['tagHead'] !!}
    @endif

    <!--    BaseUrl     -->
    <base href="{{ substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], 'server.php')) }}">

</head>

<body data-ng-controller="MainController">

    <div class="divLoadingAjax" ng-class="{'d-block': ajaxPendente}"></div>

    @if (!empty($config['whatsapp']))
    <nn ng-init="$root.zapContato='{{ $config['whatsapp']['link'] }}'"></nn>
    @endif

    <nn ng-init="$root.countCarrinho = {{ count($carrinho) }}"></nn>

    <nn ng-init="$root.locationCarrinho = '{{ route('carrinho') }}'"></nn>

    @include('includes.extras.preloader')

    <!-- Tag manager -->
    @if ($_SERVER['HTTP_HOST'] != 'localhost')
    {!! $config['tagBody'] !!}
    @endif

    {{-- ?LAYOUT BASE --}}
        {{-- *Header - (Cabecalho) --}}
        <header>
            @include('includes.bars.lgpd-bar')
            @include('includes.header.content.header')
        </header>
        {{-- *Main - (Corpo) --}}
        <main>
            @yield('content')
            @include('components.modals.content.modals')
            @include('includes.bars.content.bars-menus')
        </main>
        {{-- *Footer - (Rodape) --}}
        <footer>
            @include('includes.footer.content.footer')
            <x-buttons.contact.whatsapp-modal />
        </footer>
    {{-- ?------------------------------ --}}

    {{-- ?Js --}}
        <script src="{{ URL::to('plugins/jquery-3.5.1/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ URL::to('plugins/bootstrap-5.0.0-beta1/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL::to('plugins/owlcarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::to('plugins/jquery-mask/jquery.mask.min.js') }}"></script>
        <script src="{{ URL::to('plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
        <script src="{{ URL::to('default/js/geral.js' . $version) }}"></script>
        <script src="{{ URL::to('default/js/carousel.js' . $version) }}"></script>
        <script src="{{ URL::to('default/js/lgpd.js' . $version) }}"></script>
        <script src="{{ URL::to('plugins/sweetalert2/sweetalert2.js') }}"></script>
        {{-- ?------------------------------ --}}
    {{-- ?Angular --}}
        <script src="{{ URL::to('plugins/angularjs-1.8.2/angular.min.js') }}"></script>
        <script src="{{ URL::to('plugins/angular-validate/dist/angular-validate.min.js') }}"></script>
        <script src="{{ URL::to('plugins/ng-file-upload/dist/ng-file-upload-shim.min.js') }}"></script>
        <script src="{{ URL::to('plugins/ng-file-upload/dist/ng-file-upload.min.js') }}"></script>
        <script src="{{ URL::to('plugins/checklist-model.js') }}"></script>
        <script src="{{ URL::to('default/angularjs/modulo.js' . $version) }}"></script>
        <script src="{{ URL::to('default/angularjs/controllers/MainController.js' . $version) }}"></script>
        <script src="{{ URL::to('default/angularjs/controllers/EmailController.js' . $version) }}"></script>
    {{-- ?------------------------------ --}}
    @stack('scripts')
    @livewireScripts

</body>
</html>
