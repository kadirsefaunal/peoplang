var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

users = {};

io.on('connection', function(socket) {
   console.log('A user connected');
   socket.on('setUser', function(data) {

     users[data] = socket;
      console.log(Object.keys(users));
      
   });

   socket.on("new_message", function (data) {  
      
      console.log(Object.keys(users));
      var receiver = String(data.receiver);
      users[receiver].emit("take_message", data.message);
      //io.sockets.emit("take_message", data.message);
      
   });

   socket.on("disconnect", function (data) {  
      if (!socket.nickname) return;
      delete users[socket.nickname];
      console.log(Object.keys(users));
      console.log("disconnected " + socket.id);
      
   });

});

http.listen(3000, function() {
   console.log('listening on localhost:3000');
});