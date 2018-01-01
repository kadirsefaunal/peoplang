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

    $("#onlineLang").change( function () {  
        var language = {
            langName: $("#onlineLang option:selected").text()
        };

        console.log(language);

        $.post("app/getOnline4", { language: language }, function (result) {  
            var obj = $.parseJSON(result);
            console.log(obj);
            $("#onlineUsers").empty();
            $.each(obj, function (i, item) {  
                $("#onlineUsers").append("<div class='col-3'><a href='u/" + item.userName + "'><img src='"+ item.avatar +"' width='80' height='80'alt='...' class='rounded-circle mx-auto d-block img-fluid'></a><div class='text-center app-username'><a href='u/" + item.userName + "'>"+ item.userName +"</a><span class='app-age'> | "+ item.age +"</span> </div><div class='text-center'><img src='"+ item.flag +"' width='28px' height='20px' /><span class='app-city'> "+ item.location +" </span> </div></div>")
            });
            
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