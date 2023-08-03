@if (!empty($about['welcome-text']))
    <section class="about-welcome">
        <x-layout.container class="welcome">
            {!! $helpers->gerarImg($about['welcome-image'] ?? '', true, 'image-big', false) ?? '' !!}
            <div class="welcome--text">
                {!! $about['welcome-text'] !!}
            </div>
        </x-layout.container>
    </section>
@endif
