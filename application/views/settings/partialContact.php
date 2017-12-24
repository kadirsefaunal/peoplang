<div class="row mt-3">
    <div class="col-md-6">
        <div class="md-form">
            <i class="fa fa-facebook prefix" aria-hidden="true"></i>
            <input type="text" id="facebook" class="form-control" value="<?php if ($WebSites != null) { echo $WebSites->facebook; } ?>">
            <label for="facebook">Facebook</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="md-form">
            <i class="fa fa-twitter prefix" aria-hidden="true"></i>
            <input type="text" id="twitter" class="form-control" value="<?php if ($WebSites != null) { echo $WebSites->twitter; } ?>">
            <label for="twitter">Twitter</label>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="md-form">
            <i class="fa fa-instagram prefix" aria-hidden="true"></i>
            <input type="text" id="instagram" class="form-control" value="<?php if ($WebSites != null) { echo $WebSites->instagram; } ?>">
            <label for="instagram">Instagram</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="md-form">
            <i class="fa fa-skype prefix" aria-hidden="true"></i>
            <input type="text" id="skype" class="form-control" value="<?php if ($WebSites != null) { echo $WebSites->skype; } ?>">
            <label for="skype">Skype</label>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="md-form">
            <i class="fa fa-at prefix" aria-hidden="true"></i>
            <textarea type="text" id="webSites" class="md-textarea" rows="2"><?php if ($WebSites != null) { echo $WebSites->other; } ?></textarea>
            <label for="webSites">Other Web Sites</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <button type="button" class="btn btn-primary float-right saveContact">Save</button>
    </div>
</div>