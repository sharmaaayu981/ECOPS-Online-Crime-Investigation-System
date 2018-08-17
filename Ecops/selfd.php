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
    <h2 style="color: red;">SELF DEFENSE TIPS</h2>
    <br>
    <img src="images/self.png "style="height: 300px; width: 100%;>
 

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
<p>1. Look where you're going. Check out the gas station, ATM, 7-Eleven etc. before you pull up/go in so you don't become part of a stickup in progress.</p>

<p>2. Wake up. Turn off your iPod/iPhone etc. when out in public. Don't jog with earphones. </p>

<p>3. Maintain a Personal Comfort Zone. No stranger or hostile relation is allowed to get closer than 5 feet to you without vetting or permission. Period. If they do, attack the attacker  [Brad Steiner]. Practice a relaxed, non-threatening listening stance you can explode from (see the "Jack Benny stance" in our books How to Fight For Your Life and Attack Proof and the Guided Chaos Combatives and Companion Part 1 DVDs.  </p>

<p>3b. Just Say No. Never accept offers of help from strangers ("can I carry your packages?"). This was a favorite ruse of serial killers such as Ted Bundy. If things feel wrong, run away screaming. If you can't run, you'll have to fight. Learn how: both hand-to-hand and weapons.  </p>

<p>4. Walk wide around building corners. Don't get jumped.</p>

<p>5. React. Practice a high speed flinch response in the event you're surprised by a sound, movement or touch (see the "Fright Reaction" in the above resources).</p>

<p>6. Watch your drink. Someone could slip a knock out drug in your cocktail. Typical abduction/rape/murder ruse.</p>

<p>7. No stranger gets in your house. Ever. Even if it's a little girl screaming to use your phone to call her daddy because her mommy's lying in the road bleeding to death. Call 911 for her. Otherwise, you open the door and 3 mutants rush in and a horrific home invasion begins.</p>

<p>8. Flat tire in a bad neighborhood? Drive on your rims. New wheels are a small price to pay for avoiding a violent car jacking.</p>
<p>9. People give you a bad feeling as you walk down a street? Do you: Make eye contact? Don't make eye contact? Look assertive? Reach for your gun? Walk down a different street.</p>

<p>10. You're being mugged for your money. Don't fish around in your purse/wallet for bills. Be cooperative. Give them your whole wallet (prepare a separate "mugging" wallet with a few dollars).  But...</p>

<p>11. Never go to crime scene #2. If all they want is money, fine. But if they want to take you somewhere, make your stand and fight for your life, right now. You stand a better chance of surviving. If you go with them, statistics say will you not escape or be rescued. You will probably die or be so f'd up you'll wish you had died.</p>
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