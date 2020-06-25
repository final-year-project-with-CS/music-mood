@extends('layouts.blank')
@section('styles')

<div class="main-wrapper" id="app">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pr-md-0">
            <div class="auth-left-wrapper">
               <img src="{{ asset('assets/images/al.jpg') }}" height="630px" width="100%">

            </div>
          </div>
          <div class="col-md-8 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo logo-light d-block mb-2 text-center">Music <span> Mood</span></a>
              <h5 class="text-muted font-weight-normal mb-4 text-center">Create a free account.</h5>
              <form class="forms-sample">
            
    
    
        <div class="form-group">
            <label for="genre">Role</label>
            <select class=" dropdown-toggle" id="inputGroupSelect04" name="genre">
              <option selected>Choose Role</option>
              <option value="pop">Artist</option>
              <option value="trap">Basata</option>
              <option value="bongo fleva">Listener</option>
            </select>
        </div>
    
    
    

                <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" required autocomplete="Username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
               
                <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
                </div>
                </div>
                 <div class="col-md-6">
                   <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="confirm ...">
                </div>
                </div>
                </div>
                
                
               
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                  </label>
                </div>
                <div class="mt-3">
                  <a href="https://www.nobleui.com/laravel/template/dark" class="btn btn-primary mr-2 mb-2 mb-md-0">Sign up</a>
                  <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="twitter"></i>
                    Sign up with twitter
                  </button>
                </div>
                <a href="/" class="d-block mt-3 text-muted">Already a user? Sign in</a>
              </form>
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
