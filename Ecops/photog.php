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
</nav>
    

<style>
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: 200px;
	padding:%;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 2px 2px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>



<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/1.jpg">
      <img src="images/1.jpg" class="img">
    </a>
   
  </div>
</div>


<div class="responsive">
  <div class="gallery ">
    <a target="_blank" href="images/4.jpg">
      <img src="images/4.jpg" class="">
    </a>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/2.jpg">
      <img src="images/2.jpg"width="600" height="400">
    </a>

 </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/3.jpg">
          <img src="images/3.jpg"width="600" height="400">
        </a>  
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="images/6.jpg">
      <img src="images/6.jpg" width="600" height="400"><br>
      </a>
      
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/7.jpg">
      <img src="images/7.jpg"width="600" height="400">
      </a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/8.jpg">
      <img src="images/8.jpg"width="600" height="400">
      </a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/9.jpg">
      <img src="images/9.jpg"width="600" height="400">
      </a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/10.jpg">
      <img src="images/10.jpg"width="600" height="400">
      </a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/11.jpg">
      <img src="images/11.jpg"width="600" height="400">
      </a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/12.jpg">
      <img src="images/12.jpg"width="600" height="400">
      </a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/13.jpg">
      <img src="images/13.jpg"width="600" height="400">
      </a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/14.jpg">
      <img src="images/14.jpg"width="600" height="400">
      </a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/j1.jpg">
      <img src="images/j1.jpg"width="600" height="400">
      </a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/10.jpg">
      <img src="images/10.jpg"width="600" height="400">
      </a>
  </div>
  </div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/8.jpg">
      <img src="images/8.jpg"width="600" height="400">
      </a>
  </div>
</div>
  
<div class="clearfix"></div>

<div style="padding:6px;">
  
</div>

</body>
</html>
