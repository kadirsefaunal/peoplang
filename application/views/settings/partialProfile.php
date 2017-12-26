<div class="row">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-6 mt-3">
                <div class="card card-body">
                    <h4 class="card-title text-center">Profile</h4>
                    <div class="text-center">
                        <img src="<?php echo $avatar ?>" class="img-fluid rounded-circle img-responsive z-depth-1"
                            alt="Responsive image" height="250px" width="250px">
                    </div>
                    <div class="md-form form-sm mt-5">
                        <input type="text" id="profileName" class="form-control" value="<?php if ($UserInfo != null) { echo $UserInfo["name"]; } ?>">
                        <label for="profileName" class="">Name</label>
                    </div>
                    <div class="md-form form-sm">
                        <input placeholder="Selected date" type="text" id="date-picker" class="form-control datepicker" value="<?php if ($UserInfo != null) { echo $UserInfo["birthDay"]; } ?>">
                        <label for="date-picker">Birthday</label>
                    </div>
                    <div class="md-form form-sm">
                        <select class="mdb-select" id="gender">
                            <?php if ($UserInfo != null) { 
                                if ($UserInfo["gender"] == "Male") { ?>
                                    <option value="1" selected>Male</option>
                                    <option value="2">Female</option>
                                <?php } else {?>
                                        <option value="1">Male</option>
                                        <option value="2" selected>Female</option>
                                <?php } ?> 
                                
                            <?php } else { ?>
                                <option value="" disabled selected>Choose your gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            <?php } ?>
                        </select>
                        <label>Gender</label>
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
                                <input type="text" id="profileMail" class="form-control" value="<?php if ($mail != null) { echo $mail; } ?>">
                                <label for="profileMail" class="">Mail</label>
                            </div>
                            <div class="md-form form-sm">
                                <select class="mdb-select" id="countries">
                                    <option value="" disabled selected>Choose Country</option>
                                    <?php 
                                        if ($Countries != null) {
                                            foreach ($Countries as $country) {
                                                if ($UserInfo != null && $UserInfo["country"] == $country["name"]) { ?>
                                                    <option value="<?php echo $country["id"] ?>" data-icon="<?php echo base_url("public/img/flags/" . strtolower($country["sortname"]) . ".png ") ?>" selected><?php echo $country["name"] ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $country["id"] ?>" data-icon="<?php echo base_url("public/img/flags/" . strtolower($country["sortname"]) . ".png ") ?>"><?php echo $country["name"] ?></option>
                                    <?php
                                                }
                                            }
                                        }
                                    ?>
                                </select>
                                <label>Country</label>
                            </div>
                            <div class="md-form form-sm">
                                <select class="mdb-select" id="states">
                                    <?php if ($States != null) {
                                        foreach ($States as $state) { 
                                            if ($UserInfo != null && $UserInfo["city"] == $state["name"]) { ?>
                                                <option value="<?php echo $state["id"] ?>" selected><?php echo $state["name"] ?></option>
                                                <?php
                                            } else { ?>
                                                <option value="<?php echo $state["id"] ?>"><?php echo $state["name"] ?></option>    
                                    <?php
                                            }
                                            
                                        }
                                    } ?>
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
                            <option value="AA">Afar</option>
                            <option value="AB">Abkhazian</option>
                            <option value="AF">Afrikaans</option>
                            <option value="AK">Akan</option>
                            <option value="AM">Amharic</option>
                            <option value="AR">Arabic</option>
                            <option value="AS">Assamese</option>
                            <option value="AW">Awadhi</option>
                            <option value="AY">Aymara</option>
                            <option value="AZ">Azerbaijani</option>
                            <option value="B1">Bhojpuri</option>
                            <option value="B2">Maithili</option>
                            <option value="BA">Bashkir</option>
                            <option value="BE">Belarussian</option>
                            <option value="BG">Bulgarian</option>
                            <option value="BH">Bihari</option>
                            <option value="BI">Bislama</option>
                            <option value="BL">Balochi</option>
                            <option value="BN">Bengali</option>
                            <option value="BO">Tibetan</option>
                            <option value="BR">Breton</option>
                            <option value="CA">Catalan</option>
                            <option value="CB">Cebuano</option>
                            <option value="CE">Chechen</option>
                            <option value="CO">Corsican</option>
                            <option value="CS">Czech</option>
                            <option value="CY">Welsh</option>
                            <option value="DA">Danish</option>
                            <option value="DE">German</option>
                            <option value="DK">Dakhini</option>
                            <option value="DZ">Bhutani</option>
                            <option value="EL">Greek</option>
                            <option value="EN">English</option>
                            <option value="EO">Esperanto</option>
                            <option value="ES">Spanish</option>
                            <option value="ET">Estonian</option>
                            <option value="EU">Basque</option>
                            <option value="FA">Persian</option>
                            <option value="FI">Finnish</option>
                            <option value="FJ">Fiji</option>
                            <option value="FO">Faeroese</option>
                            <option value="FR">French</option>
                            <option value="FY">Frisian</option>
                            <option value="GA">Irish</option>
                            <option value="GD">Scottish Gaelic</option>
                            <option value="GL">Galician</option>
                            <option value="GN">Guarani</option>
                            <option value="GU">Gujarati</option>
                            <option value="HA">Hausa</option>
                            <option value="HI">Hindi</option>
                            <option value="HR">Croatian</option>
                            <option value="HT">Haitian Creole</option>
                            <option value="HU">Hungarian</option>
                            <option value="HY">Armenian</option>
                            <option value="IA">Interlingua</option>
                            <option value="IE">Interlingue</option>
                            <option value="IK">Inupiak</option>
                            <option value="IN">Indonesian</option>
                            <option value="IS">Icelandic</option>
                            <option value="IT">Italian</option>
                            <option value="IW">Hebrew</option>
                            <option value="JA">Japanese</option>
                            <option value="JI">Yiddish</option>
                            <option value="JW">Javanese</option>
                            <option value="KA">Georgian</option>
                            <option value="KB">Kabyle</option>
                            <option value="KI">Konkani</option>
                            <option value="KK">Kazakh</option>
                            <option value="KL">Greenlandic</option>
                            <option value="KM">Khmer</option>
                            <option value="KN">Kannada</option>
                            <option value="KO">Korean</option>
                            <option value="KS">Kashmiri</option>
                            <option value="KU">Kurdish</option>
                            <option value="KY">Kirghiz</option>
                            <option value="LA">Latin</option>
                            <option value="LB">Luxembourgish</option>
                            <option value="LM">Lombard</option>
                            <option value="LN">Lingala</option>
                            <option value="LO">Laothian</option>
                            <option value="LT">Lithuanian</option>
                            <option value="LV">Latvian</option>
                            <option value="MG">Malagasy</option>
                            <option value="MI">Maori</option>
                            <option value="MK">Macedonian</option>
                            <option value="ML">Malayalam</option>
                            <option value="MN">Mongolian</option>
                            <option value="MO">Moldavian</option>
                            <option value="MR">Marathi</option>
                            <option value="MS">Malay</option>
                            <option value="MT">Maltese</option>
                            <option value="MU">Makhuwa</option>
                            <option value="MW">Marwari</option>
                            <option value="MY">Burmese</option>
                            <option value="NA">Nauru</option>
                            <option value="NE">Nepali</option>
                            <option value="NL">Dutch</option>
                            <option value="NO">Norwegian</option>
                            <option value="OC">Occitan</option>
                            <option value="OM">Oromo</option>
                            <option value="OR">Oriya</option>
                            <option value="PA">Punjabi</option>
                            <option value="PL">Polish</option>
                            <option value="PS">Pashto</option>
                            <option value="PT">Portuguese</option>
                            <option value="QU">Quechua</option>
                            <option value="RI">Rifian</option>
                            <option value="RM">Rhaeto-Romance</option>
                            <option value="RN">Kirundi</option>
                            <option value="RO">Romanian</option>
                            <option value="RU">Russian</option>
                            <option value="RW">Kinyarwanda</option>
                            <option value="SA">Sanskrit</option>
                            <option value="SD">Sindhi</option>
                            <option value="SG">Sangro</option>
                            <option value="SH">Serbo-Croatian</option>
                            <option value="SI">Sinhalese</option>
                            <option value="SK">Slovak</option>
                            <option value="SL">Slovenian</option>
                            <option value="SM">Samoan</option>
                            <option value="SN">Shona</option>
                            <option value="SO">Somali</option>
                            <option value="SQ">Albanian</option>
                            <option value="SR">Serbian</option>
                            <option value="SS">Siswati</option>
                            <option value="ST">Sesotho</option>
                            <option value="SU">Sundanese</option>
                            <option value="SV">Swedish</option>
                            <option value="SW">Swahili</option>
                            <option value="TA">Tamil</option>
                            <option value="TE">Telugu</option>
                            <option value="TG">Tajik</option>
                            <option value="TH">Thai</option>
                            <option value="TI">Tigrinya</option>
                            <option value="TK">Turkmen</option>
                            <option value="TL">Tagalog</option>
                            <option value="TM">Tuareg</option>
                            <option value="TN">Setswana</option>
                            <option value="TO">Tonga</option>
                            <option value="TR">Turkish</option>
                            <option value="TS">Tsonga</option>
                            <option value="TT">Tatar</option>
                            <option value="TW">Twi</option>
                            <option value="TZ">Tamazight</option>
                            <option value="UG">Uyghur</option>
                            <option value="UK">Ukrainian</option>
                            <option value="UR">Urdu</option>
                            <option value="UZ">Uzbek</option>
                            <option value="VI">Vietnamese</option>
                            <option value="VO">Volapuk</option>
                            <option value="WO">Wolof</option>
                            <option value="XH">Xhosa</option>
                            <option value="YO">Yoruba</option>
                            <option value="ZH">Chinese</option>
                            <option value="ZU">Zulu</option>
                        </select>
                        <label>Language</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="md-form form-sm">
                        <select class="mdb-select" id="langSpeakLevel">
                            <option value="" disabled selected>Choose Level</option>
                            <option value="5">Native Speaker</option>
                            <option value="4">Fluent</option>
                            <option value="3">Advanced</option>
                            <option value="2">Upper Intermediate</option>
                            <option value="1">Intermediate</option>
                            <option value="0">Beginner/Elementary</option>
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
                            <option value="AA">Afar</option>
                            <option value="AB">Abkhazian</option>
                            <option value="AF">Afrikaans</option>
                            <option value="AK">Akan</option>
                            <option value="AM">Amharic</option>
                            <option value="AR">Arabic</option>
                            <option value="AS">Assamese</option>
                            <option value="AW">Awadhi</option>
                            <option value="AY">Aymara</option>
                            <option value="AZ">Azerbaijani</option>
                            <option value="B1">Bhojpuri</option>
                            <option value="B2">Maithili</option>
                            <option value="BA">Bashkir</option>
                            <option value="BE">Belarussian</option>
                            <option value="BG">Bulgarian</option>
                            <option value="BH">Bihari</option>
                            <option value="BI">Bislama</option>
                            <option value="BL">Balochi</option>
                            <option value="BN">Bengali</option>
                            <option value="BO">Tibetan</option>
                            <option value="BR">Breton</option>
                            <option value="CA">Catalan</option>
                            <option value="CB">Cebuano</option>
                            <option value="CE">Chechen</option>
                            <option value="CO">Corsican</option>
                            <option value="CS">Czech</option>
                            <option value="CY">Welsh</option>
                            <option value="DA">Danish</option>
                            <option value="DE">German</option>
                            <option value="DK">Dakhini</option>
                            <option value="DZ">Bhutani</option>
                            <option value="EL">Greek</option>
                            <option value="EN">English</option>
                            <option value="EO">Esperanto</option>
                            <option value="ES">Spanish</option>
                            <option value="ET">Estonian</option>
                            <option value="EU">Basque</option>
                            <option value="FA">Persian</option>
                            <option value="FI">Finnish</option>
                            <option value="FJ">Fiji</option>
                            <option value="FO">Faeroese</option>
                            <option value="FR">French</option>
                            <option value="FY">Frisian</option>
                            <option value="GA">Irish</option>
                            <option value="GD">Scottish Gaelic</option>
                            <option value="GL">Galician</option>
                            <option value="GN">Guarani</option>
                            <option value="GU">Gujarati</option>
                            <option value="HA">Hausa</option>
                            <option value="HI">Hindi</option>
                            <option value="HR">Croatian</option>
                            <option value="HT">Haitian Creole</option>
                            <option value="HU">Hungarian</option>
                            <option value="HY">Armenian</option>
                            <option value="IA">Interlingua</option>
                            <option value="IE">Interlingue</option>
                            <option value="IK">Inupiak</option>
                            <option value="IN">Indonesian</option>
                            <option value="IS">Icelandic</option>
                            <option value="IT">Italian</option>
                            <option value="IW">Hebrew</option>
                            <option value="JA">Japanese</option>
                            <option value="JI">Yiddish</option>
                            <option value="JW">Javanese</option>
                            <option value="KA">Georgian</option>
                            <option value="KB">Kabyle</option>
                            <option value="KI">Konkani</option>
                            <option value="KK">Kazakh</option>
                            <option value="KL">Greenlandic</option>
                            <option value="KM">Khmer</option>
                            <option value="KN">Kannada</option>
                            <option value="KO">Korean</option>
                            <option value="KS">Kashmiri</option>
                            <option value="KU">Kurdish</option>
                            <option value="KY">Kirghiz</option>
                            <option value="LA">Latin</option>
                            <option value="LB">Luxembourgish</option>
                            <option value="LM">Lombard</option>
                            <option value="LN">Lingala</option>
                            <option value="LO">Laothian</option>
                            <option value="LT">Lithuanian</option>
                            <option value="LV">Latvian</option>
                            <option value="MG">Malagasy</option>
                            <option value="MI">Maori</option>
                            <option value="MK">Macedonian</option>
                            <option value="ML">Malayalam</option>
                            <option value="MN">Mongolian</option>
                            <option value="MO">Moldavian</option>
                            <option value="MR">Marathi</option>
                            <option value="MS">Malay</option>
                            <option value="MT">Maltese</option>
                            <option value="MU">Makhuwa</option>
                            <option value="MW">Marwari</option>
                            <option value="MY">Burmese</option>
                            <option value="NA">Nauru</option>
                            <option value="NE">Nepali</option>
                            <option value="NL">Dutch</option>
                            <option value="NO">Norwegian</option>
                            <option value="OC">Occitan</option>
                            <option value="OM">Oromo</option>
                            <option value="OR">Oriya</option>
                            <option value="PA">Punjabi</option>
                            <option value="PL">Polish</option>
                            <option value="PS">Pashto</option>
                            <option value="PT">Portuguese</option>
                            <option value="QU">Quechua</option>
                            <option value="RI">Rifian</option>
                            <option value="RM">Rhaeto-Romance</option>
                            <option value="RN">Kirundi</option>
                            <option value="RO">Romanian</option>
                            <option value="RU">Russian</option>
                            <option value="RW">Kinyarwanda</option>
                            <option value="SA">Sanskrit</option>
                            <option value="SD">Sindhi</option>
                            <option value="SG">Sangro</option>
                            <option value="SH">Serbo-Croatian</option>
                            <option value="SI">Sinhalese</option>
                            <option value="SK">Slovak</option>
                            <option value="SL">Slovenian</option>
                            <option value="SM">Samoan</option>
                            <option value="SN">Shona</option>
                            <option value="SO">Somali</option>
                            <option value="SQ">Albanian</option>
                            <option value="SR">Serbian</option>
                            <option value="SS">Siswati</option>
                            <option value="ST">Sesotho</option>
                            <option value="SU">Sundanese</option>
                            <option value="SV">Swedish</option>
                            <option value="SW">Swahili</option>
                            <option value="TA">Tamil</option>
                            <option value="TE">Telugu</option>
                            <option value="TG">Tajik</option>
                            <option value="TH">Thai</option>
                            <option value="TI">Tigrinya</option>
                            <option value="TK">Turkmen</option>
                            <option value="TL">Tagalog</option>
                            <option value="TM">Tuareg</option>
                            <option value="TN">Setswana</option>
                            <option value="TO">Tonga</option>
                            <option value="TR">Turkish</option>
                            <option value="TS">Tsonga</option>
                            <option value="TT">Tatar</option>
                            <option value="TW">Twi</option>
                            <option value="TZ">Tamazight</option>
                            <option value="UG">Uyghur</option>
                            <option value="UK">Ukrainian</option>
                            <option value="UR">Urdu</option>
                            <option value="UZ">Uzbek</option>
                            <option value="VI">Vietnamese</option>
                            <option value="VO">Volapuk</option>
                            <option value="WO">Wolof</option>
                            <option value="XH">Xhosa</option>
                            <option value="YO">Yoruba</option>
                            <option value="ZH">Chinese</option>
                            <option value="ZU">Zulu</option>
                        </select>
                        <label>Language</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="md-form form-sm">
                        <select class="mdb-select" id="langLearnLevel">
                            <option value="" disabled selected>Choose Level</option>
                            <option value="0">Beginner/Elementary</option>
                            <option value="1">Intermediate</option>
                            <option value="2">Upper Intermediate</option>
                            <option value="3">Advanced</option>
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
        <button type="button" class="btn btn-primary float-right" id="saveProfile">Save</button>
    </div>
</div>