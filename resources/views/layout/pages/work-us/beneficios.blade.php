@if (!empty($work['benefits-list']))
    <section class="work-benefits">
        <x-layout.container class="benefits">
            <h2>benefícios e vantagens</h2>
            <ul>
                @foreach ($work['benefits-list'] as $list)
                    <li>
                        <x-layout.image image="icons/ico_plus.png"/>
                        {!! $list !!}
                    </li>
                @endforeach
            </ul>
        </x-layout.container>
    </section>
@endif
