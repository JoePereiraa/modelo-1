@if (!empty($work['oport-text']))
    <section class="work-oport">
        <x-layout.container class="oport">
            <div class="oport--text">
                {!! $work['oport-text'] !!}
            </div>
        </x-layout.container>
    </section>
@endif
