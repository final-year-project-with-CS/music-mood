@extends('layouts.app')
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
          <ul class="links d-flex align-items-center mt-3 mt-md-0" >
            <li class="header-link-item d-flex align-items-center active">
              <i class="mr-1 icon-md" data-feather="info"></i>
              <a class="pt-1px d-none d-md-block" href="/" data-toggle="collapse" data-target="#collapseBasic" >Basic Information</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="lock"></i>
              <a class="pt-1px d-none d-md-block" href="#collapseAbout"data-toggle="collapse" >Change password</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="users"></i>
              <a class="pt-1px d-none d-md-block" href="#">Update email <span class="text-muted tx-12"></span></a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="image"></i>
              <a class="pt-1px d-none d-md-block" href="#">Feed</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="book"></i>
              <a class="pt-1px d-none d-md-block" href="#">About</a>
            </li>
          </ul>
        </div>
      </div>
      <br>
      {{-- this is a div for collapse in timeline --}}
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body">
                      <div class="collapse"  id="collapseBasic" >
                          hoze
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

