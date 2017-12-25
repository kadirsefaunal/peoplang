<div class="row">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-6 mt-3">
                <div class="card card-body">
                    <h4 class="card-title text-center">Profile</h4>
                    <div class="text-center">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="img-fluid rounded-circle img-responsive z-depth-1"
                            alt="Responsive image" height="250px" width="250px">
                    </div>
                    <div class="md-form form-sm mt-5">
                        <input type="text" id="form1" class="form-control">
                        <label for="form1" class="">Example label</label>
                    </div>
                    <div class="md-form form-sm">
                        <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker">
                        <label for="date-picker-example">Birthday</label>
                    </div>
                    <div class="md-form form-sm">
                        <select class="mdb-select">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Example label</label>
                    </div>


                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <h4 class="card-title">Change Password</h4>
                            <div class="md-form form-sm mt-3">
                                <input type="password" id="oldPassword" class="form-control">
                                <label for="oldPassword" class="">Old Password</label>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="md-form form-sm">
                                        <input type="password" id="newPassword" class="form-control">
                                        <label for="newPassword" class="">New Password</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="md-form form-sm">
                                        <input type="password" id="newPasswordConfirm" class="form-control">
                                        <label for="newPasswordConfirm" class="">Confirm New Password</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn-floating float-right changePwd">
                                        <i class="fa fa-save" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-body mt-3">
                            <h4 class="card-title">Mail & Location</h4>
                            <div class="md-form form-sm mt-3">
                                <input type="text" id="form3" class="form-control">
                                <label for="form3" class="">Example label</label>
                            </div>
                            <div class="md-form form-sm">
                                <select class="mdb-select" id="countries">
                                    <option value="" disabled selected>Choose Country</option>
                                    <?php 
                                        if ($Countries != null) {
                                            foreach ($Countries as $country) {
                                            ?>
                                                <option value="<?php echo $country["id"] ?>" data-icon="<?php echo base_url("public/img/flags/" . strtolower($country["sortname"]) . ".png") ?>"> <?php echo $country["name"] ?></option>
                                            <?php
                                            }
                                        }
                                    ?>
                                </select>
                                <label>Country</label>
                            </div>
                            <div class="md-form form-sm">
                                <select class="mdb-select" id="states">
                                    <option value="" disabled selected>Choose State</option>
                                </select>
                                <label>States</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6 mb-3">
        <div class="card card-body">
            <h4 class="card-title">Languages you can speak</h4>
            <div class="row mt-3">
                <div class="col-md-5">
                    <div class="md-form form-sm">
                        <select class="mdb-select" id="langSpeak">
                            <option value="" disabled selected>Choose Language</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Language</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="md-form form-sm">
                        <select class="mdb-select" id="langSpeakLevel">
                            <option value="" disabled selected>Choose Level</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Level</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn-floating float-right btn-sm addLangSpeaks">
                        <i class="fa fa-save" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="languagesSpeaks">

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-body">
            <h4 class="card-title">Languages you want to learn</h4>
            <div class="row mt-3">
                <div class="col-md-5">
                    <div class="md-form form-sm">
                        <select class="mdb-select" id="langLearn">
                            <option value="" disabled selected>Choose Language</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Language</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="md-form form-sm">
                        <select class="mdb-select" id="langLearnLevel">
                            <option value="" disabled selected>Choose Level</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Level</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn-floating float-right btn-sm addLangLearn">
                        <i class="fa fa-save" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="languagesLearn">

            </div>
        </div>
    </div>
</div>
<!--/.Panel 1-->
<div class="row mt-3">
    <div class="col-md-12">
        <button type="button" class="btn btn-primary float-right">Primary</button>
    </div>
</div>

