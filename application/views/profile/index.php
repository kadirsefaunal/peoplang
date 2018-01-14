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
                                <div class="col-md-12">
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
                                <div class="col-md-12">
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
                    <?php if ($user != null && ($user["userID"] != get_cookie("User"))) {?>
                        <hr>
                        <div class="row mr-3">
                            <?php if ($friendStatus == false) { ?>
                                <div class="col-md-3 mt-1">
                                    <div class="text-center">
                                        <a id="addFriend" class="btn-floating btn-lg success-color" userID="<?php echo $user["userID"]; ?>">
                                            <i class="fa fa-user-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="col-md-3 mt-1">
                                    <div class="text-center">
                                        <a id="deleteFriend" class="btn-floating btn-lg grey" userID="<?php echo $user["userID"]; ?>">
                                            <i class="fa fa-user-times"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            
                            <div class="col-md-3 mt-1">
                                <div class="text-center">
                                    <a class="btn-floating btn-lg primary-color-dark" href="<?php echo base_url("message/".$user["userID"]); ?>">
                                        <i class="fa fa-envelope-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 mt-1">
                                <div class="text-center">
                                    <a class="btn-floating btn-lg red" data-toggle="modal" data-target="#block">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 mt-1">
                                <div class="text-center">
                                    <a class="btn-floating btn-lg amber" data-toggle="modal" data-target="#report">
                                        <i class="fa fa-exclamation-triangle"></i>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    <?php } ?>
                    
                </div>
            </div>
            <div class="col-md-8">
                <?php if ($user != null && $user["images"] != null) { ?>
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

                                    <div id="mdb-lightbox-ui"></div>
                                    
                                        <!--Slides-->
                                        <div class="carousel-inner" role="listbox">

                                            <?php 
                                                $count = count($user["images"]);
                                                $counter = 0;

                                                foreach ($user["images"] as $image) {
                                                    if ($counter == 0) { ?>
                                                        <div class="carousel-item active">
                                                    <?php } if ($counter == 3 || $counter == 6) { ?>
                                                        <div class="carousel-item">
                                                    <?php } ?> 
                                                    
                                                    <?php if ($counter == 0 || $counter == 3 || $counter == 6) { ?>
                                                    <div class="col-md-4">
                                                    <?php } else { ?>
                                                    <div class="col-md-4 clearfix d-none d-md-block">
                                                    <?php } ?>
                                                        <!--Card-->
                                                        <div class="card narrower">
                                                            <!--Card image-->
                                                            <div class="view overlay hm-white-slight">
                                                                <img src="<?php echo $image["url"]; ?>" class="img-fluid" alt="" >
                                                                <a id="show" imgUrl="<?php echo $image["url"]; ?>" data-toggle="modal" data-target="#image"><div class="mask"></div></a>
                                                            </div>
                                                            <!--Card image-->
                                                        </div>
                                                        <!--Card-->
                                                    </div>
                                                    <?php
                                                    if ($counter == ($count - 1)) {?>
                                                        </div>
                                                    <?php break; }
                                                    
                                                    ?>
                                                    <?php if ($counter == 2 || $counter == 5 || $counter == 8) { ?>
                                                        </div>
                                                    <?php } 

                                                    $counter++;  
                                                    
                                                }
                                                
                                            ?>

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
                <?php } ?>            

                <?php if ($user != null && $user["friends"] != null) { ?>
                    
                    <div class="row">
                    <div class="card card-body mt-3">
                        <div class="row">
                            <?php foreach ($user["friends"] as $friend) { ?>
                                <div class="col-3">
                                    <a href="<?php echo base_url("u/" . $friend["userName"]); ?>">
                                        <img src="<?php echo $friend["avatar"]; ?>" width="80" height="80" alt="..." class="rounded-circle mx-auto d-block img-fluid">
                                    </a>
                                    <div class="text-center app-username">
                                    <?php if ($friend["gender"] == "Male") { ?>
                                        <i class="fa fa-mars" aria-hidden="true"></i>
                                    <?php } else { ?>
                                        <i class="fa fa-venus" aria-hidden="true"></i>
                                    <?php } ?>
                                    <a href="<?php echo base_url("u/" . $friend["userName"]); ?>" userID="<?php echo $friend["userID"]; ?>"><?php echo $friend["userName"]; ?></a> | 
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
                <ul class="nav nav-tabs nav-justified red lighten-1 mt-3">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#about" role="tab">
                            <i class="fa fa-user"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#favorites" role="tab">
                            <i class="fa fa-heart"></i> Favorites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#posts" role="tab">
                            <i class="fa fa-pencil"></i> Posts</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content card mb-3">
                    <!--Panel 1-->
                    <div class="tab-pane fade in show active" id="about" role="tabpanel">
                        <?php if ($user != null && $user["aboutme"] == null) { ?>
                            <h3>There is nothing see in here!</h3>
                        <?php } else { 
                            if ($user["aboutme"]->aboutMe != null) { ?>
                                <br/>
                                <h5 class="card-title">About</h5>
                                <p class="card-text"><?php echo $user["aboutme"]->aboutMe; ?></p>
                            <?php } if ($user["aboutme"]->requests != null) { ?>
                                <hr>
                                <h5 class="card-title">Request</h5>
                                <p class="card-text"><?php echo $user["aboutme"]->requests; ?></p>
                            <?php } if ($user["aboutme"]->languageExcRequests != null) { ?>
                                <hr>
                                <h5 class="card-title">Language Exchange Request</h5>
                                <p class="card-text"><?php echo $user["aboutme"]->languageExcRequests; ?></p>
                            <?php } if ($user["aboutme"]->hobbiesInterests != null) { ?>
                                <hr>
                                <h5 class="card-title">Hobbies And Interests</h5>
                                <p class="card-text"><?php echo $user["aboutme"]->hobbiesInterests; ?></p>
                            <?php } ?>
                        
                        <?php } if ($user["webSites"] != null && $user["webSites"]->other != null) { ?>
                            <hr>
                            <h5 class="card-title">Other Websites</h5>
                            <p class="card-text"><?php echo $user["webSites"]->other ?></p>
                        <?php } ?>
                    </div>
                    <!--/.Panel 1-->
                    <!--Panel 2-->
                    <div class="tab-pane fade" id="favorites" role="tabpanel">
                        <?php if ($user != null && $user["aboutme"] == null) { ?>
                            <h3>There is nothing see in here!</h3>
                        <?php } else { 
                            if ($user["aboutme"]->favMusics != null) { ?>
                                <br/>
                                <h5 class="card-title">Favorite Music</h5>
                                <p class="card-text"><?php echo $user["aboutme"]->favMusics; ?></p>
                            <?php } if ($user["aboutme"]->favMovies != null) { ?>
                                <hr>
                                <h5 class="card-title">Favorite Movies</h5>
                                <p class="card-text"><?php echo $user["aboutme"]->favMovies; ?></p>
                            <?php } if ($user["aboutme"]->favTvShows != null) { ?>
                                <hr>
                                <h5 class="card-title">Favorite Tv Shows</h5>
                                <p class="card-text"><?php echo $user["aboutme"]->favTvShows; ?></p>
                            <?php } if ($user["aboutme"]->favBooks != null) { ?>
                                <hr>
                                <h5 class="card-title">Favorite Books</h5>
                                <p class="card-text"><?php echo $user["aboutme"]->favBooks; ?></p>
                            <?php } if ($user["aboutme"]->quotes != null) { ?>
                                <hr>
                                <h5 class="card-title">Quotes</h5>
                                <p class="card-text"><?php echo $user["aboutme"]->quotes; ?></p>
                            <?php } } ?>
                    </div>
                    <!--/.Panel 2-->
                    <!--Panel 3-->
                    <div class="tab-pane fade" id="posts" role="tabpanel">
                        <?php if ($user != null && $user["posts"] == null) { ?>
                            <h3>There is nothing see in here!</h3>
                        <?php } else { ?>

                        <section class="row-section">
                                        
                            <div class="col-12 row-block">
                                <div id="postList">
                                <ul id="sortable">
                                    <?php foreach ($user["posts"] as $post) { ?>
                                        <li>
                                            <div class="card news-card">

                                                <!--Heading-->
                                                <div class="pr-3 pl-3">
                                                    <div class="content align-middle">
                                                        <?php if ($user != null && ($user["userID"] == get_cookie("User"))) {?>
                                                            <div class="right-side-meta">
                                                                <a postID="<?php if ($user != null) { echo $post["postid"]; } ?>" class="btn-floating btn-md red">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="pt-4"><img src="<?php if ($user != null) { echo $user["avatar"]; } ?>" alt="example avatar" class="rounded-circle avatar-img z-depth-1-half"><?php if ($user != null) { echo $user["userInformation"]["name"]; } ?></div>
                                                    </div>
                                                </div>
                                                <div class="pl-3 pr-3 pt-3">
                                                    <div class="social-meta">
                                                        <p><?php if ($user != null) { echo $post["content"]; } ?></p>
                                                    </div>
                                                </div>
                                                <!--Card content-->
                            
                                            </div>
                                        </li>
                                    <?php } ?>
                                    
                                </ul>
                                </div>
                            </div>
                        </section>
                        <?php } ?>
                    </div>
                    <!--/.Panel 3-->
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Report</p>
                </div>
    
                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-ban fa-4x mb-3 animated rotateIn"></i>
                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <textarea type="text" id="reportText" class="md-textarea" style="height: 100px"></textarea>
                            <label for="reportText">Your message</label>
                        </div>
                    </div>
                </div>
    
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">No, thanks</a>
                    <button id="sendreport" userID="<?php echo $user["userID"]; ?>" type="button" class="btn btn-primary-modal" data-dismiss="modal">Send <i class="fa fa-send" aria-hidden="true"></i></button>
                    
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div> 

    <!--###### MODAL #######-->
    <div class="modal fade" id="block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-danger" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Block!</p>
    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
    
                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>Do you want to block this user?</p>
                    </div>
                </div>
    
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">No, thanks</a>
                    <a id="sendblock" userID="<?php echo $user["userID"]; ?>" type="button" class="btn btn-primary-modal">Block!</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>


    <div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fluid" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" id="showImage" src="" alt="" width="600" height="400">
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/profile.js"); ?>"></script>
