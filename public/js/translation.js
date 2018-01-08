$(document).ready(function () {
    $(document.body).on("click", "a", function () {
        var requestID = $(this).attr("requestID");

        if (requestID > 0) {
            deleteRequest(requestID);
        } else {
            console.log("request id yok");
        }
    });

    function deleteRequest (rID) {  
        var request = {
            requestID: rID
        };

        $.post("translation/deleteRequestByID", { request: request }, function (result) {  
            getRequest();
        });
    }

    function getRequest() {
        $.get("translation/getRequests", function (result) { 
            console.log(result);
            var obj = $.parseJSON(result);
            $("#myRequest").empty();
            $.each(obj, function (i, item) {
                $("#myRequest").append("<tr><th><a href='tr/" + item.ID +"'>" + item.title + "</a></th><td>" + item.date + "</td><td>" + item.textLanguage + "</td><td>" + item.languageToTranslation + "</td><td><a requestID='" + item.ID + "'class='btn-floating btn-sm red'><i class='fa fa-trash'></i></a></td></tr>");
                console.log(item);
            });
            $("#postList").append("</ul>");
        });
    }


    $("#requestSend").click(function(){
        var dt = new Date();

        var request = {
            title : $.trim($('#title').val()),
            text : $.trim($('#content').val()),
            textLanguage : $('#textLang option:selected').text(),
            languageToTranslation : $("#translateLang option:selected").text(),
            date: 0,
            userID: 0
        }

        if(request.title == null || request.title == ""){
            toastr.warning("Title can not be empty!");
        }
        else if(request.text == null || request.text == ""){
            toastr.warning("Translation content can not be empty!");
        }
        else if (request.textLanguage == "Text Language") {
            toastr.warning("Text Language can not be empty!");
        }
        else if(request.languageToTranslation == "Choose Level"){
            toastr.warning("Translate can not be empty!");
        }
        else{
            $.post("translation/addTranslationRequest", { request: request }, function (result) {
                console.log(result);
                getRequest();    
            });
            toastr.success("Translation Request Sent!");
        }

    });

});

setInterval(function () { 
    $.get('translation/getAllRequests', function (result) {  
        console.log(result);
        var obj = $.parseJSON(result);
        $("#allRequests").empty();
        $.each(obj, function (i, item) {  
            $("#allRequests").append("<tr><td><a href='u/" + item.userName + "'> <img src='" + item.userAvatar + "' class='rounded-circle avatar-img z-depth-1-half' width='40' height='40' /></a></td><th><a href='tr/" + item.ID + "'>" + item.title + "</a></th><td>" + item.date + "</td><td>" + item.textLanguage + "</td><td>" + item.languageToTranslation + "</td></tr>");
        });
    });
}, 3000);