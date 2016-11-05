$("#add_new").click(function(event) {
    event.preventDefault();
    var state = $("#new_address").css('display');
    if (state == 'none') {
        $("#new_address").show();
    } else {
        $("#new_address").hide();
    }

});