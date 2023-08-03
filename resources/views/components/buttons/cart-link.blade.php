<a  class="btn-cart hide-mobile" ng-href="@{{ $root.locationCarrinho }}">
    <div>
        {!! $helpers->gerarImg('default/image/icons/ico_cart.png' , true, 'image', false) ?? '' !!}
    </div>
    <span class="count" ng-bind="$root.countCarrinho"></span>
</a>
