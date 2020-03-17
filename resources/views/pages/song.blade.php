<!DOCTYPE html>
<html>
    [<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title> Music Mood</title>

            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="_token" content="6Syd2Vq8EGzU5zzaEnLRJfKR9P0C2BBassKf6Szo">

            <link rel="shortcut icon" href="favicon.ico">

            <!-- plugin css -->
            <link media="all" type="text/css" rel="stylesheet" href="assets\fonts\feather-font\css\iconfont.css">
            <link media="all" type="text/css" rel="stylesheet" href="assets\plugins\perfect-scrollbar\perfect-scrollbar.css">
            <!-- end plugin css -->

              <link media="all" type="text/css" rel="stylesheet" href="assets\plugins\bootstrap-datepicker\css\bootstrap-datepicker.min.css">

            <!-- common css -->
            <link media="all" type="text/css" rel="stylesheet" href="css\app.css">
            <!-- end common css -->


            <!-- Global site tag (gtag.js) - Google Analytics start -->
            <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-146586338-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-146586338-1');
            </script>
            <!-- Google Analytics end -->

            @yield('styles')

          </head>

    </html>

<body data-base-url="https://www.nobleui.com/laravel/template/dark">

  <script src="assets\js\spinner.js"></script>

  <div class="main-wrapper" id="app">
    <nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Music<span>MOOD</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item active">
        <a href="https://www.nobleui.com/laravel/template/dark" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">MUSIC MOOD</li>

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
        <a href="/recentlyadded" class="nav-link"  >
          <i class="link-icon" data-feather="clock"></i>
          <span class="link-title">Recently Added</span>

        </a>

      </li>
      <li class="nav-item ">
        <a href="/artist" class="nav-link"  >
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">Artists</span>

        </a>

      </li>
      <li class="nav-item ">
        <a href="/album" class="nav-link"  >
          <i class="link-icon" data-feather="music"></i>
          <span class="link-title">Albums</span>

        </a>

      </li>
      <li class="nav-item ">
        <a href="/song" class="nav-link"  >
          <i class="link-icon" data-feather="music"></i>
          <span class="link-title">Songs</span>

        </a>

      </li>


      <li class="nav-item nav-category">PlAYLIST</li>


      <li class="nav-item nav-category">STORE</li>
      <li class="nav-item ">
        <a href="/upload" class="nav-link"  >
          <i class="link-icon" data-feather="upload-cloud"></i>
          <span class="link-title">Upload</span>

        </a>
        <li class="nav-item ">
            <a href="/download" class="nav-link"  >
              <i class="link-icon" data-feather="download"></i>
              <span class="link-title">Download</span>

            </a>
            <li class="nav-item ">
                <a href="/claimpayment" class="nav-link"  >
                  <i class="link-icon" data-feather="dollar-sign"></i>
                  <span class="link-title">Claim Payment</span>

                </a>
                <li class="nav-item ">
                    <a href="/notify" class="nav-link"  >
                      <i class="link-icon" data-feather="bell"></i>
                      <span class="link-title">Notify</span>

                    </a>
                    <li class="nav-item ">
                        <a href="/verify" class="nav-link"  >
                          <i class="link-icon" data-feather="check"></i>
                          <span class="link-title">Verify</span>

                        </a>





          </ul>
        </div>
      </li>


    </ul>
  </div>
</nav>
<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Version:</h6>
      <a class="theme-item" href="https://www.nobleui.com/laravel/template/light/">
        <img src="assets\images\screenshots\light.jpg" alt="light version">
      </a>
      <h6 class="text-muted mb-2">Dark Version:</h6>
      <a class="theme-item active" href="index.htm">
        <img src="assets\images\screenshots\dark.jpg" alt="light version">
      </a>
    </div>
  </div>
</nav>    <div class="page-wrapper">
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
      <li class="nav-item dropdown nav-apps">
        <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="grid"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="appsDropdown">
          <div class="dropdown-header d-flex align-items-center justify-content-between">
            <p class="mb-0 font-weight-medium">Web Apps</p>
            <a href="javascript:;" class="text-muted">Edit</a>
          </div>
          <div class="dropdown-body">
            <div class="d-flex align-items-center apps">
              <a href="apps\chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
              <a href="apps\calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
              <a href="email\inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
              <a href="general\profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
            </div>
          </div>
          <div class="dropdown-footer d-flex align-items-center justify-content-center">
            <a href="javascript:;">View all</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown nav-messages">
        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="mail"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="messageDropdown">
          <div class="dropdown-header d-flex align-items-center justify-content-between">
            <p class="mb-0 font-weight-medium">9 New Messages</p>
            <a href="javascript:;" class="text-muted">Clear all</a>
          </div>
          <div class="dropdown-body">
            <a href="javascript:;" class="dropdown-item">
              <div class="figure">
                <img src="assets\images\faces\face2.jpg" alt="userr">
              </div>
              <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                  <p>Leonardo Payne</p>
                  <p class="sub-text text-muted">2 min ago</p>
                </div>
                <p class="sub-text text-muted">Project status</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="figure">
                <img src="assets\images\faces\face3.jpg" alt="userr">
              </div>
              <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                  <p>Carl Henson</p>
                  <p class="sub-text text-muted">30 min ago</p>
                </div>
                <p class="sub-text text-muted">Client meeting</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="figure">
                <img src="assets\images\faces\face4.jpg" alt="userr">
              </div>
              <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                  <p>Jensen Combs</p>
                  <p class="sub-text text-muted">1 hrs ago</p>
                </div>
                <p class="sub-text text-muted">Project updates</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="figure">
                <img src="assets\images\faces\face5.jpg" alt="userr">
              </div>
              <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                  <p>Amiah Burton</p>
                  <p class="sub-text text-muted">2 hrs ago</p>
                </div>
                <p class="sub-text text-muted">Project deadline</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="figure">
                <img src="assets\images\faces\face6.jpg" alt="userr">
              </div>
              <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                  <p>Yaretzi Mayo</p>
                  <p class="sub-text text-muted">5 hr ago</p>
                </div>
                <p class="sub-text text-muted">New record</p>
              </div>
            </a>
          </div>
          <div class="dropdown-footer d-flex align-items-center justify-content-center">
            <a href="javascript:;">View all</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown nav-notifications">
        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="bell"></i>
          <div class="indicator">
            <div class="circle"></div>
          </div>
        </a>
        <div class="dropdown-menu" aria-labelledby="notificationDropdown">
          <div class="dropdown-header d-flex align-items-center justify-content-between">
            <p class="mb-0 font-weight-medium">6 New Notifications</p>
            <a href="javascript:;" class="text-muted">Clear all</a>
          </div>
          <div class="dropdown-body">
            <a href="javascript:;" class="dropdown-item">
              <div class="icon">
                <i data-feather="user-plus"></i>
              </div>
              <div class="content">
                <p>New customer registered</p>
                <p class="sub-text text-muted">2 sec ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="icon">
                <i data-feather="gift"></i>
              </div>
              <div class="content">
                <p>New Order Recieved</p>
                <p class="sub-text text-muted">30 min ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="icon">
                <i data-feather="alert-circle"></i>
              </div>
              <div class="content">
                <p>Server Limit Reached!</p>
                <p class="sub-text text-muted">1 hrs ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="icon">
                <i data-feather="layers"></i>
              </div>
              <div class="content">
                <p>Apps are ready for update</p>
                <p class="sub-text text-muted">5 hrs ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="icon">
                <i data-feather="download"></i>
              </div>
              <div class="content">
                <p>Download completed</p>
                <p class="sub-text text-muted">6 hrs ago</p>
              </div>
            </a>
          </div>
          <div class="dropdown-footer d-flex align-items-center justify-content-center">
            <a href="javascript:;">View all</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown nav-profile">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="assets\images\faces\face1.jpg" alt="profile">
        </a>
        <div class="dropdown-menu" aria-labelledby="profileDropdown">
          <div class="dropdown-header d-flex flex-column align-items-center">
            <div class="figure mb-3">
              <img src="assets\images\faces\face1.jpg" alt="">
            </div>
            <div class="info text-center">
              <p class="name font-weight-bold mb-0">Amiah Burton</p>
              <p class="email text-muted mb-3">amiahburton@gmail.com</p>
            </div>
          </div>
          <div class="dropdown-body">
            <ul class="profile-nav p-0 pt-3">
              <li class="nav-item">
                <a href="general\profile.html" class="nav-link">
                  <i data-feather="user"></i>
                  <span>Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:;" class="nav-link">
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
                  <i data-feather="log-out"></i>
                  <span>Log Out</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
  </div>
  <div class="d-flex align-items-center flex-wrap text-nowrap">
    <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
      <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
      <input type="text" class="form-control">
    </div>
    <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
      <i class="btn-icon-prepend" data-feather="download"></i>
      Import
    </button>
    <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
      <i class="btn-icon-prepend" data-feather="printer"></i>
      Print
    </button>
    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
      <i class="btn-icon-prepend" data-feather="download-cloud"></i>
      Download Report
    </button>
  </div>
</div>

















      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
  <p class="text-muted text-center text-md-left">Copyright © 2019 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>. All rights reserved</p>
  <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
</footer>    </div>
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
  <script src="assets\js\datepicker.js"></script>
</body>
</html>
