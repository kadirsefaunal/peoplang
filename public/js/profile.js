$(document).ready(function () {
    $(document.body).on("click", "a", function () {
        var postID = $(this).attr("postID");

        if (postID > 0) {
            deletePost(postID);
            toastr.success("Post deleted!");
        }
    });


    function deletePost (pID) {  
        var post = {
            postID: pID
        };

        $.post("profile/deletePostByID", { post: post }, function (result) {  
            var obj = $.parseJSON(result);
            $("#postList").empty();
            $("#postList").append("<ul id=\"sortable\">");
            $.each(obj, function (i, item) {
                $("#sortable").append("<li><div class=\"card news-card\"><div class=\"pr-3 pl-3\"><div class=\"content align-middle\"><div class=\"right-side-meta\"><a postID=\"" + item.postid + "\" class=\"btn-floating btn-md red\"><i class=\"fa fa-times\"></i></a></div><div class=\"pt-4\"><img src=\"" + item.avatar + "\" alt=\"example avatar\" class=\"rounded-circle avatar-img z-depth-1-half\">" + item.userName + "</div></div></div><div class=\"pl-3 pr-3\"><div class=\"social-meta\"><p>" + item.content + "</p></div></div></div></li>");
            });
            $("#postList").append("</ul>");
        });
    };

    $("#sendreport").click(function() {
        
        var user = {
            userID : $("#sendreport").attr("userID"),
            content: $.trim($("#reportText").val())
        };

        if(user.content == null || user.content == ""){
            toastr.error("Write the reason for the report!");
        }
        else{
            $.post("../profile/sendReport", { user: user }, function (result) {
                toastr.success("The report was sent.");    
            });

        }
        
    });

    $("#sendblock").click(function () {
       var user = {
           userID : $("#sendblock").attr("userID")
       };
       
       $.post("../profile/sendBlock", { user:user }, function (result) {  
            toastr.success("User is Blocked!");  
       });
    });

    $("#addFriend").click(function () {  
        var user = {
            userID : $("#addFriend").attr("userID")
        };

        $.post("../profile/addFriend", { user:user }, function (result) {  
            toastr.success("A friend request was sent");
       });
    });

    $("#deleteFriend").click(function () {  
        var user = {
            userID : $("#deleteFriend").attr("userID")
        };
        
        $.post("../profile/deleteFriend", { user:user }, function (result) {  
            toastr.success("Friend deleted!");
       });
    });

    $(document.body).on("click", "#show", function () {
        var img = $(this).attr("imgUrl");
        $("#showImage").attr("src", img);
    });
});