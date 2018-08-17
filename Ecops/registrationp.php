<?php
require 'connection.php';
	echo "REGISTER HERE\t";

function register($conn, $name, $occ, $email, $age, $mob, $adhr, $ad1, $ad2, $country, $city, $state, $zip, $other,$pass){

	$query=mysqli_query($conn, "INSERT INTO registered_users values('$name','$email', '$mob', '$ad1', '$country', '$occ', '$age', '$adhr', '$ad2', '$state', '$city', '$zip', '$other', '','$pass')");
	if ($query) {
		echo "REGISTERED";
		header("Location:ECOPS2.php");
	}else{
		echo "REGISTERATION FAILED";
	}

}

$rand=(rand(1,9999));
echo $rand."<br>";

if(isset($_POST['submit'])){
	register($conn, $_POST['name'], $_POST['occupation'], $_POST['email'], $_POST['age'], $_POST['mobile'], $_POST['aadharNo'], $_POST['addr1'], $_POST['addr2'], $_POST['country'], $_POST['city'], $_POST['state'], $_POST['pin'], $_POST['other'],$_POST['pass']);
	
}
?>
<!DOCTYPE html>
<html>
<html>
<title>Registration Form</title>
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
<body style="background-image:url('images/back.jpg')";>
	<!--header-->
	<div class="agile-header">
	</div>
	<!--//header-->
	<!---728x90--->
<!--main-->
	<div class="agileits-main">
		<div class="wrap" style=background:purple;opacity: 0.8;>
		<img src="images/reg2.jpg" height="100px" width="100%">
		<form method="post" style="height:70%";>
		   
			<ul>
				<li class="text" >name  : </li>
				<li style="text-color:black";><input name="name" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">occupation:  </li>
				<li><input name="occupation" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">E-mail  :  </li>
				<li><input name="email" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Password  </li>
				<li><input name="pass" type= "text"></textarea></li>
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
				<li class="text">address 1  :  </li>
				<li><input name="addr1" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">address 2  :  </li>
				<li><input name="addr2" type="text" required=""></li>
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
				<li class="text">zip/pin code  :  </li>
				<li><input name="pin" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Other Personal information  </li>
				<li><textarea name="other"></textarea></li>
			</ul>
			
			<div class="clear"></div>
			<div class="agile-submit">
				<input type="submit" value="submit" name="submit" target="ECOPS2.php">
				<input type="reset" value="reset" name="reset">
			</div>
			</form>
		</div>	
	</div>
<!--//main-->
<!---728x90--->
<!--footer-->
<div class="footer-w3">
</div>
</body>
</html>

<!---728x90--->

</body></html>