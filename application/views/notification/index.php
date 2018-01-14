<div class="container">
    <ul class="list-group">
        <?php foreach ($notifications as $n) { ?>
            <li class="list-group-item">
                <div class="news">
                        <!--Brief-->
                        <div class="brief">
                            <img src="<?php echo $n["avatar"]; ?>" class="rounded-circle z-depth-1-half" width="50" height="50">
                            <a href="<?php echo base_url("u/".$n["userName"]); ?>" class="name"> <?php echo $n["name"]; ?></a>
                            <?php echo $n["notification"]; ?>
                            <?php if ($n["notification"] == " sent a friend request.") { ?>
                                <div class="float-right">
                                    <button class="btn btn-success" uID="<?php echo $n["userID"]; ?>" id="acceptFriendReq">Accept</button>
                                    <button class="btn btn-danger" uID="<?php echo $n["userID"]; ?>" id="rejectFriendReq">Reject</button>
                                </div>
                            <?php } ?>

                        </div>
                </div>
            </li>
        <?php } ?>
    </ul>

</div>



    <script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/app.js"); ?>"></script>