$(document).ready(function () {
    $(".forScroll").scrollTop(9999999);

    var id = $("#cookie").val();
    var socket = io.connect( 'http://'+window.location.hostname+':3000' );
    socket.emit("setUser", id);

    socket.on('take_message', function (msg) {
        console.log(msg);
        if ($("#rID").val() == msg.userID) {
           
            var user = {
                "id": msg.userID
            };
            $.post("getMessageUser", { user: user }, function (result) {  
                console.log(result);
                var m = $.parseJSON(result);
                $(".chat").append('<li class="left clearfix"><span class="chat-img pull-left"><img src="'+m.avatar+ '" alt="User Avatar" class="rounded-circle" width="50px" height="50px" /></span><div class="chat-body clearfix"><p>'+ msg.message +'</p></div></li>');
            });
            $(".forScroll").scrollTop(scrollY);
        } else {
            alert("yeni mesajın var!");
        }
    });

    $("#send").click(function () {  
        var message= {
            "receiver": $("#rID").val(),
            "message": $("#message").val()
        };

        console.log(message);
        
        $.post("saveMessage", { message: message }, function (result) {  
            // socket.emit('new_message', { 
            //     userID: result.userID,
            //     receiver: result.receiver,
            //     message: result.message,
            //     date: result.date,
            //     readStatus: result.readStatus
            // });
            var obj = $.parseJSON(result);
            var user = {
                "id": obj.userID
            };

            $.post("getMessageUser", { user: user }, function (result) {  
                console.log(result);
                var m = $.parseJSON(result);
                $(".chat").append('<li class="left clearfix"><span class="chat-img pull-left"><img src="'+m.avatar+ '" alt="User Avatar" class="rounded-circle" width="50px" height="50px" /></span><div class="chat-body clearfix"><p>'+ obj.message +'</p></div></li>')
            });
            $(".forScroll").scrollTop(scrollY);
            socket.emit('new_message', obj);
        }); 
    });
});