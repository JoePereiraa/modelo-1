<nav @class(['navegation', 'd-flex', 'align-items-center', 'justify-content-center'])>
    <ul @class(['d-flex', 'align-items-center'])>
        @foreach ($config['menu'] as $menu)
            <li>
                <x-buttons.link
                    link="{{ $menu['url'] ?? '' }}"
                    class="menu_header__items--item
                    {{ $menu['url'] == $config['rota-atual'] ? 'active' : '' }}"
                >
                    <h5>{{ mb_strtoupper($menu['title']) ?? '' }}</h5>
                </x-buttons.link>
            </li>
        @endforeach
    </ul>
</nav>
