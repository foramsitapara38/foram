<?php
$url=$_SERVER['REQUEST_URI'];
$result=explode("/",$url);
//echo $url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  a.active{
    background-color:white;
    color:black !important;
    border-radius:5%;
  }
  </style>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo2.jpg" height="25%" width="25%"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php 
          if($result[2]=='index.php')
            echo "active";
          ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php 
          if($result[2]=='gallery.php')
            echo "active";
          ?>" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php 
          if($result[2]=='about.php')
            echo "active";
          ?>" href="about.php">About</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link  <?php 
          if($result[2]=='login.php')
            echo "active";
          ?>" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php 
          if($result[2]=='booking.php')
            echo "active";
          ?>" href="booking.php">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php 
          if($result[2]=='feedback.php')
            echo "active";
          ?>" href="feedback.php">Feedback</a>
        </li>   
      </ul>
    </div>
  </div>
</nav>

</body>
</html>


