@extends('layouts.design')
@section('contents')

@section('styles')
   <style>
       ul {
           list-style: none
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
            <li class="header-link-item d-flex align-items-center active">
              <i class="mr-1 icon-md" data-feather="upload"></i>
              <a class="pt-1px d-none d-md-block" href="#uploadCollapse" data-toggle="collapse" aria-expanded="false" aria-control="uploadCollapse" >Songs Accepted</a>
            </li>
           
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="disc"></i>
              <a class="pt-1px d-none d-md-block" href="#albumCollapse" data-toggle="collapse" aria-expanded="false"
              aria-controls="albumCollapse">Songs Rejected</a>
            </li>
            
          </ul>
        </div>
        @endrole
      </div>
    </div>
  </div>


    
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-body collapse" id="uploadCollapse">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Songs</th>
                  <th>Genre</th>
                  <th>status</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>utaipenda</td>
                  <td>Trap</td>

                  <td><button class="btn btn-block btn-primary">Approved</button>
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
        <div class="modal fade" id="abusiveModal" tabindex="-1" role="dialog" aria-labelledby="abusiveModal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Abusive Words</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-sm-12">
                        <p>Dear Anord Your song  father of 4 appear to have the following abusive words which are illegal according to our country make sure  
                          you change it with meaningful words
                        </p>
                        
                      </div>
               
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <ul>
                        <li>sex</li>
                        <li>fuck</li>
                        <li>nyege</li>
                        <li>widh</li>
                        <li>green</li>    
                        </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul>
                        <li>sex</li>
                        <li>fuck</li>
                        <li>nyege</li>
                        <li>widh</li>
                        <li>green</li>    
                        </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul>
                        <li>sex</li>
                        <li>fuck</li>
                        <li>nyege</li>
                        <li>widh</li>
                        <li>green</li>    
                        </ul>
                    </div>
                  </div>
              </div>
  
        
            </div>
          </div>
        </div>
 {{--album collapse--}}
        <div class="col-lg-6">
          <div class="card card-body collapse" id="albumCollapse">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>#</th>
                 <th>Songs</th>
                 <th>Abusive</th>
                 <th>Status</th>
               </tr>
               <tr>
                 <td>1</td>
                 <td>Father Of 4</td>
                 <td><button class="open-RequestDialog btn btn-block btn-danger-muted" data-toggle="modal" data-id="" data-target="#abusiveModal">Abusives</button>
                 <td><button class="btn btn-block btn-danger">Rejected</button>
                 </tr>
               
            
             </thead>
           </table>
          </div>
        </div>

      </div>


      
    
</div>
@endsection

@section('scripts')
