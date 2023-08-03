@props(['instagram', 'facebook', 'linkedin'])
<div {{ $attributes }} >
    @if (!empty ($linkedin))
        @if (!empty ( $config['redes']['linkedin'] ))
            <x-buttons.link-icon
                socialActive="{{$linkedin}}"
                link="{{ $config['redes']['linkedin'] }}"
                icon="ico_linkedin.png"
                target="_blank"
            />
        @endif
    @endif
    @if (!empty ($instagram))
        @if (!empty ( $config['redes']['instagram'] ))
            <x-buttons.link-icon
                socialActive="{{$instagram}}"
                link="{{ $config['redes']['instagram'] }}"
                icon="ico_instagram.png"
                target="_blank"
            />
        @endif
    @endif
    @if (!empty ($facebook))
        @if (!empty ( $config['redes']['facebook'] ))
            <x-buttons.link-icon
                socialActive="{{$facebook}}"
                link="{{ $config['redes']['facebook'] }}"
                icon="ico_facebook.png"
                target="_blank"
            />
        @endif
    @endif
</div>
