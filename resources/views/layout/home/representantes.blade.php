@if (!empty($home['repre-list']))
    <section class="index-represen">
        <x-layout.container class="represen">
            <div class="represen__text">
                <h2>{!! $home['repre-title'] ?? '' !!}</h2>
                <x-layout.image class="logo-p" image="logo/pielsana.png" />
                <p>{!! $home['repre-phrase'] ?? '' !!}</p>
                <ul>
                    @foreach ($home['repre-list'] as $list)
                    <li><x-layout.image image="icons/ico_check.png"/>{!! $list ?? '' !!}</li>
                    @endforeach
                </ul>
            </div>
        </x-layout.container>
    </section>
@endif
