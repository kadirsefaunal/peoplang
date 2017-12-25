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

    $(".addLangSpeaks").click(function () {  
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
                if (result > 0) {
                    $(".languagesSpeaks").append("<div class=\"row lang\"><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + langSpeaks.language + "</label></div></div><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + langSpeaks.level + "</label></div></div><div class=\"col-md-2\"><a class=\"btn-floating float-right btn-sm deleteLang\" langID=\"" + result + "\">-</a></div></div>");
                } else {
                    console.log(result);
                }
            });
        }
    });

    function deleteLang(lID) {  
        console.log("silme fonk");

        var langid = {
            lid : lID
        };
        console.log(langid);
        
        $.post("settings/deletelanguage", {langid: langid}, function (result) {  
            console.log(result.length);
            if (result != "error") {
                var obj = $.parseJSON(result);
                $(".languagesSpeaks").empty();
                $.each(obj, function (i, item) {
                    $(".languagesSpeaks").append("<div class=\"row lang\"><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + item.language + "</label></div></div><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + item.level + "</label></div></div><div class=\"col-md-2\"><a class=\"btn-floating float-right btn-sm deleteLang\" langID=\"" + item.ID + "\">-</a></div></div>");
                    console.log(item);
                    
                });
            }
            
        });
    };

    $(document.body).on("click", "a", function () {  
        var langID = $(this).attr("langID");
        console.log(langID);
        if (langID > 0) {
            deleteLang(langID);    
        } else {
            console.log("lang id yok");
            
        }
    });

    
    // $(".deleteLang").click(function () { 
    //     var langID = $(".deleteLang").attr("langID"); 
    //     console.log(langID);
        
    //     //$("div[langID='"+ langID +"']").remove();
    // });
});