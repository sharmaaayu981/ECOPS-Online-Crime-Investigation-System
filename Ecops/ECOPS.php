<?php
require "connection.php";
session_start();




function validateCredentials($con, $email, $password){
$query=mysqli_query($con, "SELECT name from registered_users where email='$email' AND password='$password' LIMIT 1");
if ($query) {
  if (mysqli_num_rows($query)>0){
    $result=mysqli_fetch_array($query);
    $_SESSION['name']=$result[0];
    $_SESSION['email']=$email;
    $_SESSION['session']=TRUE;
  }
  else{

    echo "WRONG CREDENTIALS";
  }
  }
}

if(isset($_POST['logout'])){
  $_SESSION['session']=FALSE;
}


if(isset($_POST['submit'])){
  if((isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['password'])&&$_POST['password']!="")){
    validateCredentials($conn, $_POST['email'], $_POST['password']);
  }else{
    echo "Noting set";
  }
}



?>
<!DOCTYPE html>
<html>
<head>
	<title> ECOPS-CITIZEN SERVICE</title>
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
  <div class="container-fluid" style="height:70px;">
    <div class="navbar-header" style="height:70px;">
    	<img src="images/loggo.png" style="height: 70px;width: 100px; margin-left:1px; float:left;">
      <a class="navbar-brand" href="ECOPS.php" style="font-size: 20px; font-weight: bold; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">ECOPS-CITIZEN SERVICE</a>
    </div>
    <ul class="nav navbar-nav" style="font-size:18px; font-style: normal; font-weight: bold; color:#FF5722; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
      <li><a  href="ECOPS.php">HOME</a></li>
      <li><a href="ECOPS2.php">SERVICES</a></li>
      <li><a href="about.php">ABOUT US</a></li>
      <li><a href="contact.php">CONTACT US</a></li>
    </ul>
 <?php 
    if($_SESSION['session']==TRUE){

  echo "<form method=\"POST\" style=\"float:right;\"><span style=\"color:white; font-size:20px; margin:10px;\">$_SESSION[name]</span>"."<span><button type=\"submit\"  name=\"logout\" class=\"btn btn-info btn-lg\" style=\" font-size:15px;\">Log Out</button></span></form>";

}else{
  
  echo "<a type=\"button\" class=\"btn btn-info btn-lg\" href=\"registrationp.php\" style=\"float:right;  margin:10px;\">Register</a>";
  echo "<button type=\"\" name=\"submit\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\"  style=\"float:right;  margin:10px;\">Sign In</button>";
}?>

  

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">


		<div class="modal-content">
      <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" name="submit" class="ECOPS.html">Submit</button>
</form>
      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
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
  <div class="carousel-inner" style="height:500px;">
    <div class="item active">
      <img src="images/r2.jpg" alt="Chania" style="height: 500px; width: 100%;">
      <div class="carousel-caption">
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="images/wmn.jpg" alt="Chicago" style="height: 500px; width: 100%;">
      <div class="carousel-caption">
        <h3 style="background-color: green;" >ECOPS INVESTIGATORY SYSYTEM </h3>
        
      </div>
    </div>

    <div class="item">
      <img src="images/cisf.jpg" alt="New York" style="height: 500px; width: 100%;">
      <div class="carousel-caption">
        <h3 style="background-color: grey;">AVAILABLE TO SEARVE YOU</h3>
        
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
 </br>
	
<div class="container" style="background:skyblue; width:100%;">


  <div class="row" style=" width:100%; border-radius:50px;">

  <div class="col-sm-4" style="background-color:skyblue; width:12.5%; height:100%;font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';  ">
      <b style="color:#800000;"><b>OFFICE ORDER</b>
     <marquee onmouseover="stop()" onmouseout="start()" behavior="scroll" direction="up" height="482px" >
	<ul style="color:blue;text-align:justify;">
	<li>Budget allotment for the repair and maintenance for the year 2018-19 </li></br> 
	<li> newest-Circular No 2 of 2018 Empowerment of Constables for enforcement of MV Act and Rules</li></br>
    <li>HP Police Half Marathon 2018 Registration Form</li></br>
	<li>Expression of intrest for Junior Cyber Forensic Consultant </li></br>
	<li>Right to Public Service Guaranty Act 2011 Implementation Report of 4th Quarter</li></br>
	</marquee>
    </ul>
 </div>

	<div class="col-sm-4" style="background-color:skyblue; width:25%; height:510px;font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif'; ">
      
 <h3 style="text-align: center; color:darkblue; "><b>INDIAN POLICE</b></h3>
