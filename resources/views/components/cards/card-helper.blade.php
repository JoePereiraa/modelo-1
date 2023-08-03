<div
    class="card-helper"
    ng-class="{'active' : duvida{{$key}}}"
    ng-click="duvida{{$key}} = !duvida{{$key}}"
>
    <div class="collapse">
        <a>
            <h3>0{{ $key + 1}}. {{$item['titulo'] }}</h3>
            <button ng-if="duvida{{ $key }}">
                <i class="fas fa-chevron-up"></i>
            </button>
            <button ng-if="!duvida{{ $key }}">
                <i class="fas fa-chevron-down"></i>
            </button>
        </a>
    </div>
    <div ng-if="duvida{{$key}}" class="content">
        <h5>{{ $item['resposta'] ?? '' }}</h5>
    </div>
</div>
