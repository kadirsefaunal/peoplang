$(document).ready(function () {
    $("#search").click(function(){
        
        var search = {
            username: $('#username').val(),
            country : $("#country option:selected").text(),
            gender  : $("#gender option:selected").text(),
            age1    : $("#age1 option:selected").text(),
            age2    : $("#age2 option:selected").text(),
            language: $("#language option:selected").text()
        };
        console.log(search);

        $.post("online/search", { search: search }, function (result) {
            var obj = $.parseJSON(result);
            console.log(obj);
            $("#onlineUsers").empty();
            $.each(obj, function (i, item) {  
                $("#onlineUsers").append("<div class='col-md-3 mt-3'><div class='card card-body'><div class='row'><div class='col-md-12'><div class='text-center mt-3'><a href='u/" + item.userName + "'><img src='" + item.avatar + "' class='rounded-circle img-responsive z-depth-1' alt='Responsive image' height='150px' width='150px'></a></div></div></div><div class='row'><div class='col-md-12'><div class='text-center mt-3'><i class='fa fa-mars' aria-hidden='true'></i><a href='u/" + item.userName + "'>" + item.userName + "</a><span>| " + item.age + "</span><br><img src='" + item.flag + "' width='24' height='24'><span>" + item.location + "</span></div></div></div></div></div>")
            

            });
        });
    });
});