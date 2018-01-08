$(document).ready(function () {
    $(".answerSend").click(function(){
        
        var answer = {
            answer: $('#answer').val(),
            questionID: $('#trID').val()
        };

        if(answer.answer == null || answer.answer == ""){
            toastr.warning("Answer can not be empty!");
        }
        else{
            $.post('../translationRequest/saveAnswer', { answer: answer }, function (result) {
                getAnswers(answer.questionID);
                toastr.success("The answer was sent!");
            });
        }
        
    });
});

function getAnswers(questionID){
    var questionID = {
        qID : questionID
    };
    $.post('../translationRequest/getAnswers', {questionID: questionID}, function (result) {
        console.log(result);
        var obj = $.parseJSON(result);
        $("#answers").empty();
        $.each(obj, function (i, item) {  
            $("#answers").append("<div class='row'><div class='col-sm-2 col-12'><a href='u/" + item.userName + "'><img src='" + item.userAvatar + "' alt='Material Design for Bootstrap - example photo'></a></div><div class='col-sm-10 col-12'><a href='u/" + item.userName + "'><h3 class='user-name'>" + item.name + "</h3></a><div class='card-data'><ul class='list-unstyled'><li class='comment-date'><i class='fa fa-clock-o'></i> " + item.date + "</li></ul></div><p class='comment-text'>" + item.text + "</p></div></div>");
        });
        $("#answersCounter").text("");
        $("#answersCounter").text(obj.length);
    });
}
