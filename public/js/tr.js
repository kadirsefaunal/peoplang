$(document).ready(function () {
    $(".answerSend").click(function(){
        
        var answer = {
            answer: $('#answer').val(),
            questionID: $('#trID').val()
        };
        console.log(answer);

        $.post('../translationRequest/saveAnswer', { answer: answer }, function (result) {
            console.log(result);
            
        });
    });
});