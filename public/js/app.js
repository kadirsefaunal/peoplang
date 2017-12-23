$(document).ready(function () {
    
    $("#postSend").click(function(){
        
        var post = {
            content: $('#userPost').val()
        };
        console.log(post);

        $.post('app/savePost', { post: post }, function (result) {
            console.log(result);
            
        });
    });
    
});