<img src="images/bro.jpg" class="img-circle" alt="Cinque Terre" style="height: 200px;width: 300px; margin-left: auto;margin-right: auto; display: block; ">
 <p align="justify" style="font-size: 17px;">
The Indian Police Service (Bhartiya Pulis Seva) or IPS, is an All India Service for policing.It replaced the Indian Imperial Police in 1948, a year after India gained independence from Britain.
The service is not a force itself but provides leaders and commanders to staff the state police and all-India Central Armed Police Forces. Its members are the senior officers of the police.</p>
    </div> 
    <div class="col-sm-4" style="background-color:skyblue;width:25.5%; height:510px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
     <h3 style="text-align: center; color:darkblue;"><b>LAW AND ORDER</b></h3>
     <img src="images/LD.jpg" class="img-circle" alt="Cinque Terre" style="height: 200px;width: 300px;margin-left: auto;margin-right: auto; display: block ">

      <p align="justify" style="font-size: 17px;">The Police force in the country is entrusted with the responsibility of maintenance of public order and prevention and detection of crimes. Each state and union territory of India has its own separate police force. Article 246 of the Constitution of India (External website that opens in a new window) designates the police as a state subject, which means that the state governments frame the rules....</p>
    </div>
    <div class="col-sm-4" style="background-color:skyblue;width:24.5%;height:510px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
      <h3 style="text-align: center; color:darkblue;"><b>JUDICIORY SYSTEM</b></h3>
           <img src="images/jud.jpeg" class="img-circle" alt="Cinque Terre" style="height: 200px;width: 300px;margin-left: auto;margin-right: auto; display: block ">

      <p align="justify" style="font-size: 17px;">The Indian Judiciary administers a common law system of legal jurisdiction, in which customs, precedents and legislation, all codify the law of the land. It has in fact, inherited the legacy of the legal system established by the then colonial powers and the princely states since the mid-19th century, and has partly retained characteristics of practices from the ancientand medieval times.</p>
    </div>
	 <div class="col-sm-4" style="background-color:skyblue; width:12.5%; height:100%;font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
      <b style="color:#800000;"><b>NEWS AND UPDATES</b>
     <marquee onmouseover="stop()" onmouseout="start()" behavior="scroll" direction="up" height="482px">
	<ul style="color:blue; text-align:justify;">
	<li>AK-56 seizure: Thane Police gets custody of alleged aide of Dawood Ibrahim</li></br>
    <li>Police Current Affairs Jharkhand police initiates Tare Zameen Par programme for underprivileged kids.</li></br>
    <li>योगी का निर्देश : सामान्य आपराधिक मामलों में रात को कार्रवाई नहीं करेगी UP पुलिस</li></br>
	<li>Upcoming Test Result</li></br>
	<li>7 year old boy electrocuted to death in UP</li></br>
	</marquee>
    </ul>
 </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="background-color: skyblue;  ">
      <p style="height: 10px;"></p>
    </div>
  </div>

  </div><div class="container" style="position: relative; text-align: center; background-color:skyblue; height=100%; width:100%;">
  <div class="row" style="background-image:url('images/bb.png'); height:550px;"><h3 style="text-align:center; color:White;font-size:26px;"><b style="font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif'; ">SAFETY & SECURITY</b></h3>
    <div class="col-sm-3" style=" width:20%;background-color:#;margin-top:150px;"><a href="pdf/childern.pdf" target="_blank" style="text-decoration:none; color: red; font-size: 26px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
	<img src="images/child.png" class="img-circle"  style=" height: 200px; width:250px;"><div class="centered" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);"></div></a></div>
    <div class="col-sm-3" style=" width:20%;background-color:#;margin-top:150px;"><a href="pdf/Women.pdf" target="_blank"style="text-decoration:none; color: red; font-size: 26px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
	<img src="images/women.png" class="img-circle" style="height: 200px; width:250px;">
	<div class="centered" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);"></div></a></div>
    <div class="col-sm-3" style=" width:20%;background-color: #;margin-top:150px;"><a href="pdf/Mobile.pdf" target="_blank"style="text-decoration:none; color: red; font-size: 26px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';">
	<img src="images/mobile-app.png" class="img-circle" style="height: 200px; width:250px;">
	<div class="centered" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);"></div></a></div>
    <div class="col-sm-3" style=" width:20%;background-color: #;margin-top:150px;"><a href="pdf/internet.pdf" target="_blank"style="text-decoration:none; color: red; font-size: 26px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';"><img src="images/internet.png" class="img-circle" style="height: 200px; width:250px;">
	<div class="centered" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);"></div></a></div>
	<div class="col-sm-3" style=" width:20%;background-color: #;margin-top:150px;"><a href="pdf/Road.pdf" target="_blank"style="text-decoration:none; color: red; font-size: 26px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';"><img src="images/road.png" class="img-circle" style="height: 200px; width:250px;">
	<div class="centered" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);"></div></a></div>
	</div>
	</div>
	</div>
  <div class = "mid" style="height:600px; width:100%; background-color:skyblue; margin-top:0px; ">
  
  <table  width="99%" height="100%" length="98%"  style="margin-left:10px; background:skyblue">
