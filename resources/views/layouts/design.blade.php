<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Music_Mood</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="n0ycxN9yD9Owhv1iCI7DBkbGO4mZ0nefvlqkfuUQ">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- plugin css -->
    <link media="all" type="text/css" rel="stylesheet" href="assets\fonts\feather-font\css\iconfont.css">
    <link media="all" type="text/css" rel="stylesheet" href="assets\plugins\perfect-scrollbar\perfect-scrollbar.css">
    <!-- end plugin css -->

    <link media="all" type="text/css" rel="stylesheet"
        href="assets\plugins\bootstrap-datepicker\css\bootstrap-datepicker.min.css">

    <!-- common css -->
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- end common css -->


    <!-- Global site tag (gtag.js) - Google Analytics start -->

    <!-- Google Analytics end -->
@yield('styles')
</head>
<body id="page-top">

    @if(session('error'))
    <div>{{session('error')}}</div>
    @endif

    @if(session('msg'))
    <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert"><span>&times;</span></button>
        {{session('msg')}}</div>
    @endif

<body data-base-url="#">



  <div class="main-wrapper" id="app">
    <nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Music<span>Mood</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
        <li class="nav-item nav-category">MUSIC MOOD</li>
        <li class="nav-item active">
            <a href="/dashboard" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">MAIN</li>

        <li class="nav-item ">
            <a href="/browse" class="nav-link">
                <i class="link-icon" data-feather="globe"></i>
                <span class="link-title">Browse</span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="/radio" class="nav-link">
                <i class="link-icon" data-feather="radio"></i>
                <span class="link-title">Radio</span>
            </a>
        </li>
        <li class="nav-item nav-category">LIBRARY</li>
        <li class="nav-item ">
            <a href="/recentlyadded" class="nav-link">
                <i class="link-icon" data-feather="clock"></i>
                <span class="link-title">Recently Added</span>

            </a>

        </li>
        <li class="nav-item ">
            <a href="/artist" class="nav-link">
                <i class="link-icon" data-feather="user"></i>
                <span class="link-title">Artists</span>

            </a>

        </li>
        <li class="nav-item ">
            <a href="/album" class="nav-link">
              <i class="link-icon" data-feather="disc"></i>
                <span class="link-title">Albums</span>

            </a>

        </li>
        <li class="nav-item ">
            <a href="/song" class="nav-link">
                <i class="link-icon" data-feather="music"></i>
                <span class="link-title">Songs</span>

            </a>

        </li>
        @role('Listener')
        <li class="nav-item nav-category">STORE</li>
  
        <li class="nav-item ">
            <a href="/upload" class="nav-link">
                <i class="link-icon" data-feather="upload-cloud"></i>
                <span class="link-title">Upload</span>
            </a>
        </li>

        <li class="nav-item ">
            <a href="/download" class="nav-link">
                <i class="link-icon" data-feather="download"></i>
                <span class="link-title">Download</span>
            </a>
        </li>

        @endrole

        @role('Admin')
        <li class="nav-item nav-category">Admin</li>
        <li class="nav-item ">
          <a href="/verify" class="nav-link">
              <i class="link-icon" data-feather="check"></i>
              <span class="link-title">Verify Artists</span>

          </a>
      </li>
        <li class="nav-item ">
            <a href="/verifySong" class="nav-link">
                <i class="link-icon" data-feather="upload-cloud"></i>
                <span class="link-title">verify songs</span>
            </a>
        </li>

      
        @endrole

        <li class="nav-item ">
            <a href="/claimpayment" class="nav-link">
                <i class="link-icon" data-feather="dollar-sign"></i>
                <span class="link-title">Claim Payment</span>

            </a>
        </li>
        <li class="nav-item ">
            <a href="/notify" class="nav-link">
                <i class="link-icon" data-feather="bell"></i>
                <span class="link-title">Notify</span>

            </a>
        </li>
        
    </ul>
</div>
</nav>
    <div class="page-wrapper">
      <nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">
    <form class="search-form">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i data-feather="search"></i>
          </div>
        </div>
        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
      </div>
    </form>
    <ul class="navbar-nav">
      {{-- messege at navbar  --}}
      @role('Listener')
      <li class="nav-item dropdown nav-notifications mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="bell"></i>
          <div class="indicator">
            <div class="circle">
            </div>
          </div>
        </a>
        <div class="dropdown-menu" aria-labelledby="notificationDropdown">
          <div class="dropdown-body">
          Dear <span class="profile-name" style="color: green">{{ Auth::user()->name }}</span>
          You appear to have illegal words in your uploaded songs
          </div>
        </div>
      </li>
      @endrole
      <li class="nav-item dropdown nav-profile">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="assets\images\faces\face1.jpg" alt="profile">
        </a>
        <div class="dropdown-menu" aria-labelledby="profileDropdown">
          <div class="dropdown-header d-flex flex-column align-items-center">
            <div class="figure mb-3">
              <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="">
            </div>
            <div class="info text-center">
              <p class="name font-weight-bold mb-0">    {{ Auth::user()->name }}</p>
              <p class="email text-muted mb-3">    {{ Auth::user()->email }}</p>
            </div>
          </div>
          <div class="dropdown-body">
            <ul class="profile-nav p-0 pt-3">
              <li class="nav-item">
                <a href="/profile" class="nav-link">
                  <i data-feather="user"></i>
                  <span>Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editprofile" class="nav-link">
                  <i data-feather="edit"></i>
                  <span>Edit Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:;" class="nav-link">
                  <i data-feather="repeat"></i>
                  <span>Switch User</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="javascript:;" class="nav-link">
                    <i data-feather="user"></i>
                  <span onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">{{ __('logout') }}</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                 </li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>

   <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Welcome to Music_Mood</h4>
  </div>
 
</div>
@yield('contents')
</div>


<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
    <p class="text-muted text-center text-md-left">Copyright © 2020 <a href="#"
            target="_blank">Music_Mood</a>. All rights reserved</p>

</footer>
</div>
</div>

<!-- base js -->
<script src="js\app.js"></script>
<script src="assets\plugins\feather-icons\feather.min.js"></script>
<script src="assets\plugins\perfect-scrollbar\perfect-scrollbar.min.js"></script>
<!-- end base js -->

<!-- plugin js -->
<script src="assets\plugins\chartjs\Chart.min.js"></script>
<script src="assets\plugins\jquery.flot\jquery.flot.js"></script>
<script src="assets\plugins\jquery.flot\jquery.flot.resize.js"></script>
<script src="assets\plugins\bootstrap-datepicker\js\bootstrap-datepicker.min.js"></script>
<script src="assets\plugins\apexcharts\apexcharts.min.js"></script>
<script src="assets\plugins\progressbar-js\progressbar.min.js"></script>
<!-- end plugin js -->

<!-- common js -->
<script src="assets\js\template.js"></script>
<!-- end common js -->

<script src="assets\js\dashboard.js"></script>
<script src="assets\js\spinner.js"></script>
<script src="assets\js\datepicker.js"></script>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-146586338-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146586338-1');
    </script>

    @yield('scripts')
</body>

</html>
