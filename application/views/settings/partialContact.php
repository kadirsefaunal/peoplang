<div class="form-row justify-content-center">
    <div class="form-group row col-md-12">
        <label for="mail" class="col-md-3 align-self-center ">Mail</label>
        <div class="input-group col-md-9">
            <div class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
            <input type="email" class="form-control" id="mail">
        </div>
    </div>
    <div class="form-group row col-md-12">
        <label for="facebook" class="col-md-3 align-self-center ">Facebook</label>
        <div class="input-group col-md-9">
            <div class="input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
            <input type="text" class="form-control" id="facebook" value="<?php if ($WebSites != null) { echo $WebSites->facebook; } ?>">
        </div>
    </div>
    <div class="form-group row col-md-12">
        <label for="twitter" class="col-md-3 align-self-center ">Twitter</label>
        <div class="input-group col-md-9">
            <div class="input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
            <input type="text" class="form-control" id="twitter" value="<?php if ($WebSites != null) { echo $WebSites->twitter; } ?>">
        </div>
    </div>
    <div class="form-group row col-md-12">
        <label for="instagram" class="col-md-3 align-self-center ">Instagram</label>
        <div class="input-group col-md-9">
            <div class="input-group-addon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
            <input type="text" class="form-control" id="instagram" value="<?php if ($WebSites != null) { echo $WebSites->instagram; } ?>">
        </div>
    </div>
    <div class="form-group row col-md-12">
        <label for="skype" class="col-md-3 align-self-center ">Skype</label>
        <div class="input-group col-md-9">
            <div class="input-group-addon"><i class="fa fa-skype" aria-hidden="true"></i></div>
            <input type="text" class="form-control" id="skype" value="<?php if ($WebSites != null) { echo $WebSites->skype; } ?>">
        </div>
    </div>
    <div class="form-group row col-md-12">
        <label for="webSites" class="col-md-3 align-self-center ">Other Web Sites</label>
        <div class="input-group col-md-9">
            <div class="input-group-addon"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></div>
            <textarea class="form-control" id="webSites" rows="2"><?php if ($WebSites != null) { echo $WebSites->other; } ?></textarea>
        </div>
    </div>
    <div class="form-group row col-md-4">
        <button class="saveContact">Save</button>
    </div>
</div>
