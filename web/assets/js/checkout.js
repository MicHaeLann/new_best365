$( document ).ready(function() {
    var display = getPrice();
    $("#shipping-price").html(display);
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
    var display = getPrice();
    $("#shipping-price").html(display);
});

function getPrice()
{
    var weight = $("#cart-weight").val();

    // set weight min 1000
    if (weight < 1000) {
        weight = 1000;
    }

    // get unit price
    var id = $("#shipping_method").val() + '_price';
    var val = $("#" + id).val();

    var total = val.replace(/[^0-9\.]+/g,"") * weight / 1000;

    return val.replace(/[0-9\.]+/g,"") +  total.toFixed(2) ;
}


