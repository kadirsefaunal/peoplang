<div class="row mt-3">
    <div class="col-md-4">

        <div class="md-form">
            <textarea type="text" id="aboutMe" class="md-textarea" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->aboutMe; } ?></textarea>
            <label for="aboutMe">About Me</label>
        </div>

    </div>

    <div class="col-md-4">

        <div class="md-form">
            <textarea type="text" id="request" class="md-textarea" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->requests; } ?></textarea>
            <label for="request">Request</label>
        </div>

    </div>
    <div class="col-md-4">

        <div class="md-form">
            <textarea type="text" id="languageExchangeRequest" class="md-textarea" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->languageExcRequests; } ?></textarea>
            <label for="languageExchangeRequest">Language Exchange Request</label>
        </div>

    </div>
</div>
<!--First row-->
<div class="row">

    <div class="col-md-4">

        <div class="md-form">
            <textarea type="text" id="hobiesandInterest" class="md-textarea" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->hobbiesInterests; } ?></textarea>
            <label for="hobiesandInterest">Hobbies And Interests</label>
        </div>

    </div>

    <div class="col-md-4">

        <div class="md-form">
            <textarea type="text" id="favoriteMovies" class="md-textarea" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->favMovies; } ?></textarea>
            <label for="favoriteMovies">Favorite Movies</label>
        </div>

    </div>
    <div class="col-md-4">

        <div class="md-form">
            <textarea type="text" id="favoriteMusic" class="md-textarea" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->favMusics; } ?></textarea>
            <label for="favoriteMusic">Favorite Music</label>
        </div>

    </div>

</div>
<div class="row">

    <div class="col-md-4">

        <div class="md-form">
            <textarea type="text" id="favoriteTVShows" class="md-textarea" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->favTvShows; } ?></textarea>
            <label for="favoriteTVShows">Favorite TV Shows</label>
        </div>

    </div>

    <div class="col-md-4">

        <div class="md-form">
            <textarea type="text" id="favoriteBooks" class="md-textarea" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->favBooks; } ?></textarea>
            <label for="favoriteBooks">Favorite Books</label>
        </div>

    </div>
    <div class="col-md-4">

        <div class="md-form">
            <textarea type="text" id="quotes" class="md-textarea" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->quotes; } ?></textarea>
            <label for="quotes">Quotes</label>
        </div>

    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <button type="button" class="btn btn-primary float-right saveAboutMe">Save</button>
    </div>
</div>
