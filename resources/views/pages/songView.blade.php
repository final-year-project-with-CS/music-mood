@extends('layouts.design')

@section('contents')

<div class="container"> 
  
   <div class="row mt-5">
        <div class="col-lg-10 col-sm-6 col-md-6">
          <div class="card">
           <div class="row">
          <div class="col-lg-5">
            <div class="card">
            <div class="card-image">
              <img src="{{ asset('assets/images/pics/yl.webp') }}" height="160px"  width="100%">
            </div>
          
          <div class="card-footer ">
                      <div class="row">
                        <div class="col-md-6 col-lg-8 col-xl-10">
                          <audio controls duration>  
                            <source src="{{ asset($song->song_file) }}" type="audio/mpeg">
                          </audio>

                        </div>
                      </div>
          </div>
         </div>
     </div>
     <div class="col-lg-5">
       <div class="row">
             <div class="col">
             <h5 class="display-5 mt-5 text-success">{{ $song->name }}</h5>
                          <div class="col-lg-6">
             {{-- <h3 class="display-4 mt-1 text-success  "><b>mp3</b></h3> --}}
                    <h6 class="display-6 text-secondary mt-1">Release Date:  <i>{{ $song->created_at }}</i></h6>
            <p class="text-muted mt-1">#{{ $song->genre }}</p>  
            <br> <br> <br>
             {{-- <form @if($audio) action="deleteSong/{{ $audio->id }}" @endif>
              @csrf
              @method('DELETE')
              <button class="btn btn-block" type="submit" style="color: darkred"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Destroy </span></button>
            </form> --}}

              </div>     
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
    <script>
      var aud = $('aud')
    </script>
@endsection
