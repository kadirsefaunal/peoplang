<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Peoplang</title>

    
    <link rel="stylesheet" href="<?php echo base_url("public/css/font-awesome.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/mdbootstrap.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/style.css"); ?>">
   

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your invoices">
    <meta name="author" content="Phalcon Team">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div>
         <!--Navbar -->
    <nav class="mb-4 navbar sticky-top navbar-expand-lg navbar-dark indigo">
        <a class="navbar-brand" href="#">
            <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("app"); ?>">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("friend"); ?>">Friends</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("translation"); ?>">Translation Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("online"); ?>">Online</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fa fa-bell-o"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fa fa-user"></i> <?php echo $name; ?> </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item waves-effect waves-light" href="<?php echo base_url("profile"); ?>">Profile</a>
                        <a class="dropdown-item waves-effect waves-light" href="<?php echo base_url("settings"); ?>">Settings</a>
                        <a class="dropdown-item waves-effect waves-light" href="<?php echo base_url("user/logout"); ?>">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
    </div>
    
    <?php 
        if ($content == "settings/index") {
            $data["WebSites"]  = $WebSites;
            $data["AboutMe"]   = $AboutMe;
            $data["Countries"] = $Countries;
            $data["UserInfo"]  = $UserInfo;
            if ($UserInfo != null) {
                $data["States"]    = $States;
            }
            $data["speaks"]     = $speaks;
            $data["learn"]      = $learn;
            $data["avatar"]     = $avatar;
            $data["mail"]       = $mail;
            $this->load->view($content, $data);    
        } else if($content == "app/index"){
            $data["posts"] = $posts;
            $data["online4s"] = $online4s;
            $data["visitors"] = $visitors;
            $data["onlineFriends"] = $onlineFriends;
            $this->load->view($content, $data);
        } else if ($content == "profile/index") {
            $data["user"] = $user;
            $this->load->view($content, $data);
        } else if ($content == "translation/index") {
            $data["requests"] = $requests;
            $data["allRequests"] = $allRequests;
            $this->load->view($content, $data);
        } else if ($content == "errors/cli/error_404") {
            $data["heading"] = $heading;
            $data["message"] = $message;
            $this->load->view($content, $data);
        } else if ($content == "friend/index") {
            $data["friends"] = $friends;
            $this->load->view($content, $data);
        } else if ($content == "translationDetail/index") {
            $data["translationRequest"] = $translationRequest;
            $data["avatar"] = $avatar;
            $data["visitorAvatar"] = $visitorAvatar;
            $data["answers"] = $answers;
            $data["counterAnswers"] = $counterAnswers;
            $this->load->view($content, $data);
        }else if ($content == "online/index") {
            $data["online"] = $online;
            $data["Countries"] = $Countries;
            $this->load->view($content, $data);
        }
        else {
            $this->load->view($content);
        }
    ?>

    <script>
        $(document).ready(function () {
            $('.mdb-select').material_select();
            $('.datepicker').pickadate();
        });
    </script>

</body>

</html>