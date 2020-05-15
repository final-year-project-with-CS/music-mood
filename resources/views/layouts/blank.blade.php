<!DOCTYPE html>
<html>
<head>
  <title>Music_Mood</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="_token" content="n0ycxN9yD9Owhv1iCI7DBkbGO4mZ0nefvlqkfuUQ">

  <link rel="shortcut icon" href="..\favicon.ico">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="..\assets\fonts\feather-font\css\iconfont.css">
  <link media="all" type="text/css" rel="stylesheet" href="..\assets\plugins\perfect-scrollbar\perfect-scrollbar.css">
  <!-- end plugin css -->


  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="..\css\app.css">
  <!-- end common css -->
  @yield('styles')
  </head>
  <body data-base-url="#">

    <script src="..\assets\js\spinner.js"></script>
    <div>
        @yield('contents')
    </div>
    <!-- base js -->
    <script src="..\js\app.js"></script>
    <script src="..\assets\plugins\feather-icons\feather.min.js"></script>
    <!-- end base js -->

    <!-- plugin js -->
        <!-- end plugin js -->

    <!-- common js -->
    <script src="..\assets\js\template.js"></script>
    <!-- end common js -->
    @yield('scripts')
    </body>
</html>
