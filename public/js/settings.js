$(document).ready(function () {
    $(".saveContact").click(function () {
        var contact = {
            facebook: $('#facebook').val(),
            twitter: $('#twitter').val(),
            instagram: $('#instagram').val(),
            skype: $('#skype').val(),
            other: $('#webSites').val()
        };

        $.post("settings/saveContact", { contact: contact }, function (result) {
            
            if (result == "True") {
                window.location.reload(true);
                toastr.success("Saved!");
            }
        });
    });

    $(".saveAboutMe").click(function () {
        var aboutme = {
            aboutMe: $('#aboutMe').val(),
            requests: $('#request').val(),
            languageExcRequests: $('#languageExchangeRequest').val(),
            hobbiesInterests: $('#hobiesandInterest').val(),
            favMusics: $('#favoriteMusic').val(),
            favMovies: $('#favoriteMovies').val(),
            favTvShows: $('#favoriteTVShows').val(),
            favBooks: $('#favoriteBooks').val(),
            quotes: $('#quotes').val()
        };

        $.post("settings/saveAboutMe", { aboutme: aboutme }, function (result) {
            
            if (result == "True") {
                toastr.success("Saved!");
                window.location.reload(true);
            }
        });

    });

    $(".changePwd").click(function () {
        var password = {
            newPassword: $.trim($('#newPassword').val()),
            newPasswordConfirm: $.trim($('#newPasswordConfirm').val()),
            oldPassword: $.trim($('#oldPassword').val())
        };

        if(password.newPassword == null || password.newPassword == "" || password.newPassword.length < 8){
            toastr.warning("Password must be at least 8 characters!");
        }
        else if (password.newPassword == password.newPasswordConfirm) {
            $.post("settings/changePassword", { password: password }, function (result) {
                if (result == 1){
                    toastr.success("The password has been changed!");
                } else {
                    toastr.error("Old password is incorrect!");
                }
            });
        } else {
            toastr.warning("Passwords not match");
        }
    });

    $(".addLangSpeaks").click(function () {
        var lang = {
            language: $("#langSpeak option:selected").text(),
            level: $("#langSpeakLevel option:selected").text(),
            learningOrSpeaking: true,
            userID: 0
        };

        if (lang.language != "Choose Language" && lang.level != "Choose Level") {
            $.post("settings/addLangSpeaks", { lang: lang }, function (result) {
                if (result > 0) {
                    $(".languagesSpeaks").append("<div class=\"row lang\"><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + lang.language + "</label></div></div><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + lang.level + "</label></div></div><div class=\"col-md-2\"><a class=\"btn-floating float-right btn-sm red lighten-1\" id=\"deleteLangSpeaks\" langID=\"" + result + "\"><i class='fa fa-minus' aria-hidden='true'></i></a></div></div>");
                } else {
                    toastr.warning(result);
                }
            });
        } else {
            toastr.warning("Language and level can not be empty!");
        }
    });

    function deleteLang(lID, trfl) {

        var langid = {
            lid: lID,
            status: trfl
        };

        $.post("settings/deletelanguage", { langid: langid }, function (result) {
            
            if (result != "error") {
                var obj = $.parseJSON(result);
                if (langid.status == true) {
                    $(".languagesSpeaks").empty();
                    $.each(obj, function (i, item) {
                        $(".languagesSpeaks").append("<div class=\"row lang\"><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + item.language + "</label></div></div><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + item.level + "</label></div></div><div class=\"col-md-2\"><a class=\"btn-floating float-right btn-sm red lighten-1\" id=\"deleteLangSpeaks\" langID=\"" + item.ID + "\"><i class='fa fa-minus' aria-hidden='true'></i></a></div></div>");
                    });
                } else {
                    $(".languagesLearn").empty();
                    $.each(obj, function (i, item) {
                        $(".languagesLearn").append("<div class=\"row lang\"><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + item.language + "</label></div></div><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + item.level + "</label></div></div><div class=\"col-md-2\"><a class=\"btn-floating float-right btn-sm red lighten-1\" id=\"deleteLangLearning\" langID=\"" + item.ID + "\"><i class='fa fa-minus' aria-hidden='true'></i></a></div></div>");
                    });
                }
            } else {
                toastr.error("Error occurred during deletion!");
            }
        });
    };

    var imageID = 0;

    $(document.body).on("click", "a", function () {
        var langID = $(this).attr("langID");
        var status = $(this).attr("id");
        var imgID = $(this).attr("imageID");

        if (langID > 0 && status == "deleteLangLearning") {
            deleteLang(langID, false);
        } else if (langID > 0 && status == "deleteLangSpeaks") {
            deleteLang(langID, true);
        } else if (imgID > 0) {
            imageID = imgID;
        } else {

        }
    });

    $("#deleteImage").click(function () {  
        deleteImage(imageID);
    });

    $("#setAvatar").click(function () {  
        setAvatar(imageID);
    });

    function setAvatar(imgID) {
        var img = {
            imgID: imgID
        };

        $.post("settings/setAvatar", { img: img }, function () {  
            window.location.reload(true);
        });
    }

    function deleteImage (imgID) {  
        var img = {
            imgID: imgID
        };

        $.post("settings/deleteImages", { img: img }, function () { 
            toastr.success("Photo deleted!");
            GetPhotos();
        });
    };


    $(".addLangLearn").click(function () {
        var lang = {
            language: $("#langLearn option:selected").text(),
            level: $("#langLearnLevel option:selected").text(),
            learningOrSpeaking: false,
            userID: 0
        };


        if (lang.language != "Choose Language" && lang.level != "Choose Level") {
            $.post("settings/addLangSpeaks", { lang: lang }, function (result) {
                if (result > 0) {
                    $(".languagesLearn").append("<div class=\"row lang\"><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + lang.language + "</label></div></div><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + lang.level + "</label></div></div><div class=\"col-md-2\"><a class=\"btn-floating float-right btn-sm red lighten-1\" id=\"deleteLangLearning\" langID=\"" + result + "\"><i class='fa fa-minus' aria-hidden='true'></i></a></div></div>");
                } else {
                    toastr.warning(result);
                }
            });
        } else {
            toastr.warning("Language and level can not be empty!");
        }
    });


    $("#countries").change(function() {
        var country = {
            countryID: $("#countries option:selected").val()
        };
        
        $.post("settings/getstates", {country: country}, function (result) {  
            var obj = $.parseJSON(result);
            $(".mdb-select").material_select("destroy");
            $("#states").empty();
            $("#states").append("<option value=\"\" disabled selected>Choose State</option>");
            $.each(obj, function (i, item) {
                $("#states").append("<option value=\"" + item.id + "\">" + item.name + "</option>");
            });
            $(".mdb-select").material_select();
        });
    });

    $("#saveProfile").click(function () {  
        var profile = {
            name      : $.trim($("#profileName").val()),
            birthDate : $.trim($("#date-picker").val()),
            gender    : $.trim($("#gender option:selected").text()),
            mail      : $.trim($("#profileMail").val()),
            country   : $.trim($("#countries option:selected").text()),
            city      : $.trim($("#states option:selected").text())
        };

        var atpos   = profile.mail.indexOf("@");
        var dotpos  = profile.mail.lastIndexOf(".");

        if (profile.name == null || profile.name == ""){
            toastr.warning("Name can not be empty!");
        } else if (profile.birthDate == null || profile.birthDate == ""){
            toastr.warning("Birthday can not be empty!");
        } else if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= profile.mail.length){
            toastr.warning("Please enter valid mail address");
        } else if (profile.gender == null || profile.gender == ""){
            toastr.warning("Gender can not be empty!");
        } else if (profile.country == null || profile.country == ""){
            toastr.warning("Country can not be empty!");
        } else {
            $.post("settings/saveProfile", {profile: profile}, function (result) {  
                if (result == "True") {
                    window.location = "app";
                } else {
                    toastr.warning(result);
                }
            });
        }
    });

    $(document.body).on('change', '#imageInput', function(){
        var data = new FormData();
        $.each($("#imageInput")[0].files, function (i, file) {  
            data.append("imageInput", file);
        });
        
        $.ajax({
            url: "settings/uploadImage",
            type: "POST",
            processData: false,
            data: data,
            contentType: false,
            cache: false,
            success: function (result) {  
                GetPhotos();
            }
        });

    });

    function GetPhotos() {  
        $.get("settings/getImages", function (result) {  
            var obj = $.parseJSON(result);
            $("#imageList").empty();
            $.each(obj, function (i, item) {  
                $("#imageList").append("<div class='col-md-4 mt-3'><div class='view overlay hm-white-slight'><img src='" + item.url + "' alt='" + item.url + "'  width='200' height='200'><a data-toggle='modal' data-target='#modalmodalmodal' imageID='" + item.imageID + "'> <div class='mask waves-effect waves-light'></div></a></div></div>");
            });

            if (obj.length < 9) {
                $("#imageList").append("<div class='col-md-4 mt-3'><label class='custom-file-upload'><input type='file' id='imageInput' name='imageInput' /><a type='file' style='font-size:150px;'><i class='fa fa-plus' aria-hidden='true'></i></a></label></div> ");
            }
        });
    };
});