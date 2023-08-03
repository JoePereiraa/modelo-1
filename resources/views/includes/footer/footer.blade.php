<section class="footer">
    <x-layout.container class="content">
        <x-buttons.link
            link="{{ route('home') }}"
        >
            {!! $helpers->gerarImg($config['image_rodape'], true, 'logo', false) ?? '' !!}
        </x-buttons.link>
        <div class="aside">
            <div class="aside__contact">
                <x-buttons.contact.telephone
                    variation="secondary"
                    title="Fale com a <strong>G-Medical</strong>"
                    icon="ico_telephone-2.png"
                />
                <x-buttons.contact.whatsapp
                    variation="secondary"
                    title="Chame no <strong>Whatsapp</strong>"
                    icon="ico_whatsapp-3.png"
                />
                <x-buttons.primary
                    variation="quaternary"
                    text="Compre no Atacado"
                    icon="ico_box.png"
                    modalType="atacado"
                />
                <x-layout.icons
                    class="icons"
                    instagram
                    facebook
                />
            </div>
            <div class="aside__search">
                <form class="form-search" action="{{route('produtos')}}">
                    <div class="content-form">
                        <input value="{{ $busca ?? '' }}"
                            type="search" name="busca"
                            placeholder="Digite aqui..." class="content-form--seek" required
                        >
                        <button class="content-form--btn" type="submit">
                            <x-layout.image image="icons/ico_search.png" />
                        </button>
                    </div>
                </form>
                {{-- <x-buttons.cart-link /> --}}
            </div>
        </div>
    </x-layout.container>
    @include('includes.footer.menu')
    @include('includes.footer.copyright')
</section>
