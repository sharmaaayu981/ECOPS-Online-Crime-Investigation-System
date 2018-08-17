
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
<body style="background:skyblue;">
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
    <h2 style="color: red;">Achievement</h2>
    <br>
    <img src="images/achv.jpg "style="height: 300px; width: 1200%>
 

</div>  

</div>

<div class="container">
  <div class="row"></div>
  <div class="col-sm-100">

    <br>
    <br>
  <p style="font-size: 20px;">
  	<br>
  	<br>


<p>1. Shri K. Muthiam Reddy, IPS was awarded the President's Police Medal for Distinguished Service on the occasion of Republic Day, 1999.</p>

<p>2. Dr. P.V.K. Prasad, IPS, DIG / Principal, CDTI, Hyderabad was awarded with Police Medal for Meritorious Service in 2012 </p>

<p>3. Shri Amrit Raj, IPS, DIG / Principal, CDTI, Hyderabad was awarded with Police Medal for Meritorious Service in 2015. </p>

<p>4. Shri Sudhakar Deshmukh, Assistant, CDTI, Hyderabad was awarded with Police Medal for Meritorious Service in 2014.</p>

<br>
<br>



   <H>Developing Special Investigator (DSI) Course:-</H>

        <p>Central Detective Training Institutes, Ghaziabad also conducts courses to develop "Special Investigators"in various fields of investigation to enhance their investigative skills in specialised fields. Participants of this course are also sent for training in leading Police Training Institutions abroad.</p>.



<h>Anti-Terrorism Assistance(ATA) Courses:-</h>

        <p>Central Detective Training Institutes, Ghaziabad has attained a status of becoming a premier institute for conducting ATA courses organised by the United States Diplomatic Security Services to train civilian security and law enforcement agencies in police procedures that deal with terrorism. CDTI is scheduled to conduct 04 ATA courses in the year 2017.</p>
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