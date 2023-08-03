<section class="index-networks hide-mobile">
    <div class="texto">
        <a href="{{$config['redes']['instagram']??''}}" target="_blank" class="me-5">
            <i class="fab fa-instagram me-2"></i>
            {{ $helpers->obterId($config['redes']['instagram']??'') }}
        </a>
        <a href="{{$config['redes']['facebook']??''}}" target="_blank">
            <i class="fab fa-facebook-square me-2"></i>
            {{ $helpers->obterId($config['redes']['facebook']??'', 'facebook.com') }}
        </a>
    </div>
</section>
