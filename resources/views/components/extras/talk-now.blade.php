<section class="talk-now">
    <x-layout.container class="now">
        <div class="now__content">
            {!! $helpers->gerarImg('default/image/logo/logo-footer.png', true, '', false) ?? '' !!}
            <div class="now__content--text"> 
                <p>Quer saber como o Protocolo Agronômico da TCA pode ajudar você a ter mais rentabilidade na sua plantação?</p>
                <h4>Fale agora mesmo com nossos especialistas.</h4>
            </div>
        </div>
        <div class="now--contact">
            <x-buttons.contact.whatsapp variation="white" style="-2" title="Chame no whatsapp" icon="ico_whatsapp.png"/>
            <x-buttons.primary variation="secondary" text="Fale com especialista" icon="ico_leaves.png" data-bs-toggle="modal" data-bs-target="#especialistaModal"/>
        </div>
    </x-layout.container>
</section>