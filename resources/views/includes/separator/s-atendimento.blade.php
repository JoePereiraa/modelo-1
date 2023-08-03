@if (!empty ($home['cards-attendance']))
    <section class="s-attendance {{ $class ?? '' }}">
        <x-layout.container class="big attendance">
            <div @class(['attendance__cards'])>
                @foreach($home['cards-attendance'] as $card)
                <div class="card-attendance">
                    {!! $helpers->gerarImg($card['icon'], true, '', false) ?? '' !!}
                    <div class="texts">
                        <h2>{{ $card['title'] ?? '' }}</h2>
                        <p>{{ $card['text'] ?? '' }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </x-layout.container>
    </section>
@endif