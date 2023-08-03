@if (!empty($page['piel-text']))
    <section class="piel-repre">
        <x-layout.container class="repre">
            <div class="repre--text">
                {!! $page['piel-text'] ?? '' !!}
            </div>
        </x-layout.container>
    </section>
@endif
