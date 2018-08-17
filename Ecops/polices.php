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

<!DOCTYPE html>
<html>
<head>
  <title>ECOPS-CITIZEN SERVICE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="a.css">
</head>
<body style="background-color:skyblue;">
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
<div class = "container">
<div class="row">
  <div class ="col-sm-8">
    <h2 style="color: red;">POLICE STATIONS</h2>
    <br>
    <img src="images/policee.jpg"style="height: 300px; width: 100%;>
 

</div>  

</div>

<div class="container">
  <div class="row"></div>
  <div class="col-sm-10">

    <br>
    <br>
  <p style="font-size: 17px;">
<br>
<br>
<br>
<H1><P>List of Police Station Of Chandigarh:<br>
Police Station = Phone No</P></H1>
<br>
<Br>

<p>11 Police Station 2747066 = 1311</p>
<p>17 Police Station 2773951 = 1317</p>

<p>19 Police Station 2775173 = 1362</p>

<p>26 Police Station 2790594 = 1326</p>

<p>3 Police Station 2740254 = 1439</p>

<p>31 Police Station 2662698 = 1460</p>

<p>34 Police Station 2662697 = 1334</p>

<p>36 Police Station 2662995 = 1361</p>

<p>39 Police Station 2690906 = 1339</p>

<p>Indl Area Police Station 2657344 = 1329</p>

<p>Mani Majra Police Station 2734082 = 1457 </p>
<div>
  <a href="https://ips.gov.in/">INDIAN POLICE SERVICES</a><div>
  </div>
</div>
  </div>
</div>
<div class="container">
  <div class="row"></div>
  <div class="col-sm-10">

<div style="position:fixed; background-color:#dff3fe; height:50px; width:100%; z-index:100">
</div>
<div style="height:400px;">
<div class="headercontainer" style="z-index:1000; padding:0px;">
<div class="header clearfix" style="background-color:transparent">
 <br>
 <br>

</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>