<div class="container">
    <ul class="nav nav-tabs nav-justified mt-3">
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

<script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/settings.js"); ?>"></script>