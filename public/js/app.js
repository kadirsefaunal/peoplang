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

setInterval(function () { 
    $.get('app/getPosts', function (result) {  
        console.log(result);
        var obj = $.parseJSON(result);
        $("#sortable").empty();
        $.each(obj, function (i, item) {  
            $("#sortable").append("<li><div class=\"media\"><div class=\"media-left align-self-center\"><a href=\"u/" + item.userName + "\"><img class=\"rounded-circle\" src=\"" +item.userAvatar + "\"></a></div><div class=\"media-body\"><h4><a href=\"u/" + item.userName + "\">" + item.name +"</a></h4><p>" + item.date + "</p><p>" + item.content + "</p></div></div></li>")
        });
    });
}, 3000);