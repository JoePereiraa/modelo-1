<section class="menu-footer">
    <nav class="content">
        <ul>
            @foreach ($config['menu'] as $menu)
                <li>
                    <x-buttons.link link="{{ $menu['url'] }}"
                        class="nav {{ $menu['url'] == $config['rota-atual'] ? 'active' : '' }}"
                    >
                        {{ mb_strtoupper($menu['title']) ?? '' }}
                    </x-buttons.link>
                </li>
            @endforeach
        </ul>
    </nav>
</section>
<hr>
<div class="btns-extras-menu">
    <x-buttons.contact.time
        variation="secondary"
        title="Funcionamento"
        icon="ico_watch-2.png"
    />
    <x-buttons.contact.local
        variation="secondary"
        title="<strong>Local</strong>"
        icon="ico_local-2.png"
    />
</div>
