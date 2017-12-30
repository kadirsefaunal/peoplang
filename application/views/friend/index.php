<div class="container">

<div class="row">


    <?php if ($friends == null) { ?>
        <h1>What are you waiting for? Go and make friends?</h1>
    <?php } else { 
        foreach ($friends as $friend) {
    ?>
    
    <div class="col-md-3 mt-3">
        <div class="card card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-3">
                    <a href="<?php echo base_url("u/" . $friend["userName"]); ?>">
                        <img src="<?php echo $friend["avatar"]; ?>" class="rounded-circle img-fluid z-depth-1" alt="<?php echo $friend["avatar"]; ?>"
                            height="150px" width="150px">
                    </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-3">
                        <i class="fa fa-mars" aria-hidden="true"></i>
                        <a href="<?php echo base_url("u/" . $friend["userName"]); ?>"><?php echo $friend["userName"]; ?></a>
                        <span>| <?php echo $friend["age"]; ?></span>
                        <br>
                        <img src="<?php echo $friend["flag"]; ?>" width="32" height="24">
                        <span> <?php echo $friend["location"]; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } } ?>
    
</div>

</div>
<script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>