<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <!--First column-->
                        <div class="md-form">
                            <textarea type="text" id="userPost" class="md-textarea" length="280"></textarea>
                            <label for="userPost">What's new?</label>
                        </div>


                        <div class="text-center">
                            <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a" id="postSend">Share</button>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <section class="row-section">

                                <div class="col-12 row-block">
                                    <ul id="sortable">
                                        <?php foreach($posts as $post) { ?>  
                                            <li>
                                                <div class="media">
                                                    <div class="media-left align-self-center">
                                                    <a href="<?php echo base_url("u/" . $post["userName"]); ?>">
                                                        <img class="rounded-circle" src="<?php echo $post["userAvatar"]; ?>">
                                                    </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4><a href="<?php echo base_url("u/". $post["userName"]) ?>"><?php echo $post["name"]; ?></a></h4>
                                                        <p><?php echo $post["date"]; ?></p>
                                                        <p><?php echo $post["content"]; ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                        
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="row">
                    <?php if ($online4s != null) { ?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                <div class="row">
                                    <div class="col-md-4"><span class="badge badge-pill green align-middle mt-3">Online Users</span></div>
                                    <div class="col-md-8">
                                        <div class="md-form form-sm">
                                                <select class="mdb-select">
                                                        <option value="1">Language Select</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                        <option value="4">Option 4</option>
                                                        <option value="5">Option 5</option>
                                                    </select>
                                        </div>    
                                    </div>
                                </div>
                                    
                                
                                </div>
                                
                                
                                <div class="row">
                                    <?php foreach ($online4s as $online) { ?>
                                    <div class="col-3">
                                        <a href="<?php echo base_url("u/". $online["userName"]); ?>"><img src="<?php echo $online["avatar"]; ?>" width="80" height="80"
                                            alt="..." class="rounded-circle mx-auto d-block img-fluid"></a>
                                        <div class="text-center app-username"><a href="<?php echo base_url("u/". $online["userName"]); ?>"><?php echo $online["userName"]; ?></a><span class="app-age"> | <?php echo $online["age"]; ?></span> </div>
                                        <div class="text-center"><img src="<?php echo $online["flag"]; ?>" width="28px" height="20px" /><span class="app-city"> <?php echo $online["location"]; ?></span> </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title"><span class="badge badge-pill red">Visitors</span></div>
                                <div class="row">
                                    <div class="col-3">
                                        <img src="http://mfbyazilim.com/wp-content/uploads/avatar-2.png" width="80" height="80"
                                            alt="..." class="rounded-circle mx-auto d-block img-fluid">
                                        <div class="text-center app-username">kdrmutluu<span class="app-age"> 23</span> </div>
                                        <div class="text-center"><img src="TR.png"/><span class="app-city"> Bursa</span> </div>
                                    </div>
                                    <div class="col-3">
                                        <img src="http://mfbyazilim.com/wp-content/uploads/avatar-2.png" width="80" height="80"
                                            alt="..." class="rounded-circle mx-auto d-block img-fluid">
                                        <div class="text-center app-username">kdrmutluu<span class="app-age"> 23</span> </div>
                                        <div class="text-center"><img src="TR.png"/><span class="app-city"> Bursa</span> </div>
                                    </div>
                                    <div class="col-3">
                                        <img src="http://mfbyazilim.com/wp-content/uploads/avatar-2.png" width="80" height="80"
                                            alt="..." class="rounded-circle mx-auto d-block img-fluid">
                                        <div class="text-center app-username">kdrmutluu<span class="app-age"> 23</span> </div>
                                        <div class="text-center"><img src="TR.png"/><span class="app-city"> Bursa</span> </div>
                                    </div>
                                    <div class="col-3">
                                        <img src="http://mfbyazilim.com/wp-content/uploads/avatar-2.png" width="80" height="80"
                                            alt="..." class="rounded-circle mx-auto d-block img-fluid">
                                        <div class="text-center app-username">kdrmutluu<span class="app-age"> 23</span> </div>
                                        <div class="text-center"><img src="TR.png"/><span class="app-city"> Bursa</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title"><span class="badge badge-pill indigo">Online Friends</span></div>
                                <div class="row">
                                    <div class="col-3">
                                        <img src="http://mfbyazilim.com/wp-content/uploads/avatar-2.png" width="80" height="80"
                                            alt="..." class="rounded-circle mx-auto d-block img-fluid">
                                        <div class="text-center app-username">kdrmutluu<span class="app-age"> 23</span> </div>
                                        <div class="text-center"><img src="TR.png"/><span class="app-city"> Bursa</span> </div>
                                    </div>
                                    <div class="col-3">
                                        <img src="http://mfbyazilim.com/wp-content/uploads/avatar-2.png" width="80" height="80"
                                            alt="..." class="rounded-circle mx-auto d-block img-fluid">
                                        <div class="text-center app-username">kdrmutluu<span class="app-age"> 23</span> </div>
                                        <div class="text-center"><img src="TR.png"/><span class="app-city"> Bursa</span> </div>
                                    </div>
                                    <div class="col-3">
                                        <img src="http://mfbyazilim.com/wp-content/uploads/avatar-2.png" width="80" height="80"
                                            alt="..." class="rounded-circle mx-auto d-block img-fluid">
                                        <div class="text-center app-username">kdrmutluu<span class="app-age"> 23</span> </div>
                                        <div class="text-center"><img src="TR.png"/><span class="app-city"> Bursa</span> </div>
                                    </div>
                                    <div class="col-3">
                                        <img src="http://mfbyazilim.com/wp-content/uploads/avatar-2.png" width="80" height="80"
                                            alt="..." class="rounded-circle mx-auto d-block img-fluid">
                                        <div class="text-center app-username">kdrmutluu<span class="app-age"> 23</span> </div>
                                        <div class="text-center"><img src="TR.png"/><span class="app-city"> Bursa</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/app.js"); ?>"></script>