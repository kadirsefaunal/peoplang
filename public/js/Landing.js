$(document).ready(function () {

    $(".register").click(function(){
        var user = {
            userName: $.trim($('#sUpUserName').val()),
            mail    : $.trim($('#sUpEMail').val()),
            password: $.trim($('#sUpPassword').val())
        };
        
        var atpos   = user.mail.indexOf("@");
        var dotpos  = user.mail.lastIndexOf(".");

        if(user.userName == null || user.userName == "" || user.userName.length < 3){
            toastr.warning("Username must be at least 3 characters!");
        }
        else if(user.mail == null ||user.mail == ""){
            toastr.warning("Mail can not be empty!");
        }
        else if(atpos<1 || dotpos<atpos+2 || dotpos+2>= user.mail.length){
            toastr.warning("Please enter valid mail address");
        }
        else if(user.password == null || user.password == "" || user.password.length < 8){
            toastr.warning("Password must be at least 8 characters!");
        }
        else{
             $.post('user/register', { user: user }, function (result) {
                if (result == 'True') {
                    $.get('app/checkRegisterStatus', function(param){
                        window.location = 'settings';
                    });
                } else {
                    toastr.warning(result);
                }
            });
        }
       
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
                $.get('app/checkRegisterStatus', function(param){
                   console.log(param);
                    if(param == "t"){

                        window.location = 'app';
                    }
                    else{
                        window.location = 'settings';
                    }
                });
                
            } else {
                if(result == 0){
                    toastr.warning("Wrong Password!");
                }
                else{
                    toastr.warning("User Not Found!");
                }
                
            }
        });
    });
});

