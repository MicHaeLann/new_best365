$( document ).ready(function() {
    display();
});

$("#add_new").click(function(event) {
    event.preventDefault();
    var state = $("#new_address").css('display');
    if (state == 'none') {
        $("#new_address").show();
    } else {
        $("#new_address").hide();
    }
});

$("#shipping_method").change(function() {
    display();
});

function getShippingPrice()
{
    var weight = $("#cart-weight").val();

    // set weight min 1000
    if (weight < 1000 && weight > 0) {
        weight = 1000;
    }

    // get unit price
    var id = $("#shipping_method").val() + '_price';
    var val = $("#" + id).val();

    var total = val.replace(/[^0-9\.]+/g,"") * weight / 1000;

    return total.toFixed(2);
}

function getSubtotal()
{
    return $("#subtotal").html().replace(/[^0-9\.]+/g,"");
}

function getPrice(price)
{
    // get currency
    var id = $("#shipping_method").val() + '_price';
    var val = $("#" + id).val();

    return val.replace(/[0-9\.]+/g,"") +  price;
}

function display()
{
    var shipping = getShippingPrice();
    var subtotal = getSubtotal();
    var total = (parseFloat(shipping) + parseFloat(subtotal)).toFixed(2);

    $("#shipping-price").html(getPrice(shipping));
    $("#total-price").html(getPrice(total));
}


