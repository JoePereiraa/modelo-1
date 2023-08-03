@props(['text','textButton', 'linkButton','titleCategory'])
<div class="notfound">
    @if(!empty($titleCategory))
    <div class="notfound--title">
        <h2>{{ $titleCategory ?? '' }}</h2>
    </div>
    @endif
    <div>
        {{ $text ?? '' }}
        @if (!empty ($linkButton))
            <x-buttons.primary 
                link="{{ $linkButton ?? '' }}" 
                text="{{ $textButton ?? '' }}"
             >
                <i class="fas fa-chevron-left"></i>
            </x-buttons.primary>
        @endif
    </div>
    <i class="fas fa-search-plus icon"></i>
</div>