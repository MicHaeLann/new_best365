$(function() {
    var label = $("#cart-label");
    var labelOffset = label.offset();
    $("a[id^='add-cart']").click(function(event){
        var addCart = $(this);
        var img = addCart.parent().parent().parent().find('img').attr('src');
        var id = this.id.substring(9);
        var display = $("#cart-amount").html();

        var flyer = $('<img class="u-flyer" src="'+img+'">');
        flyer.fly({
            start: {
                left: event.pageX,
                top: event.pageY
            },
            end: {
                left: labelOffset.left + 10,
                top: labelOffset.top + 10,
                width: 0,
                height: 0
            },
            onEnd: function(){
                //send request to server
                var amount = 1;
                if ($("#cart-quantity") && $("#cart-quantity").val() > 1) {
                    amount = $("#cart-quantity").val();
                }
                // var url = Routing.generate('zh-CN__RG__' + 'best365_store_cart_add_purchasable', {id: id, quantity: amount});
                var url = 'http://localhost/michael/new_best365/web/app_dev.php/best365/cart/add/'+id+'/'+amount;
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(result){
                        console.log(result);
                        if (result == 'success') {
                            // update cart amount display
                            $("#cart-amount").html(parseInt(display) + amount);
                            console.log(parseInt(display) + amount);
                        } else {
                            console.log('111111');
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
        });
    });
});