<tr>
	<th colspan="4"><h1 style="text-decoration:none; color:darkblue; font-size: 26px; font-family:'Palatino Linotype', 'Book Antiqua','Palatino, serif';text-align:center;"><b>ECOPS-सेवा, सुरक्षा, शांति</b></h1></th>
	
</tr>
<tr>
	<td colspan="3"><img src="images/kiran.jpg"style="height:290px;width:300px;">&nbsp; &nbsp;<img src="images/app.png"style="height:290px;width:300px;">&nbsp; &nbsp;<img src="images/bose.jpg"style="height:290px;width:300px;">
	</td>
	
    <td >
    <video width="550px" height="300px" controls autoplay>
  <source src="images/vdo.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">

</video>
	</td>
	</tr>
<tr >
	<td><b>Address</b>-New Delux Building,<br/>Jan Marg,Sector 17,<br/>Chandigarh, 160017</td>
	<td colspan="2"><b>EMAIL-</b>Sharmaaayu981@gmail.com &nbsp; <b>CONTACT NO-</b>9872577654</td>
	<td> VISIT US ON:-  &nbsp;<a href="https://www.facebook.com/policethepoliceACP/" target="blank"><img src="images/fb.png" class="img-circle" alt="fb" height="70px" width="100px">Facebook</a> &nbsp; &nbsp;         
	<img src="images/wht.png" class="img-circle" alt="whatsapp" height="80px" width="100px"> Whatsapp-9872577654</td
</tr>

<tr>
	<td colspan="4"><marquee onmouseover="stop()" onmouseout="start()" behavior="scroll" direction="left" ><a style="color:blue;"  href="updates" target="blank">CLICK HERE FOR NEW UPDATES. NEW UPDATES ARE AVILABLE FOR ALL THE BROWSER (Version 6.7.23.)"</a></marquee>
</tr>
<tr style="background:skyblue;">
<td colspan="4" style="font-family:arial; font-size:10px; color:blue; text-align:center;">LinkedIn | Terms & Conditions | Privacy Policy</br>
The contents in this website are copyright protected. You will be prosecuted to the maximum extent under Information Technology Act, 2000 if we find you in violation to this warning.</br>
Designed & Developed by: Ayush Sharma.</td>
</tr>

</table>
  </div>
  
	


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>