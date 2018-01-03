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
            console.log(result);
        });
    });
});