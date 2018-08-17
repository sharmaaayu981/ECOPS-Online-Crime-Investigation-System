<?php
require 'connection.php';
session_start();
$_SESSION['caseDeatil']=Array();
function complaintFinder($conn, $complainID, $complainName){
	$query=mysqli_query($conn, "SELECT * FROM registered_complaints where id='$complainID' AND name='$complainName' LIMIT 1");
	if($query&&mysqli_num_rows($query)>0){
	$row=mysqli_fetch_row($query);
		$_SESSION['caseDeatil']=$row;
	header("Location: cased.php");
	/*    echo "<div style=\"background-color: white;\">";
		echo "<label>Name</label><h3>'$row[0]'</h3>";
		echo "<label>Email</label><h3>'$row[1]'</h3>";
		echo "<label>Phone</label><h3>'$row[2]'</h3>";
		echo "<label>Address</label><h3>'$row[3]'</h3>";
		echo "<label>Country</label><h3>'$row[4]'</h3>";
		echo "<label>Occupation</label><h3>'$row[5]'</h3>";
		echo "<label>Age</label><h3>'$row[6]'</h3>";
		echo "<label>Aadhar No</label><h3>'$row[7]'</h3>";
		echo "<label>State</label><h3>'$row[8]'</h3>";
		echo "<label>City</label><h3>'$row[9]'</h3>";
		echo "<label>Pincode</label><h3>'$row[10]'</h3>";
		echo "<label>CaseId</label><h3>'$row[11]'</h3>";
		echo "<label>Status of crime</label><h3>'$row[12]'</h3>";
		echo "<label>People Involved</label><h3>'$row[13]'</h3>";
		echo "<label>Nearest Police Station</label><h3>'$row[14]'</h3>";
		echo "<label>Accused</label><h3>'$row[15]'</h3>";
		echo "<label>Describe Incident</label><h3>'$row[16]'</h3>";
		echo "<label>date</label><h3>'$row[17]'</h3>";
	echo "</div>";
	*/}
}

if(isset($_POST['submit'])){
	if(isset($_POST['name'])&&isset($_POST['name'])){
		echo "searching database...";
		complaintFinder($conn, $_POST['name'],$_POST['password']);
		
	}
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>VIEW CASE DETAILS</title>
	<meta name="keywords" content="Apps Login Form Responsive widget, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
	<div class="agile-login">
		<h1>CASE DETAILS</h1>
		<div class="wrapper">
			<h2>CASE</h2>
			<div class="w3ls-form">
				<form  method="post">
					<label>CASE NO</label>
					<input type="text" name="name" placeholder="CASE N0" required/>
					<label>NAME</label>
					<input type="text" name="password" placeholder="NAME" required />
					<input type="submit" name="submit"  value="VIEW DETAILS"/>
				</form>
			</div>
			</div>
		</div>
		<br>
</body>
</html>