$(document).ready(function () {
    var id = $("#cookie").val();
    var socket = io.connect( 'http://'+window.location.hostname+':3000' );
    socket.emit("setUser", id);

    socket.on('take_message', function (msg) {
        console.log(msg);
        
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
            socket.emit('new_message', obj);

            
        }); 
    });
});