<div class="container">
    <ul class="nav nav-tabs nav-justified mt-3 red lighten-1">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#about" role="tab">About Me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#contact" role="tab">Contact</a>
        </li>
    </ul>



    <div class="tab-content card">

        <div class="tab-pane fade in show active" id="profile" role="tabpanel">
            <?php $this->load->view('settings/partialProfile'); ?>
        </div>

        <div class="tab-pane fade" id="about" role="tabpanel">
            <?php $this->load->view('settings/partialAbout', $AboutMe); ?>
        </div>

        <div class="tab-pane fade" id="contact" role="tabpanel">
            <?php $this->load->view('settings/partialContact', $WebSites); ?>
        </div>

    </div>

</div>

<div class="modal fade " id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Photograph</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="imageList">
                    <?php if ($Images != null) {
                        foreach ($Images as $Image) { ?>
                            <div class="col-md-4 mt-3">
                                <div class="view overlay hm-white-slight">
                                    <img src="<?php echo $Image["url"]; ?>" alt="<?php echo $Image["url"]; ?>" width="200" height="200">
                                    <a data-toggle="modal" data-target="#modalmodalmodal" imageID="<?php echo $Image["imageID"]; ?>"> 
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>
                        <?php }
                    } ?>

                    <?php if (count($Images) < 9) { ?>
                        <div class="col-md-4 mt-3">
                            <label class="custom-file-upload">
                                <input type="file" id="imageInput" name="imageInput" />
                                <a type="file"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </label>
                        </div>    
                    <?php } ?>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalmodalmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Options</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <button id="deleteImage" type="button" class="btn btn-secondary" data-dismiss="modal">Delete</button>
                <button id="setAvatar" type="button" class="btn btn-primary" data-dismiss="modal">Set Avatar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/settings.js"); ?>"></script>