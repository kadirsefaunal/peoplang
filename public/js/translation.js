$(document).ready(function () {
    
    $("#requestSend").click(function(){
        var request = {
            title : $('#title').val(),
            text : $('#content').val(),
            textLanguage : $('#textLang option:selected').text(),
            languageToTranslation : $("#translateLang option:selected").text()
        }
        console.log(request);

        if (request.textLanguage != "Text Language" && request.languageToTranslation != "Choose Level") {
            $.post("translation/addTranslationRequest", { request: request }, function (result) {
                console.log(result);
                
            });
        }

    });

});