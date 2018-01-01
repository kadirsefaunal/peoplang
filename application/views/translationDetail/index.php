<div class="container">
        <div class="row">
            <!--Panel-->
            <div class="card card-body m-2 blue lighten-4">
                <div class="media d-block d-md-flex">
                    <img class="d-flex avatar-2 mb-md-0 mb-3 mx-auto rounded-circle" src="<?php echo $avatar;?>"
                        alt="Generic placeholder image" width="175" height="175">
                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <span class="badge badge-pill green"><?php echo $translationRequest->textLanguage; ?></span>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="badge badge-pill light-blue mb-3"><?php echo $translationRequest->languageToTranslation; ?></span>
                        <input type="hidden" id="trID" value="<?php echo $translationRequest->ID; ?>">
                        <h4><?php echo $translationRequest->title; ?></h4>
                        <p><?php echo $translationRequest->text; ?></p>
                        <button type="button" class="btn btn-danger btn-md float-right">
                            <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Panel-->

        <!--Comment-->
        <section class="mt-3 ml-2 mr-2">

            <!--Leave a reply form-->
            <div class="reply-form">

                <!--Third row-->
                <div class="row">
                    <!--Image column-->
                    <div class="col-sm-2 col-12">
                        <img src="<?php echo $visitorAvatar;?>" alt="Sample avatar image">
                    </div>
                    <!--/.Image column-->

                    <!--Content column-->
                    <div class="col-sm-8 col-12">
                        <div class="md-form">
                            <textarea type="text" id="answer" class="md-textarea"></textarea>
                            <label for="form-mess" class="">Your message</label>
                        </div>

                    </div>

                    <div class="col-sm-2 col-12 text-center">
                        <button class="btn btn-primary btn-md waves-effect waves-light mt-5 answerSend">Send</button>
                    </div>
                    <!--/.Content column-->

                </div>
                <!--/.Third row-->
            </div>
            <!--/.Leave a reply form-->

        </section>
        <!--/.Comment-->


        <div class="row mr-2 ml-2">
            <!--Answers-->
            <div class="comments-list text-left">
                <div class="section-heading mb-3">
                    <h3>Answers
                        <span class="badge blue">3</span>
                    </h3>
                </div>
                <div id="answers">
                <?php foreach ($answers as $answer){ ?>
                <!--First row-->
                <div class="row">
                    <!--Image column-->
                    <div class="col-sm-2 col-12">
                    <a href="<?php echo base_url("u/" . $answer["userName"]); ?>">
                        <img src="<?php echo $answer["userAvatar"]; ?>" alt="Material Design for Bootstrap - example photo">
                    </a>
                    </div>
                    <!--/.Image column-->
                    <!--Content column-->
                    <div class="col-sm-10 col-12">
                        <a href="<?php echo base_url("u/" . $answer["userName"]); ?>">
                            <h3 class="user-name"><?php echo $answer["name"]; ?></h3>
                        </a>
                        <div class="card-data">
                            <ul class="list-unstyled">
                                <li class="comment-date">
                                    <i class="fa fa-clock-o"></i> <?php echo $answer["date"]; ?></li>
                            </ul>
                        </div>
                        <p class="comment-text"><?php echo $answer["text"]; ?></p>
                    </div>
                    <!--/.Content column-->
                </div>
                <!--/.First row-->
                <?php } ?>
                </div>
            </div>
            <!--/.Answers row-->







        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("public/js/tr.js"); ?>"></script>