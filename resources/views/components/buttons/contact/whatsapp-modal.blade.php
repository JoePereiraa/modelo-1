@if(!empty($config['whatsapp']['link']))
<a href="{{ $config['whatsapp']['link'] }}"  target="_blank">
    <section class="botao_whatsapp">
        <i class="fab fa-whatsapp"></i>
    </section>
</a>
@endif