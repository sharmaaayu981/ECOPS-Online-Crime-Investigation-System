<?php
require "connection.php";
session_start();
$sessionname="";
if ($_SESSION['session']==TRUE) {
  $sessionname= $_SESSION['name'];
  # code...
}else{
  $sessionname="Please login";
}
?>
<!DOCTYPE html>
<html>
<head>

  <title>Service</title>
	<title>ECOPS-CITIZEN SERVICE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="a.css">
</head>
<body style="background:blue;">
<style>
	a {
    color:white;
}
</style>
 

<nav class=".navbar.navbar-default.navbar-static-top" style="background-color: blue;">
  <div class="container-fluid"style="height:50px;">
    <div class="navbar-header">
    	<img src="images/loggo.png" style="height:50px;width: 100px; margin-left:1px; float:left;">
      <a class="navbar-brand" href="ECOPS.php" style="font-size: 22px; font-weight: bold; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">ECOPS-CITIZEN SERVICE</a>
    </div>
    <ul class="nav navbar-nav" style="font-size:18px; font-style: normal; font-weight: bold;font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
    <li><a  href="ECOPS.php">HOME</a></li>
      <li><a href="ECOPS2.php">SERVICES</a></li>
      <li><a href="about.php">ABOUT US</a></li>
      <li><a href="contact.php">CONTACT US</a></li>
    </ul>
    <span style="color: white; float: right; font-size: 25px;"><?php echo $sessionname; ?></span>
    <form class="navbar-form navbar-left" action="/action_page.php"  >
  <div class="input-group" style="float:right;margin-left:150px; text-align:center;font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/prs.Jpg" alt="Chania" style="height: 500px; width: 100%;">
      <div class="carousel-caption">
        <h3 style="background-color: green;">Seva hi Lakshya, A Force to Reckon With</h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="images/grl.jpg" alt="Chicago" style="height: 500px; width: 100%;">
      <div class="carousel-caption">
        <h3 style="background-color: darkgreen;" >Duty, Honour, Compassion</h3>
        
      </div>
    </div>

    <div class="item">
      <img src="images/DD.jpg" alt="New York" style="height: 500px; width: 100%;">
      <div class="carousel-caption">
        <h3 style="background-color: grey;">Protection of Good, Destruction of Bad</h3>
        
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

		<div class = "pqr" style="height:40px; width:100%; background-color:blue; font-size: 22px; font-weight: bold; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif'; "><h3 style="text-align:center; color:white;"><b>SERVICES FOR CITIZEN</b></h3>
		
    <ul class="nav navbar-nav" style="font-size:20px;font-weight: bold; background-color:blue;  font-weight: bold; font-family:'Palatino Linotype','Book Antiqua','Palatino, serif';width:80%; margin-left:10%;margin-right:10%;">
      <li class=""><a href="registrationp.php">REGISTER HERE</a></li>
      <li><a href="registercrimeee.php">REPORT CRIME</a></li>
      <li><a href="polices.php">POLICE STATIONS</a></li>
      <li><a href="LAW AND ORDER.php">LAW & ORDER</a></li>
      <li><a href="women.php">WOMEN PORTAL</a></li>
      <li><a href="case.php">CRIME STATUS</a></li>
    </ul>
    </div>
</div>><div class="container" style="position: relative; text-align: center; background-color:white; height=100%; width:100%;">
  <div class="row" style="background-color:pink;background-image:url('images/bb.png'); height:500px;">
    <div class="col-sm-3" style="background-color:#;margin-top:150px;"><a href="photog.php" target="blank" style="text-decoration:none; color: white; font-size: 26px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
	<img src="images/xxx.png" class="img-circle"  style=" height: 200px; width:250px;"><div class="centered" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">PHOTO GALLERY</div></a></div>
    <div class="col-sm-3" style="background-color:#;margin-top:150px;"><a href="achi.php" target="blank" style="text-decoration:none; color: white; font-size: 26px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
	<img src="images/xxx.png" class="img-circle" style="height: 200px; width:250px;">
	<div class="centered" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">ACHIEVEMENTS</div></a></div>
    <div class="col-sm-3" style="background-color: #;margin-top:150px;"><a href="selfd.php" target="blank" style="text-decoration:none; color: white; font-size: 26px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
	<img src="images/xxx.png" class="img-circle" style="height: 200px; width:250px;">
	<div class="centered" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">SELF DEFENCE TIPS</div></a></div>
    <div class="col-sm-3" style="background-color: #;margin-top:150px;"><a href="impno.php" target="blank" style="text-decoration:none; color: white; font-size: 26px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';"><img src="images/xxx.png" class="img-circle" style="height: 200px; width:250px;">
	<div class="centered" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">IMPORTANT NUMBERS</div></a></div>

  </div>
</div>
</div>

	<div class="he" style="height:30px; width:100%; background-color:blue;"><h3 style="text-align:center; color:White;font-size:22px;">CITY MAP</h3></div>
<div id="map" style="height:400px; width:100%; background:white;">
<script>

function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(30.7333, 76.7794),
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzn8_JM--WecJraJHTI4LRhm-2UlYVpDI&callback=myMap"></script>




</div>

	

  </div>
</div>
</div>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>