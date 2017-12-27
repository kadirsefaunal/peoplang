$(document).ready(function () {
    
    $("#requestSend").click(function(){
        var request = {
            title : $('#title').val(),
            text : $('#content').val(),
            textLanguage : $('#textLang').val(),
            languageToTranslation : $('#translateLang').val()
        }
        console.log("deneme");
        console.log(request);
    });

});