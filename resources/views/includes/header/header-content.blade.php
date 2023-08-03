@if (!empty($page['banner-text']))
<section class="header-content {{$class ?? '' }}" style="background-image: url('{{ $page['banner']['url'] ?? '' }}')">
    <x-layout.container class="content">
        @if(!empty($breadcrumb))
        @include('includes.extras.breadcrumb',['breadcrumb'=>$breadcrumb])
        @endif
        <div class="resum">
            {!! $page['banner-text'] ?? '' !!}
        </div>
    </x-layout.container>
</section>
@endif