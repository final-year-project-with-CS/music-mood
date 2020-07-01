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
              <img class="profile-pic" src="..\assets\images\faces\face1.jpg" alt="profile">
              <span class="profile-name">Amiah Burton</span>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-primary btn-icon-text btn-edit-profile">
                <i data-feather="edit" class="btn-icon-prepend"></i> Edit
              </button>
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
