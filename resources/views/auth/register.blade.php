@extends('layouts.app')



@section('styles')
    <style>
      .wrapper {
        background-image: linear-gradient(180deg, #070d19, rgb(15, 15, 46),rgb(58, 71, 58), rgb(19, 70, 70));
        height: 100vh;
        width: 100%;
        position: fixed;
      
      }
    </style>
@endsection
@section('content')

<div class="main-wrapper" id="app">
    <div class="wrapper ">
      <div class="page-content mt-5">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
            
        <div class="row">
          <div class="col-md-5 pr-md-0">
            <div class="auth-left-wrapper">
               <img src="{{ asset('assets/images/pics/fg.webp') }}" height="640px" width="100%">

            </div>
          </div>
          <div class="col-md-7 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo logo-light d-block mb-2 text-center">Music <span> Mood</span></a>
              <h5 class="text-muted font-weight-normal mb-4 text-center">Create a free account.</h5>
              <form method="POST" action="{{ route('login') }}">
    @csrf
        <div class="form-group">
            <label for="genre">{{ __('Role') }}</label>
            <select class=" dropdown-toggle" id="inputGroupSelect04" name="role">
              <option selected>Choose Role</option>
              <option value="1">Artist</option>
              <option value="2">Basata</option>
              <option value="3">Radio</option>
              <option value="4">Listener</option>
            </select>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">{{ __('Firstname') }}</label>
                      <input type="text" class="form-control" @error('firstname') is-invalid @enderror name="firstname"  required autocomplete="Firstname" autofocus>
                      @error('firstname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label for="surname">{{ __('SurName') }}</label>
                      <input type="text" class="form-control" @error('surname') is-invalid @enderror name="surname" required autocomplete="surname" autofocus>
                      @error('surname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
            </div>
            </div>
                <div class="form-group">
                <label for="Username1">{{ __('Username') }}</label>
                  <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="form-group">
                    <label for="email">{{ __('E-mail Address') }}</label>
                      <input type="text" class="form-control" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                          <input type="password" class="form-control" @error('password') is-invalid @enderror name="password" required autocomplete="new password">
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                </div>
                 <div class="col-md-6">
                   <div class="form-group">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                    {{ __('Register') }}</button>
                    <a href="/login" class="btn btn-primary">
                      {{ __('Login') }}
                  </a> 
                </div>
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
