$(document).ready(function () {
    $(".saveContact").click(function (result) {  
        var contact = {
            facebook : $('#facebook').val(),
            twitter  : $('#twitter').val(),
            instagram: $('#instagram').val(),
            skype    : $('#skype').val(),
            other    : $('#webSites').val()
        };

        $.post("settings/saveContact", { contact: contact }, function (result) {  
            console.log(result);
            if (result == "True") {
                window.location.reload(true);
            }
        });
    });
});