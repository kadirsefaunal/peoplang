$(document).ready(function () {
    $(document.body).on("click", "a", function () {
        var requestID = $(this).attr("requestID");

        if (requestID > 0) {
            deleteRequest(requestID);
            toastr.success("Translation Request deleted!");
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
            var obj = $.parseJSON(result);
            $("#myRequest").empty();
            $.each(obj, function (i, item) {
                var miliscUnixTime = item.date * 1000;
                var date = new Date(miliscUnixTime);
                var day = (date.getDate() < 10 ? '0' : '') + date.getDate();
                var month = (date.getMonth() < 9 ? '0' : '') + (date.getMonth() + 1);
                var year = date.getFullYear();
                var shortDate = day + "/" + month + "/" + year;
                $("#myRequest").append("<tr><th><a href='tr/" + item.ID +"'>" + item.title + "</a></th><td>" + shortDate + "</td><td>" + item.textLanguage + "</td><td>" + item.languageToTranslation + "</td><td><a requestID='" + item.ID + "'class='btn-floating btn-sm red'><i class='fa fa-trash'></i></a></td></tr>");
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
                getRequest();    
            });
            toastr.success("Translation Request Sent!");
            $('#title').val("");
            $('#content').val("");
        }

    });

});

setInterval(function () { 
    $.get('translation/getAllRequests', function (result) {  
        var obj = $.parseJSON(result);
        $("#allRequests").empty();
        $.each(obj, function (i, item) {  
            $("#allRequests").append("<tr><td><a href='u/" + item.userName + "'> <img src='" + item.userAvatar + "' class='rounded-circle avatar-img z-depth-1-half' width='40' height='40' /></a></td><th><a href='tr/" + item.ID + "'>" + item.title + "</a></th><td>" + item.date + "</td><td>" + item.textLanguage + "</td><td>" + item.languageToTranslation + "</td></tr>");
        });
    });
}, 3000);