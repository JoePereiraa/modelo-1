@props(['modal', 'background', 'icon'])

<a 
	{{ $attributes->merge(['class' => 'video-modal']) }}
	@if (!empty ($variation))
        class="{{ $variation ?? '' }}"
    @endif
	@if(!empty($modal))
		ng-click="abrirModalYoutube('{{ $modal ?? '' }}')" 
	@endif
	@if(!empty($background))
	    style="background-image: url('{{ $background ?? '' }}')"
	@endif 
>
	@if (!empty( $modal ))
		<span class="video-modal--play">
			{!! $helpers->gerarImg('default/image/icons/'.$icon, true, '', false) ?? '' !!}
		</span>
	@endif
</a>