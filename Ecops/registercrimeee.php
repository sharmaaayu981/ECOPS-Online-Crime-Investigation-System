<?php
require 'connection.php';

function register($conn, $name, $occ, $email, $age, $mob, $adhr, $ad1, $country, $city, $state, $pin, $Incident, $Person, $People, $Location, $Date, $Nearest){
	$rand=rand(0,3);
	$date=date("Y-m-d");
	$query=mysqli_query($conn, "INSERT INTO registered_complaints values('$name','$email', '$mob', '$ad1', '$country', '$occ', '$age', '$adhr','$state', '$city', '$pin', '','$rand','$People','$Nearest', '$People', '$Incident', '$date','$Location')");
	if ($query) {
		echo "COMPLAINT REGISTERED";
		header("Location:ECOPS2.php");
	}else{
		echo "COMPLAINT REGISTERATION FAILED".mysqli_error($conn);
	}

}

if(isset($_POST['submit'])){
	register($conn, $_POST['name'], $_POST['occupation'], $_POST['email'], $_POST['age'], $_POST['mobile'], $_POST['aadharNo'], $_POST['addr1'], $_POST['country'], $_POST['city'], $_POST['state'], $_POST['pin'],$_POST['Incident'], $_POST['Person'], $_POST['People'], $_POST['Location'],$_POST['Date'], $_POST['Nearest']);
	echo "ALL SET";
}else{

	echo "REGISTER CRIME HERE";
}
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Crime Report</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Sales Inquiry Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="./Sales Inquiry Form Responsive Widget Template_ Home __ W3layouts_files/style.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="./Sales Inquiry Form Responsive Widget Template_ Home __ W3layouts_files/css" rel="stylesheet">
</head>
<body style="background-image:url('images/back.jpg');>
	<!--header-->
	<div class="agile-header">
	</div>
	<!--//header-->
	<!---728x90--->
<!--main-->
	<div class="agileits-main">
	<img src="images/reppp.png" height="100px" width="100%">
	<div class="wrap" style="background:purple;opacity: 0.8; height:100%;">
		<form  method="POST">
			<ul>
				<li class="text">name  :  </li>
				<li><input name="name" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">occupation:  </li>
				<li><input name="occupation" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">E-mail  :  </li>
				<li><input name="email" type="text" required="E-mail"></li>
			</ul>
			<ul>
				<li class="text">Age :  </li>
				<li><input name="age" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">mobile no  :  </li>
				<li><input name="mobile" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Aadhar No :  </li>
				<li><input name="aadharNo" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">address:  </li>
				<li><input name="addr1" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">country  :  </li>
				<li><input name="country" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">state  :  </li>
				<li><input name="state" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">city  :  </li>
				<li><input name="city" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Zip/Pincode:  </li>
				<li><input name="pin" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Location Of Incident :  </li>
				<li><input name="Location" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Date Of Crime  </li>
				<li><input name="Date" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Nearest Police Station:  </li>
				<li><input name="Nearest" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">People Involved </li>
				<li><input name="People" type="text" required=""></li>
			</ul>
			<ul><li class="text">Name Of Accused</li>
				<li><input name="Person" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Describe The Incident  </li>
				<li><textarea name="Incident"></textarea></li>
			</ul>
			<div class="clear"></div>
			<div class="agile-submit">
				<input type="submit" name="submit" value="submit" target="ECOPS.php"> <a href="ECOPS.php"></a>
				<input type="reset" value="reset">
			</div>
			</form>
		</div>	
	</div>
<!--//main-->
<!---728x90--->
<!--footer-->
<div class="footer-w3">
</div>
<!--//footer-->
<!---728x90--->

</body></html>