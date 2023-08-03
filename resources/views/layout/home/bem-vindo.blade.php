@if (!empty($home['welcome-text']))
    <section class="index-welcome">
        <x-layout.container class="welcome">
            <div class="welcome__content">
                {!! $home['welcome-text'] ?? '' !!}
                <div class="btns">
                    <x-buttons.primary
                        text="compre no atacado"
                        icon="ico_box.png"
                        modalType="atacado"
                    />
                    <x-buttons.primary
                        variation="tertiary"
                        text="mais informações"
                        icon="ico_doubt.png"
                        link="{{ route('quem-somos') }}"
                    />
                </div>
            </div>
        </x-layout.container>
    </section>
@endif
