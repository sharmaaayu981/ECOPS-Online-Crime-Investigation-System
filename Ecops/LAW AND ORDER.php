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

<div class = "container">
<div class="row">
  <div class ="col-sm-8">
    <h2 style="color: red;">LAW AND ORDER OF INDIA</h2>
    <br>
    <img src="images/j1.jpg "style="height: 300px; width: 150%;>
 

</div>  

</div>

<div class="container">
  <div class="row"></div>
  <div class="col-sm-100">

    <br>
    <br>
  <p style="font-size: 17px-;"> 

The Police force in the country is entrusted with the responsibility of maintenance of public order and prevention and detection of crimes. Each state   and union territory of India has its own separate police force. Article 246 of the Constitution of India  designates the police as a state subject, which means that the state governments frame the rules and regulations that govern each police force. </p>
<p>
These rules and regulations are contained in the police manuals of each state force.The Police force in the state is headed by the Director General of Police/Inspector General of Police. Each State is divided into convenient territorial divisions called ranges and each police range is under the administrative control of a Deputy Inspector General of Police. A number of districts constitute the range. District police is further sub-divided into police divisions, circles and police-stations.Besides the civil police, states also maintain their own armed police and have separate intelligence branches, crime branches, etc. Police set-up in big cities like Delhi, Kolkata, Mumbai, Chennai, Bangalore, Hyderabad, Ahmedabad, Nagpur, Pune, Bhubaneswar-Cuttack etc. is directly under a Commissioner of Police who enjoys magisterial powers. All senior police posts in various states are manned by the Indian Police Services (IPS) cadres, recruitment to which is made on all-India basis.</p>

<p>
The Central Government maintains Central Police forces, Intelligence Bureau (IB), Central Bureau of Investigation (CBI) institutions for training of police officers and forensic science institutions to assist the state in gathering intelligence, in maintaining law and order, in investigating special crime cases and in providing training to the senior police officers of the state governments.

Law of India refers to the system of law in modern India. India maintains a hybrid legal system with a mixture of civil, common law and customary or religious law within the legal framework inherited from the colonial era and various legislation first introduced by the British are still in effect in modified forms today. Since the drafting of the Indian Constitution, Indian laws also adhere to the United Nations guidelines on human rights law and the environmental law. Certain international trade laws, such as those on intellectual property, are also enforced in India.

Indian personal law is fairly complex, with each religion adhering to its own specific laws. In most states, registering of marriages and divorces is not compulsory. Separate laws govern Sikhs, Hindus, Muslims, Christians, and followers of other religions. The exception to this rule is in the state of Goa, where a uniform civil code is in place, in which all religions have a common law regarding marriages, divorces, and adoption. In the first major reformist judgment for the last decade, the Supreme Court of India banned the Islamic practice of "Triple Talaq" (divorce by uttering of the "Talaq" word thrice by the husband).[1] The landmark Supreme Court of India judgment was welcomed by women activists across India.[2]

As of January 2017, there were about 1,248 laws.[3] However, since there are Central laws as well as State laws, it is difficult to ascertain their exact numbers as on a given date and the best way to find the Central Laws in India is from the official website.</p>
<p>
<H4>List of constitutional rights</p></H4>

<P>
<div>
<p>a. All rights already recognized in the above titles, and in the Constitution as amended.</p>
<p>b. Due process and efficient remediation</p>
<p>1. General</p>
<p>1. Due notice of time, place, manner, parties, and subject of any proceeding with sufficient time to respond.</p>
<p>2. Fair hearing and decision on the legal merits, with redress for just grievances, including damages, property, or injunctive or declaratory relief.</p>
<p>3. Not to have just remedies made inaccessible or excessively difficult or costly.</p>
<p>4. Mandated testimony of witnesses.</p>
<p>5. Unimpeded access to courts, court filing, and grand juries, subject only to routine scheduling.</p>
<p>6. Direct presentation of complaints to a grand jury without the presence of any other government actor without the consent of the grand jury.</p>
<p>7. Standing to privately prosecute a public right without having been injured or expecting personal injury.</p>
<p>8. Not to be subject to retaliation.</p>
<p>9. Not to have admitted any plea or testimony induced by a plea bargain.</p>
<p>10. Not to have any property or asset taken or forfeited without civil or criminal judgment in a trial, with possession presumed to establish title unless proved otherwise.</p>
<p>11. Not to have any right, privilege, or immunity disabled by statute unless one is a minor, which by default shall be any individual under the age of 18 unless the disabilities of minority are extended or reduced by court order.</p>
</div>
</p>
  </div>
</div>
<div class="container">
  <div class="row"></div>
  <div class="col-sm-1000">

<div style="position:fixed; background-color:#dff3fe; height:50px; width:1000%; z-index:1000">
</div>
<div style="height:400px;">
<div class="headercontainer" style="z-index:1000; padding:px;">
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