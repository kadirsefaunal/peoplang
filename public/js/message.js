$(document).ready(function () {
    var scrollHeight = $("#myScroll").prop("scrollHeight");
    $("#myScroll").scrollTop(scrollHeight);
    var scrollY = $("#myScroll").scrollTop();
   

    var id = $("#cookie").val();
    var socket = io.connect( 'http://'+window.location.hostname+':3000' );
    socket.emit("setUser", id);

    socket.on('take_message', function (msg) {

        if ($("#rID").val() == msg.userID) {
            
            var user = {
                "id": msg.userID
            };

            $.post("getMessageUser", { user: user }, function (result) {  
                var m = $.parseJSON(result);
                $(".chat").append('<li class="left clearfix"><span class="chat-img pull-left"><img src="'+m.avatar+ '" alt="User Avatar" class="rounded-circle" width="50px" height="50px" /></span><div class="chat-body clearfix"><p>'+ msg.message +'</p></div></li>');
                $('#myScroll').scrollTop($('#myScroll')[0].scrollHeight);
            });
            

        } else {
            var sp = $("[uID="+ msg.userID +"]");
            sp.html('<i class="fa fa-envelope" aria-hidden="true"></i>');
        }
    });

    $("#send").click(function () {  

        var message= {
            "receiver": $("#rID").val(),
            "message": $.trim($("#message").val())
        };

        if (message.message == null || message.message == "") {
            toastr.warning("You can not send an empty message!");
        } else {
            $.post("saveMessage", { message: message }, function (result) {  
                var obj = $.parseJSON(result);
                var user = {
                    "id": obj.userID
                };
    
                $.post("getMessageUser", { user: user }, function (result) {  
                    var m = $.parseJSON(result);
                    $(".chat").append('<li class="left clearfix"><span class="chat-img pull-left"><img src="'+m.avatar+ '" alt="User Avatar" class="rounded-circle" width="50px" height="50px" /></span><div class="chat-body clearfix"><p>'+ obj.message +'</p></div></li>')
                    $('#myScroll').scrollTop($('#myScroll')[0].scrollHeight);
                });
                

                socket.emit('new_message', obj);
            }); 
        }
        $("#message").val("");
    });

    $(document.body).on("click", "#seeUserMessage", function () {  
        var user = {
            userID: $(this).attr("userID")
        };

        console.log(user);
        
        $.post('../notification/messageSetReadForUser', { user: user }, function (result) {  
            //href="<?php echo base_url("message/".$r["userID"]); ?>"
            window.location = "../message/" + user.userID;
        });
    });

    $(document.body).on("click", "#seeUserMessage2", function () {  
        var user = {
            userID: $(this).attr("userID")
        };

        console.log(user);
        
        $.post('notification/messageSetReadForUser', { user: user }, function (result) {  
            //href="<?php echo base_url("message/".$r["userID"]); ?>"
            window.location = "message/" + user.userID;
        });
    });
});