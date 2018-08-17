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
  <title>ECOPS INVETIGATORY SYSTEM</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="a.css">
</head>
<body style="background:#FFC300;" >
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

  <div class ="col-sm-8" style="width:600px; text-align:center;">
    <h2 style="color: White;">IMPORTANT NUMBERS</h2>
    <br>
    <img src="images/impno.jpg "style="height: 200px; width:1000px;>
</div>
</div>
<div class="abccc">
<object width="700px" height="850px" data="pdf/phoneno.pdf"></object> 
</div>

<div class="nn" style="height:500px; width:400px; margin-left:850px; margin-top:380px;">
<p>NATIONAL EMERGENCY NUMBER - 112</p>
<p>POLICE - 100</p>
<p>AMBULANCE - 102</p>
<p>Disaster Management Services - 108</p>
<p>Women Helpline - 1091</p>
<p>Women Helpline - ( Domestic Abuse ) - 181</p>
<p>Air Ambulance - 9540161344 </p>
<p>Aids Helpline - 1097</p>
<p>Anti Poison ( New Delhi )  - 1066  or 011-1066</p>
<p>Disaster Management ( N.D.M.A ) - 1078</p>
<p>Deputy Commissioner Of Police – Missing Child And Women - 1094</p>
<p>Railway Enquiry - 139</p>
<p>Senior Citizen Helpline - 1091 , 1291 </p>
<p>Railway Accident Emergency Service - 1072</p>
<p>Road Accident Emergency Service - 1073</p>
<p>Road Accident Emergency Service On National Highway For Private Operators - 1033</p>
<p>ORBO Centre, AIIMS (For Donation Of Organ) Delhi - 1060</p>
<p>Kisan Call Centre - 1551</p>
<p>Relief Commissioner For Natural Calamities - 1070</p>
<p>Children In Difficult Situation - 1098</p>
<p>Central Vigilance Commission. - 1964</p>
<p>Indian Railway Security Helpline - 1322</p>
<p>LPG Leak Helpline - 1906</p>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>