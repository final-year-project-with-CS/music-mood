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
    border-radius: 10px;
}
</style>
@endsection

@section('contents')
<div class="container">
    <h5 class="display-5 text-center mb-5">
        Enter Album Details
    </h5>
<form action=" /store " method="POST" enctype="multipart/form-data">
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
                        Upload Image
                          <input type="file" id="file" name="cover">
                      </label>
                    </div>
                  </div>         
            </div>
        </div>
        <div class="col-lg-9">
            <div class="form-group">
                <label for="artist">Artist</label>
                <select class=" dropdown-toggle" id="inputGroupSelect04" name="artist">
                  <option selected>Choose Role</option>
                  <option value="1">Artist</option>
                  <option value="2">Basata</option>
                  <option value="3">Listener</option>
                </select>
            
        
        </div>

             <div class="form-group">
                <label for="Album">Album Name</label>
                <input type="text" class="form-control" name="album_name" placeholder="Album name">
            </div>

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
    <button class="btn btn-lg btn-primary submitButton" type="submit" name="submit">Upload Album</button>
</form>
    


</div>
@endsection

@section('scripts')

@endsection
