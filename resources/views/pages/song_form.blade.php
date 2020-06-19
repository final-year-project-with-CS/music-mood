@extends('layouts.app')


@section('styles')
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}



.label {
	display: block;
	width: 20vh;
	max-width: 300px;
	margin: 0 auto;
	background-color: slateblue;
	border-radius: 10px;
	font-size: 1em;
	line-height: 2.5em;
	text-align: center;
}

.label:hover {
	background-color: cornflowerblue;
    cursor: pointer;
}

.label:active {
	background-color: mediumaquamarine;
}

input {
    border: 0;
    clip-path: rect(1px, 1px, 1px, 1px);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    width: 1px;
}
.submitButton {
    margin-left: 50%;
    margin-top: 15px;
    /* float: right */
    border-radius: 10px;
}
</style>
@endsection

@section('contents')
<div class="container">
    <h5 class="display-5 text-center mb-5">
        Enter Song Details
    </h5>
<form action=" /storeSong/{albumId} " method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <img src="assets\images\song.png" height="200px" width="100%" alt="">      
                <div class="d-flex justify-content-center">
                    <div class="btn btn-mdb-color btn-rounded float-left b">
                      <span></span>
                      <label class="label" for="file">
                        <i class="link-icon" data-feather="camera"></i>
                        Upload Song
                          <input type="file" id="file" name="song_file">
                      </label>
                    </div>
                  </div>         
            </div>
        </div>
        <div class="col-lg-9">
     <div class="row">
     <div class="col-lg-6">
                    <div class="form-group">
                        <label for="album">Album</label>
                        <select class=" dropdown-toggle" id="inputGroupSelect04" name="album_id">
                          <option selected>Choose Album</option>
                          <option value="1">father of four</option>
                          <option value="2">cospiracy</option>
                          <option value="3">changes</option>
                          <option value="4">offspring</option>
                        </select>
                </div>
                </div>
    
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="Album">artist Name</label>
                    <input type="text" class="form-control" name="artist_name" placeholder="artist name">
                </div>
              </div>
    
     </div>
            <div class="row">
            <div class="col-lg-6">
        <div class="form-group">
            <label for="Album">time</label>
            <input type="text" class="form-control" name="time" placeholder="time">
        </div>
    </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="Album">duration</label>
                        <input type="text" class="form-control" name="play_count" placeholder="play_count">
                    </div>
                </div>
            
            </div>

           
<div class="row">
    
    <div class="col-lg-6">
        <div class="form-group">
            <label for="genre">Genre</label>
            <select class=" dropdown-toggle" id="inputGroupSelect04" name="genre">
              <option selected>Choose Genre</option>
              <option value="pop">Pop</option>
              <option value="trap">Trap</option>
              <option value="bongo fleva">Bongo fleva</option>
            </select>
        
    
    </div>
    </div>
</div>
            
    </div>
    <button class="btn btn-lg btn-primary submitButton" type="submit" name="submit">Upload Song</button>
</form>
    
</div>
@endsection

@section('scripts')

@endsection
