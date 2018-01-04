<div class="container">
        <div class="row mt-3 mr-3 ml-3">
            <form>
    
                <!--Grid row-->
                <div class="row">
    
                    <!--Grid column-->
                    <div class="col-md-2">
                        <div class="md-form form-sm mt-2">
                            <input type="text" id="username" class="form-control">
                            <label for="contact-name" class="">Username</label>
                        </div>
                    </div>
                    <!--Grid column-->
    
                    <!--Grid column-->
                    <div class="col-md-3">
                        <div class="md-form form-sm">
                            <select class="mdb-select" id="country">
                                <option value="All">All Country</option>
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
                            <label for="country">Country</label>
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-2">
                        <div class="md-form form-sm">
                            <select class="mdb-select" id="gender">
                                <option value="All" selected>All</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                
                            </select>
                            <label for="gender">Gender</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="row">
                            <div class="col">
                                <div class="md-form form-sm">
                                    <select class="mdb-select" id="age1">
                                        <option value="13" selected>13</option>
                                        <?php 
                                        for($value = 14; $value < 111; $value++) {
                                            echo "<option value=".$value.">".$value."</option>";
                                        }
                                        ?>
                                    </select>
                                    <label for="age1">Age</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form form-sm p-3">to</div>
                            </div>
    
                            <div class="col">
                                <div class="md-form form-sm">
                                    <select class="mdb-select" id="age2">
                                        <option value="" disabled selected>Age</option>
                                        <?php 
                                        for($value = 13; $value < 110; $value++) {
                                            echo "<option value=".$value.">".$value."</option>";
                                        }
                                        ?>
                                        <option value="110" selected>110</option>
                                    </select>
                                    <label for="age2">Age</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-sm"  id="language">
                            <select class="mdb-select">
                                <option value="All">All Languages</option>
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
                            <label for="language">Language</label>
                        </div>
                    </div>
    
    
    
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary btn-sm float-right" id="search">
                            <i class="fa fa-search" aria-hidden="true"></i> Search</button>
                    </div>
                </div>
    
    
        </div>
        <!--Grid row-->
    
        <!--Grid row-->
    
        <div class="row" id="onlineUsers">
        <?php if ($onlines == null) { ?>
        <h1>No online users.</h1>
        <?php } else { 
            foreach ($onlines as $online) {
        ?>           
            <div class="col-md-3 mt-3">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center mt-3">
                                <a href="<?php echo base_url("u/" . $online["userName"]); ?>">
                                <img src="<?php echo $online["avatar"]; ?>" class="rounded-circle img-responsive z-depth-1" alt="Responsive image"
                                    height="150px" width="150px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center mt-3">
                                <i class="fa fa-mars" aria-hidden="true"></i>
                                <a href="<?php echo base_url("u/" . $online["userName"]); ?>"><?php echo $online["userName"]; ?></a>
                                <span>| <?php echo $online["age"]; ?></span>
                                <br>
                                <img src="<?php echo $online["flag"]; ?>" width="24" height="24">
                                <span><?php echo $online["location"]; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } ?>
            
        </div>
    </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/search.js"); ?>"></script>