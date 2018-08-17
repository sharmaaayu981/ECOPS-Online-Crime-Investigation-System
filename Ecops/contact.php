<?php
require "connection.php"  ;
session_start();
$sessionname="";
if ($_SESSION['session']==TRUE) {
  $sessionname= $_SESSION['name'];
  # code...
}else{
  $sessionname="Please login";
}
?>
<?php

require 'connection.php';
	
function register($conn, $name,  $email, $country, $msg){

	$query=mysqli_query($conn, "INSERT INTO contact values( '$name',  '$email', '$country', '$msg')");
	if ($query) {
		echo "";
	}else{
		echo "Feedback FAILED";
	}

}



if(isset($_POST['Submit'])){
	register($conn, $_POST['name'],  $_POST['email'], $_POST['country'],  $_POST['message']);
	
}
?>

<html>
<head>
<title>Contact Us</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Sales Inquiry Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">


<script>
function validate()
{
	name=document.getElementById("name").value;
	email=document.getElementById("email").value;
		country=document.getElementById("country").value;
	message=document.getElementById("message").value;
	if(name == "")
	{
	alert("Name Field is empty");
	return false;
	}
	if(email == "")
	{
	alert("email Field is empty");
	return false;
	}
	if(country == "")
	{
	alert("country Field is empty");
	return false;
	}
	if(message == "")
	{
	alert("message Field is empty");
	return false;
	}
	return true;
	
}
</script>
<style>
*
{
 margin:0px; 
 padding:0px;
 }
.header
{
width:100%;
height:100px;
	background-color:skyblue;
}
#innerheader
{
width:1300px;
height:100%;

margin:auto;
}
#innerheader a 
{
    text-decoration: none;
    color: blue;
    font-size: 20px;
    padding: 15px;
    display:inline-block;
}
#heading
{ 
font-size:30px;
padding-top:10px;
float:left;
color:blue;
margin:20px;
}

ul {
  display: inline;
  margin: 0;
  padding: 0;
}
ul li
 {
display: inline-block;
}
ul li:hover 
{
background:white ;
}
ul li:hover ul 
{
display: block;
}
ul li ul 
{
  position: absolute;
  width: 200px;
  display: none;
}
ul li ul li 
{ 
  background: skyblue; 
  display: block; 
}
ul li ul li a 
{
display:block 
} 
ul li ul li:hover 
{
background:white ;
}

a:hover
{
    color:red;
}
#options
{ float:right;
padding:20px ;
}

 .begin
{
 width:100%;
height:250px;
}
#innerbegin
{  width:1300px;
height:100%;
margin:auto;

}
.small
{
width:100%;
height:50px;
margin-top:100px;

}
#innersmall
{
width:1000px;
height:100%;
margin:auto;
background-color:#2E86C1;
border-radius:30px;
}
.big{
	width:100%;
height:400px;
margin-top:20px;
}
#innerbig
{ width:1300px;
height:100%;
margin:auto;
background-color:#2E86C1;
border-radius:30px;
}
.left
{
	height:400px;
width:650px;
float:left;
}
.right
{
	margin-top:50px;
	
	height:400px;
width:450px;


float:right;

}

	
</style>


 <title>Service</title>
	<title>ECOPS-CITIZEN SERVICE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="a.css">
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
    <form class="navbar-form navbar-left" method="POST" action=""  >
  <div class="input-group" style="float:right;margin-left:150px; text-align:center;font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  
 <div class="carousel-inner">
    <div class="item active">
      <img src="images/raj.jpg" alt="Chania" style="height: 500px; width: 100%;">
      <div class="carousel-caption">
        <h3 style="background-color: green;">INDIAN POLICE IN SERVICE OF THE NATION.</h3>
        <p></p>
      </div>
    </div>
	</div>

  

		<br/>
		<div class="begin">
		  <div id="innerbegin">
		   <h4 style="color: green;"><strong> Cyber Crime Investigation Cell</strong></h4>

<p>Superintendent of Police, Cyber Crime Investigation Cell,</p>

<p>Central Bureau of Investigation,</p>

<p>5th Floor, Block No.3,</p>

<p>Lodhi Road, New Delhi 110003</p>

<p>Ph:011-24361271</p>

<p>Website-Speou9del@cbi.gov.in</p>
 
 <h4 style="color: green;"><strong>State Police Headquarter(Himachal Pradesh)</strong></h4>
<p>Sh. Anurag Garg, IPS	
<p>IGP (L&O)	ADGP Law &Order</p>
<p> Phone-91-177-2626960	9968081600</p>
<p>Director General of Police Nigam Vihar Shimla-2.171002</p>
<p>Website-adgp-lao-hp@nic.in</p>
		  </br></br><br/>
		   </div>
		  </div>
		  <div class="small">
		  
		  </div>
		  </div>
		  
		  <div class="big">
		  <div id="innerbig">
		  <div class="left">
		  <p style="color:white; font-size:15px ; margin-left:20px; margin-right:20px; padding-top:2px; text-align: justify;">Ecops or police management system is a system which provides user a very easy access to the police crime investigation or crime solving system. In this project we provide a simple way to register or report a crime. This will very helpful in sensitive situation. In this project or system we can provide a platform to access police investigatory system. ..</p>
		  </br></br>
		 
		  
		  <p style="color:white; font-size:15px ; margin-left:20px; text-align: justify; "> You can also provide us your feedback about the website.</br>
		  Just Enter your Name and Email address with the message you want to convey.</p>
		   </div>
		 
		  <div class="right">
		  
		  <form method="POST" onsubmit="return validate()">
		  <input type="text" id="name" name="name" placeholder="Name" maxlength="30" size="30" style=" height:30px; width:200px;" >
          <br><br>

        <input type="email" id="email" name="email" placeholder="Email" maxlength="30" size="30" style=" height:30px; width:200px; background-color:white; font-size:16px; font-family:airal; box-shadow:30%,20%,20%;" >
     <br><br>
	  <input type="text" id="country" name="country" placeholder="Country" maxlength="30" size="30" style=" height:30px; width:200px; background-color:white; font-size:16px; font-family:airal; box-shadow:30%,20%,20%;" >
     <br><br>
     <textarea  rows="6" cols="30" id="message" name="message"  placeholder="Write Something">     
	 </textarea>             
	 <br><br>
  
            <input type="submit" value="Submit" name="Submit" style=" color:darkblue; height:35px; width:70px; background-color:skyblue; border-radius:5px;font-size:20px; font-family:airal; " />
          </form> 

		  
		  </div>
		 
		  </div>
		  </div>
		  </br></br>
		  
		  
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
		</body>
</html>
		
		</head>
		<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>