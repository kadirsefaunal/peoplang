$(document).ready(function () {
    
    $("#postSend").click(function(){
        
        var post = {
            content: $('#userPost').val()
        };
        console.log(post);
        if(post == null){
            console.log("lütfen değer gir");
        }

        $.post('app/savePost', { post: post }, function (result) {
            console.log(result);
            
        });
    });

});