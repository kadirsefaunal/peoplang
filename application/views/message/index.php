<h1>message index</h1>
<input type="hidden" id="cookie" value="<?php echo get_cookie("User"); ?>" >
<input type="hidden" id="rID" value="<?php echo $receiver; ?>" >
<div class="md-form">
    <textarea type="text" id="message" class="md-textarea"></textarea>
    <label for="message">Basic textarea</label>
</div>

<button id="send">Send</button>



<script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
<script src="<?php echo base_url('node_modules/socket.io-client/dist/socket.io.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/message.js"); ?>"></script>

