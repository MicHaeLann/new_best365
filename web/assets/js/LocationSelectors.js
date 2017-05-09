function locationSelectors() {
    // Polyfill for IE8 and below
    if (!Date.now) {
        Date.now = function() { return new Date().getTime(); }
    }

    function bindSelector( container ) {
        var target = container + ' select';
        $(target).on('change', function (e) {
            var optionSelected = $("option:selected", this),
                optionSelectedValue  = optionSelected.val(),
                selectorsUrl = $(container).data('url') + '/' + optionSelectedValue;

            if (optionSelectedValue == 'CN_beijing' ||
                optionSelectedValue == 'CN_shanghai' ||
                optionSelectedValue == 'CN_chongqing' ||
                optionSelectedValue == 'CN_tianjin'
            ) {
                document.getElementById('store_geo_form_type_address_city').value = optionSelectedValue;
                bindSelector(container);
            } else if(optionSelectedValue) {
                $.ajax(selectorsUrl, {
                    success: function (response) {
                        $(container).replaceWith(response);
                        if (undefined != optionSelected.parent().data('max-type')) {
                            document.getElementById('store_geo_form_type_address_city').value = optionSelectedValue;
                        }
                        bindSelector(container);
                    }
                });
            }
        });
    }

    bindSelector('#js-location-selectors');
}

locationSelectors();
