$(document).ready(function () {


    $("#postSend").click(function(){
        
        var post = {
            content: $.trim($('#userPost').val())
        };


        if(post.content == null || post.content == ""){
            toastr.error('Post can not be empty!');
        } else {
            $.post('app/savePost', { post: post });
            toastr.success('Post was send!');
            $('#userPost').val("");
        }
    });

    $("#onlineLang").change( function () {  
        var language = {
            langName: $("#onlineLang option:selected").text()
        };
        
        if (language.langName == "Language Select") {
            toastr.error('You can not choose this option!');
        } else {
            $.post("app/getOnline4", { language: language }, function (result) {  
                var obj = $.parseJSON(result);

                $("#onlineUsers").empty();
                $.each(obj, function (i, item) {  
                    $("#onlineUsers").append("<div class='col-3'><a href='u/" + item.userName + "'><img src='"+ item.avatar +"' width='80' height='80'alt='...' class='rounded-circle mx-auto d-block img-fluid'></a><div class='text-center app-username'><a href='u/" + item.userName + "'>"+ item.userName +"</a><span class='app-age'> | "+ item.age +"</span> </div><div class='text-center'><img src='"+ item.flag +"' width='28px' height='20px' /><span class='app-city'> "+ item.location +" </span> </div></div>")
                });
            });
        }
    });

    $("#rejectFriendReq").click(function () {  
        var user = {
            userID: $("#rejectFriendReq").attr("uID")
        };

        $.post("notification/rejectFriendReq", { user: user });
    });

    $("#acceptFriendReq").click(function () {  
        var user = {
            userID: $("#rejectFriendReq").attr("uID")
        };

        $.post("notification/acceptFriendReq", { user: user }, function () {  
            toastr.success("You accept friend request!");
        });
    });

});

setInterval(function () { 
    $.get('app/getPosts', function (result) {  
        var obj = $.parseJSON(result);
        
        $("#sortable").empty();
        $.each(obj, function (i, item) {  
            $("#sortable").append("<li><div class=\"media\"><div class=\"media-left align-self-center\"><a href=\"u/" + item.userName + "\"><img class=\"rounded-circle\" src=\"" +item.userAvatar + "\"></a></div><div class=\"media-body\"><h4><a href=\"u/" + item.userName + "\">" + item.name +"</a></h4><p>" + item.date + "</p><p>" + item.content + "</p></div></div></li>")
        });
    });
}, 3000);