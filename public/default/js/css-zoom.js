// this is a hacky and brutal polyfill to somewhat implement zoom in firefox
// https://caniuse.com/#feat=css-zoom
// it allows to use jQuery's $('.element').css({zoom: 1.5});
// there is no effort to actually implement a normal css polyfill
// this polyfill also doesn't work when the zoomed element has margins since they are used to fake the new size.

$.cssNumber.zoom = true;
if (!("zoom" in document.body.style)) {
    $.cssHooks.zoom = {
        get: function(elem, computed, extra) {
            var value = $(elem).data('zoom');
            return value != null ? value : 1;
        },
        set: function(elem, value) {
            var $elem = $(elem);
            var size = { // without margin
                width: $elem.outerWidth(),
                height: $elem.outerHeight()
            };
            $elem.data('zoom', value);
            if (value != 1) {
                $elem.css({
                    transform: 'scale(' + value + ')',
                    marginLeft: (size.width * value - size.width) / 2,
                    marginRight: (size.width * value - size.width) / 2,
                    marginTop: (size.height * value - size.height) / 2,
                    marginBottom: (size.height * value - size.height) / 2
                });
            } else {
                $elem.css({
                    transform: null,
                    margin: null
                });
            }
        }
    };
}
