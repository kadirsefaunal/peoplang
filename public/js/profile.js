$(document).ready(function () {
    $(document.body).on("click", "a", function () {
        var postID = $(this).attr("postID");

        if (postID > 0) {
            deletePost(postID);
        } else {
            console.log("post id yok");
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
                console.log(item);
            });
            $("#postList").append("</ul>");
        });
    };

    $("#sendreport").click(function() {
        
        var user = {
            userID : $("#sendreport").attr("userID"),
            content: $("#reportText").val()
        };
        console.log(user);
        
        $.post("../profile/sendReport", { user: user }, function (result) {
            console.log(result);    
            
        });
    });
});