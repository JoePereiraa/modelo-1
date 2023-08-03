<div {{ $attributes }}>
    @if (!empty ( $config['redes']['instagram'] ))
        {{ $instagram   ?? '' }}
    @endif
    @if (!empty ( $config['redes']['facebook'] ))
    {{ $facebook    ?? '' }}
    @endif
    @if (!empty ( $config['redes']['youtube'] ))
        {{ $youtube     ?? '' }}
    @endif
</div>