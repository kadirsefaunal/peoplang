<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Peoplang</title>

    <link rel="stylesheet" href="<?php echo base_url("public/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/app.css"); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your invoices">
    <meta name="author" content="Phalcon Team">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Friends</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Translation Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Online</a>
                    </li>
                </ul>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item" id="navbarNavDropdown">
                            <a class="nav-link" href="#">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-bell-o" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="http://mfbyazilim.com/wp-content/uploads/avatar-2.png" width="25" height="25" alt="..." class="rounded-circle mx-auto d-block float-left"> kadir
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a href="settings" class="dropdown-item">Settings</a>
                                <a href="user/logout" class="dropdown-item">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        

    </div>
    
    <?php 
        if ($content == "settings/index") {
            $data["WebSites"] = $WebSites;
            $this->load->view($content, $data);    
        } else {
            $this->load->view($content);
        }
    ?>

    
    <script type="text/javascript" src="<?php echo base_url("public/js/jquery.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/popper.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/app.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/settings.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/bootstrap.min.js"); ?>"></script>

</body>

</html>