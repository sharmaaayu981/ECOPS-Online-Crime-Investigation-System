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

  <title>About US</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="a.css">
</head>
<body style="background:skyblue;" >
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
<div class = "container">
<div class="row">
  <div class ="col-sm-8">
    <h2 style="color: White;">E-COPS  Online Police Investivgatory System</h2>
    <br>
    <img src="images/E-COPS.jpg "style="height: 300px; width: 80%; >
 

</div>  

</div>

<div class="container">
  <div class="row">
  </div>
  <div class="col-sm-10">

    <br>
    <br>
  <p align="justify" style="font-size: 17px;"> E-cops or police management system is a system which provides user a very easy access to the police crime investigation or crime solving system. In this project we provide a simple way to register or report a crime. This will very helpful in sensitive situation. In this project or system we can provide a platform to access police investigatory system. In this system we can report a crime and we can also know our status of reported crime. User will provide with a specific unique No. from which they can be aces their account.In this account all the information is present like name, complaint, officer which handled the case, progress of the case etc. Our main motive is to provide an easy accessible service to the citizen, so that they can directly interact with our investigation system.
Recent years have seen an increasing use of computers within Police Forces, not just in general administration (e.g. payroll, personnel, e-mail, general office suites etc.), but also as a tool to assist the core business activity of policing (preventing and solving) crime. Increasing crime rates and the (greater awareness of modern criminals) puts a strain on existing methods and techniques. There is therefore a clear need for the application of advanced software technologies in order to make the best use of limited resources. The objective of this project is to provide an insight into the role software systems are playing in Police Forces.
  </div>
</div>
</div>
 <div class = "mid" style="height:200px; width:1450px; background-color:skyblue; margin-top:0px; ">
<table  width="100%" height="100%" length="98%"  style="margin-left:10px; background:skyblue">
<tr >
	<td><b>Address</b>-New Delux Building,<br/>Jan Marg,Sector 17,<br/>Chandigarh, 160017</td>
	<td colspan="2"><b>EMAIL-</b>Sharmaaayu981@gmail.com &nbsp; <b>CONTACT NO-</b>9872577654</td>
	<td> VISIT US ON:-  &nbsp;<a href="https://www.facebook.com/policethepoliceACP/"><img src="images/fb.png" class="img-circle" alt="fb" height="70px" width="100px">Facebook</a> &nbsp; &nbsp;         
	<img src="images/wht.png" class="img-circle" alt="whatsapp" height="80px" width="100px"> Whatsapp-9872577654</td
</tr>

<tr>
	<td colspan="4"><marquee onmouseover="stop()" onmouseout="start()" behavior="scroll" direction="left" ><a style="color:blue;"  href="updates">CLICK HERE FOR NEW UPDATES. NEW UPDATES ARE AVILABLE FOR ALL THE BROWSER (Version 6.7.23.)"</a></marquee>
</tr>
<tr style="background:skyblue;">
<td colspan="4" style="font-family:arial; font-size:10px; color:blue; text-align:center;">LinkedIn | Terms & Conditions | Privacy Policy</br>
The contents in this website are copyright protected. You will be prosecuted to the maximum extent under Information Technology Act, 2000 if we find you in violation to this warning.</br>
Designed & Developed by: Ayush Sharma.</td>
</tr>

</table>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>