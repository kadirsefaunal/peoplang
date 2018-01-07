$(document).ready(function () {

    $(".register").click(function(){
        var user = {
            userName: $('#sUpUserName').val(),
            mail    : $('#sUpEMail').val(),
            password: $('#sUpPassword').val()
        };
        console.log(user);

        $.post('user/register', { user: user }, function (result) {
            console.log(result);
            if (result == 'True') {
                window.location = 'app';
            } else {
                console.log(result);
            }
        });
    });

    $('.login').click(function () {
        var user = {
            userName: $('#sInUserName').val(),
            password: $('#sInPassword').val()
        };
        console.log(user);

        $.post('user/login', { user: user }, function (result) {
            console.log(result);
            if (parseInt(result) > 0) {
                window.location = 'app';
            } else {
                console.log(result);
            }
        });
    });
});

