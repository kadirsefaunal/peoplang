<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url("public/css/font-awesome.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/mdbootstrap.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/style.css"); ?>">

    <style>
        .intro-2 {
            background: url("http://mdbootstrap.com/img/Photos/Others/forest1.jpg")no-repeat center center;
            background-size: cover;
        }

        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }

        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }

        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }

        .hm-gradient .full-bg-img {
            background: -webkit-linear-gradient(98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
            background: -webkit-gradient(linear, 98deg, from(rgba(22, 91, 231, 0.5)), to(rgba(255, 32, 32, 0.5)));
            background: linear-gradient(to 98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
        }

        .card {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .md-form .prefix {
            font-size: 1.5rem;
            margin-top: 1rem;
        }

        /*
        .md-form label {
            color: #ffffff;
        }
*/

        h6 {
            line-height: 1.7;
        }

        @media (max-width: 450px) and (max-height: 750px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 1400px;
            }
        }

        @media (min-width: 451px) and (max-width: 767px) and (max-height: 1023px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 1200px;
            }
        }

        @media (min-width: 800px) and (max-width: 1025px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 900px;
            }
        }

        @media (min-width: 1026px) and (max-height: 800px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 100%;
            }
        }
    </style>

</head>

<body>

    <!--Main Navigation-->
    <header>


        <!--Intro Section-->
        <section class="view intro-2 hm-gradient hm-indigo-slight">
            <div class="full-bg-img">
                <div class="container flex-center">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-body">
                                    <h2 class="feature-title text-center mb-1 mt-1 font-bold">
                                        <strong>PEOPLANG</strong>
                                    </h2>
                                    <hr>


                                    <!--Grid row-->
                                    <div class="row mt-5">

                                        <!--Grid column-->
                                        <div class="col-md-6 ml-lg-5 ml-md-3 features-small">

                                            <!--Grid row-->
                                            <div class="row pb-4">
                                                <div class="col-2 col-lg-1">
                                                    <i class="fa fa-bank indigo-text fa-lg"></i>
                                                </div>
                                                <div class="col-10">
                                                    <h4 class="feature-title">
                                                        <strong>Safety</strong>
                                                    </h4>
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                                                        maiores nam, aperiam minima assumenda deleniti hic.</p>
                                                </div>
                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row pb-4">
                                                <div class="col-2 col-lg-1">
                                                    <i class="fa fa-desktop deep-purple-text fa-lg"></i>
                                                </div>
                                                <div class="col-10">
                                                    <h4 class="feature-title">
                                                        <strong>Technology</strong>
                                                    </h4>
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                                                        maiores nam, aperiam minima assumenda deleniti hic.</p>
                                                </div>
                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row pb-4">
                                                <div class="col-2 col-lg-1">
                                                    <i class="fa fa-money purple-text fa-lg"></i>
                                                </div>
                                                <div class="col-10">
                                                    <h4 class="feature-title">
                                                        <strong>Finance</strong>
                                                    </h4>
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                                                        maiores nam, aperiam minima assumenda deleniti hic.</p>
                                                </div>
                                            </div>
                                            <!--Grid row-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-5">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-justified indigo">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Register</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Log in</a>
                                                </li>
                                            </ul>
                                            <!-- Tab panels -->
                                            <div class="tab-content card">
                                                <!--Panel 1-->
                                                <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                                                    <br>
                                                    <!--Register-->
                                                    <div class="md-form">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="text" id="sUpUserName" class="form-control"  required>
                                                        <label for="sUpUserName">Username</label>
                                                    </div>
                                                    <div class="md-form">
                                                        <i class="fa fa-envelope prefix"></i>
                                                        <input type="text" id="sUpEMail" class="form-control" required>
                                                        <label for="sUpEMail">Email</label>
                                                    </div>

                                                    <div class="md-form">
                                                        <i class="fa fa-lock prefix"></i>
                                                        <input type="password" id="sUpPassword" class="form-control" required>
                                                        <label for="sUpPassword">Password</label>
                                                    </div>

                                                    <div class="text-center">
                                                        <button class="btn btn-indigo btn-rounded mt-5 register">Sign up</button>
                                                    </div>
                                                </div>
                                                <!--/.Panel 1-->
                                                <!--Panel 2-->
                                                <div class="tab-pane fade" id="panel2" role="tabpanel">
                                                    <br>
                                                    <!--Login-->
                                                    <div class="md-form">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="text" id="sInUserName" class="form-control" required>
                                                        <label for="sInUserName">Username</label>
                                                    </div>
                                                    <div class="md-form">
                                                        <i class="fa fa-lock prefix"></i>
                                                        <input type="password" id="sInPassword" class="form-control" required>
                                                        <label for="sInPassword">Password</label>
                                                    </div>

                                                    <div class="text-center">
                                                        <button class="btn btn-indigo btn-rounded mt-5 login">Sign in</button>
                                                    </div>
                                                </div>
                                                <!--/.Panel 2-->
                                            </div>




                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                </div>
                            </div>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
            </div>
        </section>

    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main>

        <div class="container">



        </div>

    </main>
    <!--Main Layout-->

    <!--Footer-->
    <footer>



    </footer>
    <!--Footer-->

    <!-- SCRIPTS -->
    <script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/Landing.js"); ?>"></script>
</body>

</html>