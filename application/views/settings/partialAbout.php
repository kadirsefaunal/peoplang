
<div class="form-row">
    <div class="form-group row col-md-12">
        <label for="about" class="col-md-3 align-self-center ">About</label>
        <textarea class="form-control col-md-9" id="aboutMe" rows="3"><?php if ($AboutMe != null) { echo $AboutMe->aboutMe; } ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group row col-md-12">
        <label for="request" class="col-md-3 align-self-center ">Request</label>
        <textarea class="form-control col-md-9" id="request" rows="3"><?php if ($AboutMe != null) { echo $AboutMe->requests; } ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group row col-md-12">
        <label for="languageExchangeRequest" class="col-md-3 align-self-center ">Language Exchange Request</label>
        <textarea class="form-control col-md-9" id="languageExchangeRequest" rows="3"><?php if ($AboutMe != null) { echo $AboutMe->languageExcRequests; } ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group row col-md-12">
        <label for="hobiesandInterest" class="col-md-3 align-self-center ">Hobies and Interest</label>
        <textarea class="form-control col-md-9" id="hobiesandInterest" rows="3"><?php if ($AboutMe != null) { echo $AboutMe->hobbiesInterests; } ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group row col-md-12">
        <label for="favoriteMovies" class="col-md-3 align-self-center ">Favorite Movies</label>
        <textarea class="form-control col-md-9" id="favoriteMovies" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->favMovies; } ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group row col-md-12">
        <label for="favoriteMusic" class="col-md-3 align-self-center ">Favorite Music</label>
        <textarea class="form-control col-md-9" id="favoriteMusic" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->favMusics; } ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group row col-md-12">
        <label for="favoriteTVShows" class="col-md-3 align-self-center ">Favorite TV Shows</label>
        <textarea class="form-control col-md-9" id="favoriteTVShows" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->favTvShows; } ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group row col-md-12">
        <label for="favoriteBooks" class="col-md-3 align-self-center ">Favorite Books</label>
        <textarea class="form-control col-md-9" id="favoriteBooks" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->favBooks; } ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group row col-md-12">
        <label for="quotes" class="col-md-3 align-self-center ">Quotes</label>
        <textarea class="form-control col-md-9" id="quotes" rows="2"><?php if ($AboutMe != null) { echo $AboutMe->quotes; } ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group row col-md-4">
        <button class="saveAboutMe">Save</button>
    </div>
</div>
