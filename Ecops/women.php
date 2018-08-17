<?php
require 'connection.php';

function register($conn, $name, $occ, $email, $age, $mobile, $aadharNo, $addr1, $country, $city, $state, $pin, $Incident, $Person, $People, $Location, $Date, $Nearest, $type){
	$rand=rand(0,3);
	$date=date("Y-m-d");
$qry = "INSERT INTO `registered_women`(`name`, `email`, `mobile`, `address1`, `country`, `occupation`, `age`, `aadharno`, `state`, `city`, `pin`, `Type`, `Accused`, `Police_station`, `People_involved`, `Incident`, `Date`, `Location`) VALUES ('$name','$email','$mobile','$addr1','$country','$occ','$age','$aadharNo','$state','$city','$pin','$type','$Person','$Nearest','$People','$Incident','$date','$Location')";

	$query=mysqli_query($conn, $qry);
	if ($query) {
		echo "COMPLAINT REGISTERED";
	}else{
		echo "COMPLAINT REGISTERATION FAILED".mysqli_error($conn);
	}

}

if(isset($_POST['submit'])){
	register($conn, $_POST['name'], $_POST['occ'], $_POST['email'], $_POST['age'], $_POST['mobile'], $_POST['aadharNo'], $_POST['addr1'], $_POST['country'], $_POST['city'], $_POST['state'], $_POST['pin'],$_POST['Incident'], $_POST['Person'], $_POST['People'], $_POST['Location'],$_POST['Date'], $_POST['Nearest'], $_POST['type']);
	echo "ALL SET";
}else{
	echo "REGISTER COMPLAINT HERE(WOMEN)";
}
?>
<!DOCTYPE html>
<!-- saved from url=(0073)https://p.w3layouts.com/demos/aug-2016/29-08-2016/sales_inquiry_form/web/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>WOMEN HELPLINE</title>
<style> 
body {
background-image:url("images/banner1.jpg");
}
</style>

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
<body style="background-image:url('images/womenem.jpg');  >

	<!--header-->
	<div class="agile-header" >
	</div>
	<!--//header-->
	<!---728x90--->
<!--main-->
	<div class="agileits-main">
		<div class="wrap" style="background:#FF6633; opacity: 0.8;">
		<form  method="POST" style="background-image:url('images/womenem.jpg'); height:80%;">
          
			<ul>
				<li class="text">name  :  </li>
				<li><input name="name" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">occupation:  </li>
				<li><input name="occ" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">E-mail  :  </li>
				<li><input name="email" type="text" required=""></li>
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
				<li class="text">Type of Crime</li>
				<li><input name="type" type="text" required=""></li>
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
			<ul>
				<li class="text">Name of Accused</li>
				<li><input name="Person" type="text" required=""></li>
			</ul>
			
				<ul>
				<li class="text">Describe The Incident  </li>
				<li><textarea name="Incident"></textarea></li>
			</ul>
			<div class="clear"></div>
			<div class="agile-submit">
				<input type="submit" name="submit" value="submit">
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