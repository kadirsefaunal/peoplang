$(document).ready(function () {
    $(".saveContact").click(function () {  
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

    $(".saveAboutMe").click(function () {  
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

    $(".changePwd").click(function () {  
        var password = {
            newPassword         : $('#newPassword').val(),
            newPasswordConfirm  : $('#newPasswordConfirm').val(),
            oldPassword         : $('#oldPassword').val()
        };

        if (password.newPassword == password.newPasswordConfirm) {
            $.post("settings/changePassword", {password: password}, function (result) {  
                console.log(result);
                
            });
        } else {
            console.log("parolalar uyuşmuyor!");
            
        }
    });

    $(".saveLangSpeaks").click(function () {  
        var langSpeaks = {
            language            : $("#langSpeak option:selected").text(),
            level               : $("#langSpeakLevel option:selected").text(),
            learningOrSpeaking  : true,
            userID              : 0
        };

        console.log(langSpeaks);

        if (langSpeaks.language != "Choose Language" && langSpeaks.level != "Choose Level") {
            $.post("settings/addLangSpeaks", {langSpeaks: langSpeaks}, function (result) {  
                console.log(result);
                
            });
        }
        
    });
});