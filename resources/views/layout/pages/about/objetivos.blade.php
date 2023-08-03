@if (!empty ($about['goals-cards']))
    <section class="about-goals">
        <x-layout.container class="goals">
            @foreach ($about['goals-cards'] as $goal)
                <div class="card-goal">
                    <div class="card-goal--title">
                        {!! $helpers->gerarImg($goal['icon'], true, '', false) ?? '' !!}
                        <h5>{{ $goal['title'] ?? '' }}</h5>
                    </div>
                    <p>{!! $goal['description'] ?? '' !!}</p>
                </div>
            @endforeach
        </x-layout.container>
    </section>
@endif
