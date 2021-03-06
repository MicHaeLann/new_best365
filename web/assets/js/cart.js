$(function() {
    var label = $("#cart-label");

    if ($(location).attr('href').indexOf('cart') > 0 && $("#cart-container").data('amount') > 0) {
        // add new address
        $("#edit-address").dialog({
            autoOpen: false,
            width: 350,
            height: 400
        });

        $("#new-address").click(function(event){
            event.preventDefault();
            $("#edit-address").dialog("open");
        })
        setOrderInfo();
        InitiateSubmit();
    }

    function setOrderInfo()
    {
        // get cart weight
        var weight = 0;
        $("tr[id^='item-']").each(function() {
            var index = this.id.lastIndexOf('-');
            var lid = this.id.substring(index + 1);
            var amount = parseInt($("#quantity-" + lid).val());
            var itemWeight = parseInt($(this).data('weight'));
            weight = weight + itemWeight * amount;
        })

        // set minimum weight 1kg
        if (weight < 1000 && weight > 0) {
            weight = 1000;
        }

        // ceiling weight to 0.1kg
        weight = Math.ceil(weight / 100) / 10;

        // if fastway selected
        if ($("#shipping-method").val() == 'custom-shipping-method-8') {
            weight = Math.ceil(weight / 5);
        }

        // set delivery fee display
        var chars = $("#shipping-method").val().split('-');
        var dataId = '';
        for (var i = 0; i < chars.length; i++) {
            if (dataId.length > 0 && i < chars.length - 1) {
                chars[i] = ucfirst(chars[i]);
            } else if (i == chars.length - 1) {
                chars[i] = '-' + chars[i];
            }
            dataId = dataId + chars[i];
        }
        var shippingPrice = $("#shipping-method").data(dataId);
        var deliveryFee = shippingPrice.replace(/[^0-9\.]+/g,"") * weight;
        var deliveryFeeDisplay = shippingPrice.replace(/[0-9\.]+/g,"") +  deliveryFee.toFixed(2);
        $("#carrier-price").html(deliveryFeeDisplay);

        // set order total price
        var subtotal = $("#cart-price").html().replace(/[^0-9\.]+/g,"");
        var total = parseFloat(subtotal) + deliveryFee;
        var totalDisplay = shippingPrice.replace(/[0-9\.]+/g,"") + total.toFixed(2);
        $("#total-price").html(totalDisplay);
    }

    function InitiateSubmit()
    {
        var shippingAddress = $("#shipping-address").val();
        var shippingMethod = $("#shipping-method").val();
        var paymentMethod = $("#payment-method").val();

        // check if has formula
        var notice = false;
        if ($("#notice").prop("checked") == undefined || $("#notice").prop("checked")) {
            notice = true;
        }
        console.log(notice);

        if (shippingAddress !== null && shippingMethod !== null && paymentMethod !== null && notice) {
            var disabled = false;
        } else {
            var disabled = true;
        }
        $("#payment").prop('disabled', disabled);
    }

    function ucfirst(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    $("a[id^='add-cart']").click(function(event){
        var id = this.id.substring(9);
        var display = $("#cart-amount").html();
        // send request to server if logined in and stock > 0
        if (!display && display !== 0) {
            var url = Routing.generate('zh-CN__RG__' + 'best365_store_login');
            window.location.replace(url);
        } else if ($("#item-" + id).data('stock') > 0) {
            //send request to server
            var amount = 1;
            if ($("#cart-quantity") && parseInt($("#cart-quantity").val()) > 1) {
                amount = $("#cart-quantity").val();
            }

            var url = Routing.generate('zh-CN__RG__' + 'best365_store_cart_add_product', {id: id, quantity: amount});
            $.ajax({
                url: url,
                type: 'GET',
                success: function(result){
                    if (result == 'success') {
                        // notification fade in
                        $("#notification").fadeIn("slow");
                        $("#notification-text").addClass("alert");
                        $("#notification-text").addClass("alert-success");
                        var msg = $("#notification").data('addCartSuccess');
                        $("#notification-text").html("<i>" + msg + "</i>");

                        // update cart amount display
                        label.fadeOut();
                        setTimeout(function() {
                            $("#cart-amount").html(parseInt(display) + parseInt(amount));
                        }, 500);
                        label.fadeIn();

                        // notification fade out
                        setTimeout(function() {
                            $("#notification").fadeOut("slow");
                        }, 3e3);
                    } else {
                        // notification fade in
                        $("#notification").fadeIn("slow");
                        $("#notification-text").addClass("alert");
                        $("#notification-text").addClass("alert-danger");
                        var msg = $("#notification").data('addCartFailed');
                        $("#notification-text").html(msg);

                        // notification fade out
                        setTimeout(function() {
                            $("#notification").fadeOut("slow");
                        }, 3e3);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);

                    // notification fade in
                    $("#notification").fadeIn("slow");
                    $("#notification-text").addClass("alert");
                    $("#notification-text").addClass("alert-danger");
                    var msg = $("#notification").data('addCartFailed');
                    $("#notification-text").html(msg);

                    // notification fade out
                    setTimeout(function() {
                        $("#notification").fadeOut("slow");
                    }, 3e3);
                }
            });
        }
    });
    $("#cart-quantity").keyup(function(event) {
        var quantity = this.value;
        if (!$(this).val() || parseInt(quantity) <= 0) {
            $(this).val(1);
        }
    }).change(function() {
        var href = $(location).attr('href');
        var index = href.lastIndexOf('/');
        var id = href.substring(index + 1);
        var amount = $(this).val();
        var stock = $("#item-" + id).data('stock');

        // check stock
        if (parseInt(amount) > parseInt(stock)) {
            var msg = $("#product-container").data('soldOutMsg');
            $("#stock-label").html('<span class="sold-out-font"><i class="fa fa-ban" aria-hidden="true"></i></span> ' + msg);
        } else {
            var msg = $("#product-container").data('inStockMsg');
            $("#stock-label").html('<span class="main-theme-font"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> ' + msg);
        }
    })

    $("input[id^='quantity-']").keyup(function(event){
        var quantity = this.value;
        if (!$(this).val() || parseInt(quantity) <= 0) {
            $(this).val(1);
        }
    }).change(function(){
        var lid = this.id.substring(9);
        var amount = $(this).val();
        if (amount <= 0) {
            amount = 1;
        }
        var stock = $("#item-" + lid).data('stock');
        if (amount > parseInt(stock)) {
            // change msg to sold out
            var msg = $("#cart-display").data('soldOutMsg');
            $("#stock-label").html(
                '<span class="sold-out-font"><i class="fa fa-ban" aria-hidden="true"></i></span> ' + msg
            );

            // disable checkout button
            $("#payment").addClass('disabled');
        } else {
            // change msg back to in stock
            var msg = $("#cart-display").data('inStockMsg');
            $("#stock-label").html(
                '<span class="main-theme-font"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span> ' + msg
            );

            // remove checkout button disable class
            $("#payment").removeClass('disabled');


            // send request to server
            var url = Routing.generate('zh-CN__RG__' + 'best365_store_cart_update_line', {lid: lid, quantity: amount});
            $.ajax({
                url: url,
                type: 'GET',
                success: function(result){
                    if (result == 'success') {
                        var display = $("#cart-amount").html();
                        // update cart amount display
                        label.fadeOut();
                        setTimeout(function() {
                            var cartAmount = 0;
                            $("input[id^='quantity-']").each(function() {
                                cartAmount = cartAmount + parseInt($(this).val());
                            })
                            $("#cart-amount").html(cartAmount);
                        }, 500);
                        label.fadeIn();

                        // update line amount
                        var unitPrice = $("#unit-price-" + lid).html().trim();
                        var price = unitPrice.replace(/[^\d.]/g, '');
                        var index = unitPrice.indexOf(price);
                        var linePrice = unitPrice.substring(0, index) + (price * amount).toFixed(2);
                        $("#line-price-"+lid).html(linePrice);

                        // update cart amount
                        var cartPrice = 0;
                        $("span[id^='line-price-']").each(function() {
                            cartPrice += parseFloat($(this).html().replace(/[^\d.]/g, ''));
                        });
                        $("#cart-price").html(unitPrice.substring(0, index) + cartPrice.toFixed(2));

                        // update order info
                        setOrderInfo();

                    } else {
                        alert('failed to add product to cart.');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    alert('failed to add product to cart.');
                }
            });
        }
    })

    $("#shipping-method").change(function() {
        setOrderInfo();
    })

    $("#shipping-address").change(function () {
        var aid = $(this).val();
        var url = Routing.generate('zh-CN__RG__' + 'best365_store_cart_delivery', {aid: aid});
        $.ajax({
            url: url,
            type: 'GET',
            success: function(result){
                var json = JSON.parse(result);
                var optionsAsString = "";
                for (var i = 0; i < json.length; i++) {
                    optionsAsString += "<option value='" + json[i].id + "'>" + json[i].name + "</option>";
                    if (i == 0) {
                        var first = json[i].id;
                    }
                }
                $("#shipping-method").find('option').remove().end().append($(optionsAsString));
                setOrderInfo();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    })

    $("#notice").change(function () {
        InitiateSubmit();
    });
});