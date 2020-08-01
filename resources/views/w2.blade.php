<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SIH PROJECT</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/SIHLOGO.png" alt="" title="" /></img></a>

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about">About</a></li>
        
           @if (Route::has('login'))
                    @if (Auth::check())
                       <li> <a href="{{ url('/home') }}">Home</a></li>
                    @else
                      <li>  <a href="{{ url('/login') }}">Login</a></li>
                       <li> <a href="{{ url('/register') }}">Register</a></li>
                    @endif
                </div>
            @endif

  </header><!-- #header -->

  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Citizen Safety App</h1> </br>


    </div>
  </section><!-- #hero -->

   <section id="about">
       <div class="container">
         <div class="row about-container">

           <div class="col-lg-6 content order-lg-1 order-2">
             <h2 class="title">Few Words About this App</h2>
             <p>
This app ensures citizen safety anywhere and anytime.This web app is going to ensure the safety of civilians by using the GPS feature of the smartphone, and connects the user to the nearby emergency response teams which can further assist them, and at the same time their guardians  are also alerted.
</p>

           </div>
           </div>
</div>
</section>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
