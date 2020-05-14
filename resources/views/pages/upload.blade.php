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

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}

label {
	display: block;
	width: 60vw;
	max-width: 300px;
	margin: 0 auto;
	background-color: slateblue;
	border-radius: 2px;
	font-size: 1em;
	line-height: 2.5em;
	text-align: center;
}

label:hover {
	background-color: cornflowerblue;
}

label:active {
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
</style>
@endsection
@section('contents')
<h3 style="text-align:center">UPLOAD MUSIC</h3>
<br><br><br><br>
{{-- <div style="text-align:center">
    <button class="button button4" type="button" onclick="alert('Hello world!')" >Browse to file</button>
</div> --}}
<form class="md-form">
    <div class="file-field">
      <div class="z-depth-1-half mb-4">

      </div>
      <div class="d-flex justify-content-center">
        <div class="btn btn-mdb-color btn-rounded float-left b">
          <span></span>
          <label for="file">
              UPLOAD AUDIO
              <input type="file" id="file">
          </label>
        </div>
      </div>
    </div>
  </form>

@endsection

@section('scripts')

