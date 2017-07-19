<!DOCTYPE html>
<html lang="en">

<!-- important heading -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico">
  <title>project</title>
  <meta name="description" content="welcome to my website" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:bold|Roboto" rel="stylesheet">  google font -->
</head>

<body id="pageTop" data-spy="scroll">

  <!-- navigation -->
  <nav class="navbar navbar-default navbar-fixed-top"> <!-- add body{ padding-top:50px; } to fix problem with fixed top-->
    <div class="container">
      
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="#pageTop">Project</a>
      </div>
      
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="hidden"><a href="#pageTop" class="page-scroll"></a></li>
          <li><a href="#about" class="page-scroll">About</a></li>
          <li><a href="#services" class="page-scroll">Services</a></li>
          <li><a href="#contact" class="page-scroll">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->

    </div>
  </nav>

  <!-- Intro Row -->
  <div id="intro" class="introRow verticalAlign">
    <div class="verticalAlignElement ">
      <div class="container">
        <h1 class="post">Scrolling Nav</h1>
        <a class="btn btn-default page-scroll post" href="#about">Click Me to Scroll Down!</a>
      </div>
    </div>
  </div>

  <!-- About Row -->
  <div id="about" class="aboutRow verticalAlign">
    <div class="verticalAlignElement">
      <div class="container">
        <h1 class="post">About</h1>
      </div>
    </div>
  </div>

  <!-- Services Row -->
  <div id="services" class="servicesRow verticalAlign">
    <div class="verticalAlignElement">
      <div class="container">
        <h1 class="post">Services</h1>
      </div>
    </div>
  </div>

  <!-- Contact Row -->
  <div id="contact" class="contactRow verticalAlign">
    <div class="verticalAlignElement">
      <div class="container">
        <h1 class="post">Contact</h1>
      </div>
    </div>
  </div>

  <div class="footer">
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/viewportchecker.js"></script><!-- viewport checker for triggerAnimation.js -->
  <script src="js/animationTrigger.js"></script><!-- controls/triggers the animation.css on scroll -->
  <script src="js/respond.min.js"></script><!-- fix ie 6, 7 and 8 -->
  <script src="js/jquery.easing.min.js"></script><!-- scrolls to the row/section in the same page where id="name" and where link is href="#name" -->
  <script src="js/scrolling-nav.js"></script><!-- controls the smooth/ease scrolling by adding class="page-scroll to the link -->

</body>

</html>