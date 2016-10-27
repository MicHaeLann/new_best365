$("#search-button").click(function() {
    var field = $("#field").val();
    if (field.length > 0) {
        $("#search-form").submit();
    }
});