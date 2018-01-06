$(document).ready(function () {
    $("#send").click(function () {  
        var message= {
            "receiver": $("#rID").val(),
            "message": $("#message").val()
        };

        console.log(message);
        
        $.post("saveMessage", { message: message }, function (result) {  

            var socket = io.connect( 'http://'+window.location.hostname+':3000' );
            
            // socket.emit('new_message', { 
            //     userID: result.userID,
            //     receiver: result.receiver,
            //     message: result.message,
            //     date: result.date,
            //     readStatus: result.readStatus
            // });
            socket.emit('new_message', result);

            socket.on('new_message', function (msg) {  
                var obj = $.parseJSON(msg);
                
                if (obj.receiver == $("#cookie").val()) {
                    console.log(obj);
                }
            
            });
        }); 
    });
});