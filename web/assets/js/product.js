$("#cart-quantity").change(function() {
    var href = $("#add-cart")[0].href;
    var index = href.lastIndexOf('/');
    href = href.substring(0, index + 1) + $("#quantity").val();
    $("#add-cart").attr("href", href);
});