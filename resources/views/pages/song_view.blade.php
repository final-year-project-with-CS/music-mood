@extends('layouts.app')



@section('contents')

<div class="container"> 
  
     <h1 class="text-center">Top songs</h1>     
   <div class="row">
        <div class="col-lg-10">
          <div class="card">
           <div class="row">
          <div class="col-lg-5">
            <div class="card">
            <div class="card-image">
              <img src="{{ asset('assets/images/song.png') }}" height="130px" style="padding-left: 70px" width="200">
            </div>
          
          <div class="card-footer">
                      <audio controls mediaGroup>  
                        <source src="{{ asset($song->song_file) }}" type="audio/mpeg">
                      </audio>
          </div>
         </div>
     </div>
     <div class="col-lg-5">
       <div class="row">
             <div class="col">
             <h6 class="display-6 mt-5 text-success">{{ $song->name }}</h6>
                          <div class="col-lg-6">
             <h3 class="display-4 mt-1 text-success  "><b>Audio</b></h3>
                    <h6 class="display-6 text-secondary mt-1">Release Date:  <i>{{ $song->created_at }}</i></h6>
            <p class="text-muted mt-1">#{{ $song->genre }}</p>  
              </div>     
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
