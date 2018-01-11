
<input type="hidden" id="cookie" value="<?php echo get_cookie("User"); ?>" >
<?php if ($receiver != null) { ?>
    <input type="hidden" id="rID" value="<?php echo $receiver; ?>" >
<?php } ?>


<div class="container">
    <?php if ($receiver == null) { ?>
        <div class="card card-body">
            <div class="row align-middle">
                <?php if ($receivers != null) { ?>
                    <table class="table table-sm table-striped">
                        <tbody>
                            <?php foreach ($receivers as $r) { ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo $r["avatar"]; ?>" class="rounded-circle avatar-img z-depth-1-half" width="40" height="40" />
                                        <a href="<?php echo base_url("u/".$r["userName"]); ?>"><?php echo $r["name"]; ?></a>
                                        <?php if ($r["readStatus"] == "f" ) { ?>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <?php } else { ?>
                                            <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                        <?php } ?>
                                    </td>
                                    
                                    <td><a id="seeUserMessage2" href="#" userID="<?php echo $r["userID"]; ?>"><?php echo $r["message"]; ?></a></td>
                                    
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="card card-body">
            <div class="panel-body forScroll">
                <div class="row" style="min-height:550px; max-height:550px; ">
                    <div class="col-md-3" style="overflow-y:auto; overflow-x:hidden;">
                        <?php foreach ($receivers as $r) { ?>
                            <div class="row">
                                <a id="seeUserMessage" href="#" userID="<?php echo $r["userID"]; ?>" class="name" style="width:100%;">
                                    <?php if ($r["userID"] == $receiver) { ?>
                                        <div class="chip chip-lg activeUser">
                                    <?php } else {?>
                                        <div class="chip chip-lg">
                                    <?php } ?>
                                        <img src="<?php echo $r["avatar"]; ?>" alt="Contact Person"> <?php echo $r["name"]; ?> <span id="readStatus" uID="<?php echo $r["userID"]; ?>"></span>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-primary">
                            <div id="myScroll" class="mt-1 mb-1" style="overflow-y:auto; min-height:480px; max-height:480px;">
                                <ul class="chat">
                                    <?php if ($messages != null) { ?>
                                    <?php foreach ($messages as $m) { ?>
                                        <li class="left clearfix"><span class="chat-img pull-left">
                                            <img src="<?php echo $m["avatar"]; ?>" alt="User Avatar" class="rounded-circle" width="50px" height="50px" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <p><?php echo $m["message"]; ?></p>
                                            </div>
                                        </li>
                                    <?php } ?>
                                    <?php } ?>
                                    
                                </ul>

                            </div>
                            <div class="panel-footer">
                                <div class="input-group">
                                    <input id="message" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                    <span class="input-group-btn">
                                        <button class="btn btn-warning btn-sm" id="send">Send</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>



<script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
<script src="<?php echo base_url('node_modules/socket.io-client/dist/socket.io.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/message.js"); ?>"></script>

