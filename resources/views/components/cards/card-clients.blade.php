<div class="card-depositions">
    <div class="card-depositions__content"> 
        <x-layout.image style="icon" image="icons/ico_quotation.png" />
        <x-layout.image style="icon2" image="icons/ico_quotation-2.png" />
        <h2 class="card-depositions__content--title">
            {{ $item['titulo'] ?? '' }}
        </h2>
        <p class="card-depositions__content--description">
            {{ $item['depoimento'] ?? '' }}
        </p>
    </div>
</div>
