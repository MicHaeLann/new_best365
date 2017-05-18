$( document ).ready(function() {
    $("div[id^='qr-']").each(function() {
        var oid = this.id.substr(3);
        var url = $(this).data('ref');
        $("#" + this.id).qrcode({width: 80, height: 80, text: url});
    });
});