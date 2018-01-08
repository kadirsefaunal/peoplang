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
            console.log(result);
            if (result == "True") {
                window.location.reload(true);
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

        console.log(aboutme);

        $.post("settings/saveAboutMe", { aboutme: aboutme }, function (result) {
            console.log(result);
            if (result == "True") {
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
                if(result == 1){
                    toastr.success("The password has been changed!");
                }else{
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

        console.log(lang);

        if (lang.language != "Choose Language" && lang.level != "Choose Level") {
            $.post("settings/addLangSpeaks", { lang: lang }, function (result) {
                console.log(result);
                if (result > 0) {
                    $(".languagesSpeaks").append("<div class=\"row lang\"><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + lang.language + "</label></div></div><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + lang.level + "</label></div></div><div class=\"col-md-2\"><a class=\"btn-floating float-right btn-sm\" id=\"deleteLangSpeaks\" langID=\"" + result + "\">-</a></div></div>");
                } else {
                    toastr.warning(result);
                }
            });
        }
    });

    function deleteLang(lID, trfl) {
        console.log("silme fonk");

        var langid = {
            lid: lID,
            status: trfl
        };
        console.log(langid);

        $.post("settings/deletelanguage", { langid: langid }, function (result) {
            console.log(result.length);
            if (result != "error") {
                var obj = $.parseJSON(result);
                if (langid.status == true) {
                    $(".languagesSpeaks").empty();
                    $.each(obj, function (i, item) {
                        $(".languagesSpeaks").append("<div class=\"row lang\"><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + item.language + "</label></div></div><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + item.level + "</label></div></div><div class=\"col-md-2\"><a class=\"btn-floating float-right btn-sm\" id=\"deleteLangSpeaks\" langID=\"" + item.ID + "\">-</a></div></div>");
                        console.log(item);

                    });
                } else {
                    $(".languagesLearn").empty();
                    $.each(obj, function (i, item) {
                        $(".languagesLearn").append("<div class=\"row lang\"><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + item.language + "</label></div></div><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + item.level + "</label></div></div><div class=\"col-md-2\"><a class=\"btn-floating float-right btn-sm\" id=\"deleteLangLearning\" langID=\"" + item.ID + "\">-</a></div></div>");
                        console.log(item);
                        
                    });
                }
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
            console.log(imgID);
            imageID = imgID;
        } else {
            console.log("lang id yok");
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
            location.reload(true);
        });
    }

    function deleteImage (imgID) {  
        var img = {
            imgID: imgID
        };

        $.post("settings/deleteImages", { img: img }, function () {  
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

        console.log(lang);

        if (lang.language != "Choose Language" && lang.level != "Choose Level") {
            $.post("settings/addLangSpeaks", { lang: lang }, function (result) {
                console.log(result);
                if (result > 0) {
                    $(".languagesLearn").append("<div class=\"row lang\"><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + lang.language + "</label></div></div><div class=\"col-md-5\"><div class=\"md-form form-sm\"><label>" + lang.level + "</label></div></div><div class=\"col-md-2\"><a class=\"btn-floating float-right btn-sm\" id=\"deleteLangLearning\" langID=\"" + result + "\">-</a></div></div>");
                } else {
                    console.log(result);
                }
            });
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
                //$("#states").append("<option value=\"1\">11111</option>");
                console.log(item.name);
                
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

        console.log(profile);
        // if(profile.name == null || profile.name == ""){
        //     toastr.warning("Name can not be empty!");
        // }
        // else if(profile.birthDate == null || profile.birthDate == ""){
        //     toastr.warning("Birthday can not be empty!");
        // }
        // else if(atpos<1 || dotpos<atpos+2 || dotpos+2>= user.mail.length){
        //     toastr.warning("Please enter valid mail address");
        // }
        // else if(user.password == null || user.password == "" || user.password.length < 8){
        //     toastr.warning("Password must be at least 8 characters!");
        // }
        // console.log(profile);

        $.post("settings/saveProfile", {profile: profile}, function (result) {  
            console.log(result);
            
        });
        
    });


    // $("#imageInput").on('change', function(){
    //     var data = new FormData();
    //     $.each($("#imageInput")[0].files, function (i, file) {  
    //         data.append("imageInput", file);
    //     });
        
    //     $.ajax({
    //         url: "settings/uploadImage",
    //         type: "POST",
    //         processData: false,
    //         data: data,
    //         contentType: false,
    //         cache: false,
    //         success: function (result) {  
    //             console.log(result);
    //             $("#imageeeee").attr("src",result);
    //             GetPhotos();
    //             // TODO: fotoğraf listesini yenile
    //         }
    //     });

    // });

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
                console.log(result);
                $("#imageeeee").attr("src",result);
                GetPhotos();
                // TODO: fotoğraf listesini yenile
            }
        });

    });

    function GetPhotos() {  
        $.get("settings/getImages", function (result) {  
            var obj = $.parseJSON(result);
            console.log(obj);
            $("#imageList").empty();
            $.each(obj, function (i, item) {  
                $("#imageList").append("<div class='col-md-4 mt-3'><div class='view overlay hm-white-slight'><img src='" + item.url + "' class='img-fluid' alt='" + item.url + "'><a data-toggle='modal' data-target='#modalmodalmodal' imageID='" + item.imageID + "'> <div class='mask waves-effect waves-light'></div></a></div></div>");
            });

            if (obj.length < 9) {
                $("#imageList").append("<div class='col-md-4 mt-3'><label class='custom-file-upload'><input type='file' id='imageInput' name='imageInput' /><a type='file'><i class='fa fa-plus' aria-hidden='true'></i></a></label></div> ");
            }
        });
    };
});