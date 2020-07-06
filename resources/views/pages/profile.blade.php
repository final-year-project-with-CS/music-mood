@extends('layouts.design')
@section('contents')


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
              <img class="profile-pic" src="..\assets\images\faces\face3.jpg" alt="profile">
              <span class="profile-name">{{ Auth::user()->name }}</span>
            </div>
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
          </div>
        </div>
        <div class="header-links">
          <ul class="links d-flex align-items-center mt-3 mt-md-0">
            <li class="header-link-item d-flex align-items-center active">
              <i class="mr-1 icon-md" data-feather="upload"></i>
              <a class="pt-1px d-none d-md-block" href="#uploadCollapse" data-toggle="collapse" aria-expanded="false" aria-control="uploadCollapse" >Uploads</a>
            </li>
           
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="disc"></i>
              <a class="pt-1px d-none d-md-block" href="#albumCollapse" data-toggle="collapse" aria-expanded="false"
              aria-controls="albumCollapse">Albums</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="music"></i>
              <a class="pt-1px d-none d-md-block" href="#songCollapse" data-toggle="collapse" aria-expanded="false"
              aria-controls="songCollapse">song</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


    
      <div class="row">
        <div class="col-lg-4">
          <div class="card card-body collapse" id="uploadCollapse">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Album</th>
                  <th>Time</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Luxury</td>
                  <td>4day Ago</td>
                </tr>
                <tr>
                 <td>2</td>
                 <td>Gods Plan</td>
                 <td> 1 month</td>
               </tr>
               <tr>
                 <td>3</td>
                 <td>Attention</td>
                 <td>2Hours</td>
               </tr>
               <tr>
                 <td>4</td>
                 <td>Side To Side</td>
                 <td>A year</td>
               </tr>
             
              </thead>
            </table>
          </div>
        </div>
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
                <label for="uname">Username</label>
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
                      <option value="Rock">Rock</option>
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
 {{--album collapse--}}
        <div class="col-lg-4">
          <div class="card card-body collapse" id="albumCollapse">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>#</th>
                 <th>Album</th>
                 <th>Genre</th>
               </tr>
               <tr>
                 <td>1</td>
                 <td>Father Of 4</td>
                 <td>Pop</td>
               </tr>
               <tr>
                <td>2</td>
                <td>Boy From Tandale</td>
                <td>Rap</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Father Of Ahsad</td>
                <td>Latin</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Six Twin</td>
                <td>singeli</td>
              </tr>
            
             </thead>
           </table>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-body collapse" id="songCollapse">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Song</th>
                  <th>Time</th>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Slipery</td>
                  <td>3:12</td>
                </tr>
                <tr>
                 <td>3</td>
                 <td>Guidance</td>
                 <td>4:22</td>
               </tr>
               <tr>
                 <td>4</td>
                 <td>Get The Bag</td>
                 <td>2:18</td>
               </tr>
               <tr>
                 <td>5</td>
                 <td>MotorSport</td>
                 <td>5:57</td>
               </tr>
             
              </thead>
            </table>
          </div>
        </div>
      </div>


      <div class="row">
        
      </div>
    
</div>
@endsection

@section('scripts')
