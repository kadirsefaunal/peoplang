<div class="container">
        <div class="row">
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center mt-3">
                                <img src="<?php if ($user != null) { echo $user["avatar"]; } ?>" class="img-fluid rounded-circle img-responsive z-depth-1"
                                    alt="Responsive image" height="150px" width="150px">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center mt-3">
                                <label><?php if ($user != null) { echo $user["userInformation"]["name"]; } ?></label>
                                <br>
                                <?php if ($user != null && $user["userInformation"]["gender"] == "Male") { ?>
                                    <i class="fa fa-mars" aria-hidden="true"></i>
                                <?php } else { ?>
                                    <i class="fa fa-venus" aria-hidden="true"></i>
                                <?php } ?>
                                
                                <a href="#"><?php if ($user != null) { echo $user["userName"]; } ?></a>
                                <span>| <?php if ($user != null) {  
                                    $datetime1 = date_create($user["userInformation"]["birthDay"]);
                                    $datetime2 = date_create(date("Y-m-d"));
                                    $interval = date_diff($datetime1, $datetime2);
                                    echo $interval->format('%Y');
                                }
                                ?></span>
                                <br>
                                <img src="<?php if ($user != null) { echo $user["flag"]; } ?>" width="28" height="20">
                                <span><?php if ($user != null) { echo $user["userInformation"]["country"]; } ?> | </span>
                                <span><?php if ($user != null) { echo $user["userInformation"]["city"]; } ?></span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h6>Speaks</h6>
                        </div>
                        <?php if ($user != null) { 
                            foreach ($user["speaks"] as $lang) { ?>
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <span> <?php echo $lang["language"]; ?> | </span>
                                        <span> <?php echo $lang["level"]; ?></span>
                                        <!-- <img src="https://eu.ipstatic.net/images/lang_bars/4.png" class="proflLevel" width="13" height="10"> -->
                                    </div>
                                </div>
                            <?php }

                        } ?>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h6>Learning</h6>
                        </div>
                        <?php if ($user != null) { 
                            foreach ($user["learning"] as $lang) { ?>
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <span> <?php echo $lang["language"]; ?> | </span>
                                        <span> <?php echo $lang["level"]; ?></span>
                                        <!-- <img src="https://eu.ipstatic.net/images/lang_bars/4.png" class="proflLevel" width="13" height="10"> -->
                                    </div>
                                </div>
                            <?php }

                        } ?>
                        
                    </div>
                    <?php if ($user != null && $user["webSites"] != null) { ?>
                    <hr>
                    <div class="row mr-3">
                        <?php if ($user["webSites"]->facebook != null) { ?>
                        <div class="col-md-3 mt-1">
                            <div class="text-center">
                                <a href="<?php echo $user["webSites"]->facebook ?>" type="button" class="btn-floating btn-large btn-fb"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                        <?php }?>
                        <?php if ($user["webSites"]->twitter != null) { ?>
                        <div class="col-md-3 mt-1">
                            <div class="text-center">
                                <a href="<?php echo $user["webSites"]->twitter ?>" type="button" class="btn-floating btn-large btn-tw"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <?php }?>
                        <?php if ($user["webSites"]->instagram != null) { ?>
                        <div class="col-md-3 mt-1">
                            <div class="text-center">
                                <a href="<?php echo $user["webSites"]->instagram ?>" type="button" class="btn-floating btn-large btn-ins"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <?php }?>
                        <?php if ($user["webSites"]->skype != null) { ?>
                        <div class="col-md-3 mt-1">
                            <div class="text-center">
                                <a href="<?php echo $user["webSites"]->skype ?>" type="button" class="btn-floating btn-large btn-tw"><i class="fa fa-skype" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <?php } ?>
                    <hr>
                    <div class="row mr-3">
                        <div class="col-md-3 mt-1">
                            <div class="text-center">
                                <a class="btn-floating btn-lg success-color">
                                    <i class="fa fa-user-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-1">
                            <div class="text-center">
                                <a class="btn-floating btn-lg primary-color-dark">
                                    <i class="fa fa-envelope-o"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-1">
                            <div class="text-center">
                                <a class="btn-floating btn-lg amber">
                                    <i class="fa fa-ban"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mt-1">
                            <div class="text-center">
                                <a class="btn-floating btn-lg red">
                                    <i class="fa fa-exclamation-triangle"></i>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">


                    <!--###################################################################################################### -->

                    <div class="card card-body mt-3">
                        <!--Section: Products v.5-->




                        <!--Carousel Wrapper-->
                        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                            <!--Controls-->
                            <div class="controls-top">
                                <div class="row">
                                    <div class="col-md-2 align-middle">
                                        <a class="btn-floating primary-color align-middle" href="#multi-item-example" data-slide="prev">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-8">


                                        <!--Slides-->
                                        <div class="carousel-inner" role="listbox">

                                            <!--First slide-->
                                            <div class="carousel-item active">

                                                <div class="col-md-4">

                                                    <!--Card-->
                                                    <div class="card narrower">

                                                        <!--Card image-->
                                                        <div class="view overlay hm-white-slight">
                                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="img-fluid" alt="">
                                                            <a>
                                                                <div class="mask"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->



                                                    </div>
                                                    <!--Card-->

                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">

                                                    <!--Card-->
                                                    <div class="card narrower">

                                                        <!--Card image-->
                                                        <div class="view overlay hm-white-slight">
                                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="img-fluid" alt="">
                                                            <a>
                                                                <div class="mask"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->



                                                    </div>
                                                    <!--Card-->

                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">

                                                    <!--Card-->
                                                    <div class="card narrower">

                                                        <!--Card image-->
                                                        <div class="view overlay hm-white-slight">
                                                            <img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg" class="img-fluid" alt="">
                                                            <a>
                                                                <div class="mask"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->



                                                    </div>
                                                    <!--Card-->

                                                </div>

                                            </div>
                                            <!--First slide-->

                                            <!--Second slide-->
                                            <div class="carousel-item">

                                                <div class="col-md-4">

                                                    <!--Card-->
                                                    <div class="card narrower">

                                                        <!--Card image-->
                                                        <div class="view overlay hm-white-slight">
                                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="img-fluid" alt="">
                                                            <a>
                                                                <div class="mask"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->



                                                    </div>
                                                    <!--Card-->

                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">

                                                    <!--Card-->
                                                    <div class="card narrower">

                                                        <!--Card image-->
                                                        <div class="view overlay hm-white-slight">
                                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="img-fluid" alt="">
                                                            <a>
                                                                <div class="mask"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->



                                                    </div>
                                                    <!--Card-->

                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">

                                                    <!--Card-->
                                                    <div class="card narrower">

                                                        <!--Card image-->
                                                        <div class="view overlay hm-white-slight">
                                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="img-fluid" alt="">
                                                            <a>
                                                                <div class="mask"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->


                                                    </div>
                                                    <!--Card-->

                                                </div>

                                            </div>
                                            <!--Second slide-->

                                            <!--Third slide-->
                                            <div class="carousel-item">

                                                <div class="col-md-4">

                                                    <!--Card-->
                                                    <div class="card narrower">

                                                        <!--Card image-->
                                                        <div class="view overlay hm-white-slight">
                                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="img-fluid" alt="">
                                                            <a>
                                                                <div class="mask"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->



                                                    </div>
                                                    <!--Card-->

                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">

                                                    <!--Card-->
                                                    <div class="card narrower">

                                                        <!--Card image-->
                                                        <div class="view overlay hm-white-slight">
                                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="img-fluid" alt="">
                                                            <a>
                                                                <div class="mask"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->



                                                    </div>
                                                    <!--Card-->

                                                </div>

                                                <div class="col-md-4 clearfix d-none d-md-block">

                                                    <!--Card-->
                                                    <div class="card narrower">

                                                        <!--Card image-->
                                                        <div class="view overlay hm-white-slight">
                                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="img-fluid" alt="">
                                                            <a>
                                                                <div class="mask"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->



                                                    </div>
                                                    <!--Card-->

                                                </div>

                                            </div>
                                            <!--Third slide-->

                                        </div>
                                        <!--Slides-->



                                    </div>
                                    <div class="col-md-2">
                                        <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>











                            </div>
                            <!--Controls-->


                        </div>
                        <!--Carousel Wrapper-->


                        <!--Section: Products v.5-->
                    </div>
                    <!-- ################################################################################################## -->
                    
                </div>
                <?php if ($user != null && $user["friends"] != null) { ?>
                    
                    <div class="row">
                    <div class="card card-body mt-3">
                        <div class="row">
                            <?php foreach ($user["friends"] as $friend) { ?>
                                <div class="col-3">
                                    
                                    <img src="<?php echo $friend["avatar"]; ?>" width="80" height="80" alt="..." class="rounded-circle mx-auto d-block img-fluid">
                                    
                                    <div class="text-center app-username">
                                    <?php if ($friend["gender"] == "Male") { ?>
                                        <i class="fa fa-mars" aria-hidden="true"></i>
                                    <?php } else { ?>
                                        <i class="fa fa-venus" aria-hidden="true"></i>
                                    <?php } ?>
                                    <a href="#" userID="<?php echo $friend["userID"]; ?>"><?php echo $friend["userName"]; ?></a> | 
                                        <span class="app-age"> <?php echo $friend["age"]; ?></span>
                                    </div>
                                    <div class="text-center">
                                        <img src="<?php echo $friend["flag"]; ?>" width="28" height="20" />
                                        <span class="app-city"> <?php echo $friend["location"]; ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>


                <?php } ?>
                



                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified indigo mt-3">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">
                            <i class="fa fa-user"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">
                            <i class="fa fa-heart"></i> Favorites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">
                            <i class="fa fa-pencil"></i> Posts</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content card mb-3">
                    <!--Panel 1-->
                    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                        <br/>
                        <h5 class="card-title">About</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <hr>
                        <h5 class="card-title">Request</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <hr>
                        <h5 class="card-title">Language Exchange Request</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <hr>
                        <h5 class="card-title">Hobbies And Interests</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <!--/.Panel 1-->
                    <!--Panel 2-->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <br/>
                        <h5 class="card-title">Favorite Movies</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <hr>
                        <h5 class="card-title">Favorite Music</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <hr>
                        <h5 class="card-title">Favorite Tv Shows</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <hr>
                        <h5 class="card-title">Favorite Books</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <hr>
                        <h5 class="card-title">Quotes</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <!--/.Panel 2-->
                    <!--Panel 3-->
                    <div class="tab-pane fade" id="panel3" role="tabpanel">
                        <section class="row-section">
                                        
                            <div class="col-12 row-block">
                                <ul id="sortable">
                                    <li>
                                            <div class="card news-card">

                                                    <!--Heading-->
                                                    <div class="pr-3 pl-3">
                                                        <div class="content align-middle">
                                                            <div class="right-side-meta">
                                                                <a class="btn-floating btn-md red">
                                                                    <i class="fa fa-times"></i>
                                                                </a></div>
                                                            <div class="pt-4"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(17)-mini.jpg" alt="example avatar" class="rounded-circle avatar-img z-depth-1-half">Kadir Sefa Ünal</div>
                                                        </div>
                                                    </div>
                                                    <div class="pl-3 pr-3">
                                                        <div class="social-meta">
                                                            <p>Bugün çok güzel bir gün! Yalan söyledim.   </p>
                                                        </div>
                                                    </div>
                                                    <!--Card content-->
                            
                                            </div>
                                    </li>
                                    <li>
                                            <div class="card news-card">

                                                    <!--Heading-->
                                                    <div class="pr-3 pl-3">
                                                        <div class="content align-middle">
                                                            <div class="right-side-meta">
                                                                <a class="btn-floating btn-md red">
                                                                    <i class="fa fa-times"></i>
                                                                </a></div>
                                                            <div class="pt-4"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(17)-mini.jpg" alt="example avatar" class="rounded-circle avatar-img z-depth-1-half">Kadir Sefa Ünal</div>
                                                        </div>
                                                    </div>
                                                    <div class="pl-3 pr-3">
                                                        <div class="social-meta">
                                                            <p>Bugün çok güzel bir gün! Yalan söyledim.   </p>
                                                        </div>
                                                    </div>
                                                    <!--Card content-->
                            
                                            </div>
                                    </li>
                                    <li>
                                            <div class="card news-card">

                                                    <!--Heading-->
                                                    <div class="pr-3 pl-3">
                                                        <div class="content align-middle">
                                                            <div class="right-side-meta">
                                                                <a class="btn-floating btn-md red">
                                                                    <i class="fa fa-times"></i>
                                                                </a></div>
                                                            <div class="pt-4"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(17)-mini.jpg" alt="example avatar" class="rounded-circle avatar-img z-depth-1-half">Kadir Sefa Ünal</div>
                                                        </div>
                                                    </div>
                                                    <div class="pl-3 pr-3">
                                                        <div class="social-meta">
                                                            <p>Bugün çok güzel bir gün! Yalan söyledim.   </p>
                                                        </div>
                                                    </div>
                                                    <!--Card content-->
                            
                                            </div>
                                    </li>
                                </ul>
                    </div>
                    </section>
                    </div>
                    <!--/.Panel 3-->
                </div>












            </div>
        </div>
    </div>