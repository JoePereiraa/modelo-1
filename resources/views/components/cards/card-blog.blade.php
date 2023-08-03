<div class="card-blog" wire:key="post{{ $post['id'] }}" {{ $variation ?? '' }}">
    <a class="card-blog__image" href="{{route('blog-interna', ['uri' =>$post['uri']])}}">
        @if (!empty ($post['imagem']))
            {!! $helpers->gerarImg($post['imagem'], true, '', false) ?? '' !!}
        @endif
    </a>
    <div class="card-blog__content">
        <a href="{{route('blog-interna', ['uri' =>$post['uri']])}}">
            <h6>{{ $post['titulo']}}</h6>
        </a>
        <p>{{ Str::limit($post['resumo'], 200)}}</p>
        <a href="{{route('blog-interna', ['uri' =>$post['uri']])}}" class="card-blog__content--link">
            <h5>Continue a leitura</h5>
        </a>
    </div>
</div>
