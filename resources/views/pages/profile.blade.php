@extends('layouts.design')
@section('contents')

@section('styles')
   <style>
       ul {
           list-style: none
       }
       .style {
         font-size: 15px;
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

       }
       .abusive ul li{
        float: left;
       }
   </style>
@endsection

<div class="profile-page tx-13">
<div class="row">
    <div class="col-12 grid-margin">
      <div class="profile-header">
        <div class="cover">
          <div class="gray-shade"></div>
          <figure>
            <img src="..\assets\images\profile-cover.jpg" class="img-fluid" alt="profile cover">
          </figure>
          <div class="cover-body d-flex justify-content-between align-items-center">
            <div>
              <img class="profile-pic" src="..\assets\images\faces\face1.jpg" alt="profile">
              <span class="profile-name">{{ Auth::user()->name }}</span>
            </div>
            @role('Listener')
            <div class="d-none d-md-block">
              @if(!Auth::user()->artist)
              <button class="btn btn-primary btn-icon-text btn-edit-profile" data-toggle="modal" data-target="#requestModal">
                <i data-feather="user" class="btn-icon-prepend"></i> Request to be an Artist 
              </button>
              @else
              <a href="#" class="btn btn-block btn-danger">{{Auth::user()->artist->status}}
              </a>
              @endif
            </div>
            @endrole
          </div>
        </div>
        
        @role('Listener')
        <div class="header-links">
          <ul class="links d-flex align-items-center mt-3 mt-md-0">
            {{-- <li class="header-link-item d-flex align-items-center active">
              <i class="mr-1 icon-md" data-feather="upload"></i>
              <a class="pt-1px d-none d-md-block" href="#uploadCollapse" data-toggle="collapse" aria-expanded="false" aria-control="uploadCollapse" >Songs Accepted</a>
            </li> --}}
           
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="disc"></i>
              <a class="pt-1px d-none d-md-block" href="#albumCollapse" data-toggle="collapse" aria-expanded="false"
              aria-controls="albumCollapse">Songs Uploaded</a>
            </li>
            
          </ul>
        </div>
        @endrole
      </div>
    </div>
  </div>


    
      <div class="row">
   
        <!-- Artist modal -->
<div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="requestModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Request To Be An Artist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="storeArtist" method="POST">
          @csrf
          <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="fname">Firstname</label>
              <input type="text" name="fname" class="form-control">
            </div>
    
          </div>  
          <div class="col-lg-6">
            <div class="form-group">
              <label for="lname">Lastname</label>
              <input type="text" name="lname" class="form-control">
            </div>
    
          </div>  
          </div> 
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="uname">Artistic name</label>
                <input type="text" name="uname" class="form-control">
              </div>
      
            </div>  
            <div class="col-lg-6">
              <div class="form-group">
                <label for="htown">Hometown</label>
                <input type="text" name="htown" class="form-control">
              </div>
      
            </div>  
            </div> 

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="label">Label</label>
                  <input type="text" name="label" class="form-control">
                </div>
              
              </div>  
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <select class=" dropdown-toggle"  id="inputGroupSelect04" name="genre">
                      <option selected>Choose Genre</option>
                      <option value="pop">Pop</option>
                      <option value="trap">Trap</option>
                      <option value="reggae">Reggae</option>
                      <option value="Afrobeats">Afrobeats</option>
                      <option value="Rock">Bongo flavour</option>
                      <option value="Country">Country</option>
                      <option value="Gospel">Gospel</option>
                        
                    </select>
                
            
            </div> 
              </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Request</button>
      </div>
    </form>

    </div>
  </div>
</div>
      </div>


        <!-- abusive words modal -->
        {{-- @if(count($abusives) > 0)
        <div class="modal fade" id="abusiveModal" tabindex="-1" role="dialog" aria-labelledby="abusiveModal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-top modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                  <div class="row">
                      <div class="col-sm-12">
                        <p class="style">Dear <span class="profile-name" style="color: green">{{ Auth::user()->name }}</span>
                          Your song  appear to have the following abusive words which are illegal according to our country make sure  
                          you change it with meaningful words. so it will be not approved till further notes
                        </p>
                        <br>
                        
                      </div>
               
                  </div>
                    
                    {{-- @foreach ($abusives as $abusive) --}}
                    {{-- <p id="_abusiveWords"></p> --}}
                    {{-- <textarea name="" cols="118" id="_abusiveWords" style="background-color: #070d19; color: white" rows="10"></textarea> --}}
                  </p>                    
                        {{-- @endforeach --}}
{{--                 
              </div>
            
            </div>
          </div>
        </div>

        @else
        <p>no abusive</p>
  @endif  --}}
 {{--song collapse--}}
  <!-- Artist modal -->
  @foreach ($abusives as $abusive)
  <div class="modal fade" id="abusiveModal" tabindex="-1" role="dialog" aria-labelledby="requestModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Song Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="updateSong" method="POST">
            @csrf 
        {{-- <input type="text" id="songId" name="songId" value="{{ $song->id }}" hidden> --}}
            <p class="lead">
              This song appear to have abusive words which is illegal according to our country culture
            </p>
            <br>
           
          {{-- <textarea ></textarea> --}}

         <textarea name="" cols="103" id="_abusiveWords" style="background-color: #070d19; color: white" rows="10"></textarea>
         <br>
          <div class="form-group">
            <select class=" dropdown-toggle btn btn-block btn-danger" id="requestId" name="request">
              <option selected>requested</option>
              <option value="approved">approve</option>
              <option value="pending">pending</option>
              <option value="rejected">reject</option>
            </select>
          </div>
          
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </form>
      
    </div>
  </div>
</div>

@endforeach
 @if(count($songs) > 0)
        <div class="col-sm-12">
          <div class="card card-body collapse" id="albumCollapse">

            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Songs</th>
                  <th>Genre</th>
                  <th>Status</th>
                </tr>
                @foreach ($songs as $song)
                <tr>
              <td>{{ $song->id }}</td>
              <td>{{ $song->name }}</td>
              <td>{{ $song->genre }}</td>
              <td>
                <button class="open-RequestDialog btn btn-block btn-danger-muted" id="song_{{ $song->id }}" data-toggle="modal" data-id="{{ $song->id }}" 
               data-target="#abusiveModal" onclick="updateStatus('{{ $song->id }}')">{{ $song->status }}</button>
               </td>
                @endforeach
            </thead>
          </table>

          </div>
          @else 
          <p>no songs</p>
          @endif 
        </div>

      </div>


      
    
</div>
@endsection
<script>
  
  let abusiveWords = '';

var p = document.querySelector('#_abusiveWords');

function updateStatus(id) {
  
  p.innerHTML = '';

   const songId = id;

   const requestData = {
     song_id: songId
   }
   console.log(requestData)
  fetch(`http://localhost:8000/api/abusives/${songId}`, {
     method: 'POST',
     headers: {
      "Content-Type": "text/plain;charset=UTF-8"
     },
     body: JSON.stringify(requestData)
   }).
   then(response => {
    return response.json()
   })
   .then(json => {
     p.innerHTML = json[0].abusive_word
   })
   .catch(error => {
     console.log(error)
   })
}
</script>

@section('scripts')
