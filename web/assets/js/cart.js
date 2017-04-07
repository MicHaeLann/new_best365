$(function() {
    var label = $("#cart-label");
    $("a[id^='add-cart']").click(function(event){
        var id = this.id.substring(9);
        var display = $("#cart-amount").html();

        //send request to server
        var amount = 1;
        if ($("#cart-quantity") && $("#cart-quantity").val() > 1) {
            amount = $("#cart-quantity").val();
        }

        var url = Routing.generate('zh-CN__RG__' + 'best365_store_cart_add_product', {id: id, quantity: amount});
        // var url = 'http://localhost/michael/new_best365/web/app_dev.php/best365/cart/add/'+id+'/'+amount;
        $.ajax({
            url: url,
            type: 'GET',
            success: function(result){
                if (result == 'success') {
                    // update cart amount display
                    label.fadeOut();
                    setTimeout(function() {
                        $("#cart-amount").html(parseInt(display) + amount);
                    }, 500);
                    label.fadeIn();
                } else {
                    console.log(result);
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
    });
});