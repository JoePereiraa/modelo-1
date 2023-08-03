@if (!empty($doubts))
    <section class="index-doubt">
        <x-layout.container class="doubt">
            <div class="doubt--text">
                {!! $home['doubt-text'] ?? '' !!}
            </div>
            <div class="doubt__answer" ng-init="duvida0 = true">
                @foreach ($doubts as $key => $item)
                    <x-cards.card-helper :key=$key :item=$item/>
                @endforeach
            </div>
        </x-layout.container>
    </section>
@endif
