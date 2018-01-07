
<input type="hidden" id="cookie" value="<?php echo get_cookie("User"); ?>" >
<input type="hidden" id="rID" value="<?php echo $receiver; ?>" >


<div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($receivers as $r) { ?>
                            <?php if ($r["userID"] == $receiver) { ?>
                                <div class="mdb-feed activeUser">
                            <?php } else {?>
                                <div class="mdb-feed">
                            <?php } ?>
                                <div class="news">
                                        <!--Label-->
                                    <div class="label">
                                        <img src="<?php echo $r["avatar"]; ?>" class="rounded-circle z-depth-1-half">
                                    </div>
        
                                    <!--Excert-->
                                    <div class="excerpt">
        
                                        <!--Brief-->
                                        <div class="brief">
                                            <a href="<?php echo base_url("message/".$r["userID"]); ?>" class="name"><?php echo $r["name"]; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <?php } ?>    

                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="panel panel-primary">
                    <div class="panel-body forScroll">
                        <ul class="chat">
                            <?php foreach ($messages as $m) { ?>
                                <li class="left clearfix"><span class="chat-img pull-left">
                                    <img src="<?php echo $m["avatar"]; ?>" alt="User Avatar" class="rounded-circle" width="50px" height="50px" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <p><?php echo $m["message"]; ?></p>
                                    </div>
                                </li>
                             <?php } ?>
                        </ul>
                    </div>
                    <?php if ($status == true) { ?>
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="message" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                            <span class="input-group-btn">
                                <button class="btn btn-warning btn-sm" id="send">
                                    Send</button>
                            </span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
<script src="<?php echo base_url('node_modules/socket.io-client/dist/socket.io.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/message.js"); ?>"></script>

