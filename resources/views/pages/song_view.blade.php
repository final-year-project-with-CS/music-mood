@extends('layouts.app')



@section('contents')

<div class="container"> 
  
     <h1 class="text-center">Top songs</h1>     
        <div class="row">
 <div class="col-lg-10">
    <div class="card">
       <div class="row">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-image">
          </div>
          <div class="card-footer">
                       
                   </div>
           </div>
  </div> </div>

  <div class="col-lg-8">
    <div class="row">
             <div class="col-lg-6">
             <h6 class="display-6 mt-5">{{ $song->name }}</h6>
             <h3 class="display-4 mt-1 text-success  "><b>Audio</b></h3>
                    <h6 class="display-6 text-secondary mt-1">Release Date:  <i>{{ $song->created_at }}</i></h6>
            <p class="text-muted mt-1">#{{ $song->genre }}</p>
             <audio controls>  
                <source src="{{ asset($song->song_file) }}" type="audio/mpeg">
            </audio>
     </div>     
    </div>
   </div>
  </div>
  </div>
               
  </div>
        
</div>
@endsection

@section('scripts')

@endsection
