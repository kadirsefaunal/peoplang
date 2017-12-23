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

    $(".saveAboutMe").click(function (result) {  
        var aboutme = {
            aboutMe             : $('#aboutMe').val(),
            requests            : $('#request').val(),
            languageExcRequests : $('#languageExchangeRequest').val(),
            hobbiesInterests    : $('#hobiesandInterest').val(),
            favMusics           : $('#favoriteMusic').val(),
            favMovies           : $('#favoriteMovies').val(),
            favTvShows          : $('#favoriteTVShows').val(),
            favBooks            : $('#favoriteBooks').val(),
            quotes              : $('#quotes').val()
        };

        console.log(aboutme);

        $.post("settings/saveAboutMe", {aboutme: aboutme}, function (result) {  
            console.log(result);
            if (result == "True") {
                window.location.reload(true);
            }
        });
        
    });
});