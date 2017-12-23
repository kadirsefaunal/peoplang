
<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
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

    <div class="tab-content">
        <div class="tab-pane active" id="profile" role="tabpanel">
            <?php $this->load->view('settings/partialProfile'); ?>
        </div>

        <div class="tab-pane" id="about" role="tabpanel">
            <?php $this->load->view('settings/partialAbout'); ?>
        </div>

        <div class="tab-pane" id="contact" role="tabpanel">
            <?php $this->load->view('settings/partialContact', $WebSites); ?>
        </div>

    </div>

</div>




