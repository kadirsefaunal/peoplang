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
                $("#myRequest").append("<tr><th>" + item.title + "</th><td>" + item.date + "</td><td>" + item.textLanguage + "</td><td>" + item.languageToTranslation + "</td><td><a requestID='" + item.ID + "'class='btn-floating btn-sm red'><i class='fa fa-trash'></i></a></td></tr>");
                console.log(item);
            });
            $("#postList").append("</ul>");
        });
    }

    $("#requestSend").click(function(){
        var dt = new Date();

        var request = {
            title : $('#title').val(),
            text : $('#content').val(),
            textLanguage : $('#textLang option:selected').text(),
            languageToTranslation : $("#translateLang option:selected").text(),
            date: 0,
            userID: 0
        }
        console.log(request);

        if (request.textLanguage != "Text Language" && request.languageToTranslation != "Choose Level") {
            $.post("translation/addTranslationRequest", { request: request }, function (result) {
                console.log(result);
                getRequest();    
            });
            
        }

    });

});