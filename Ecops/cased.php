<?php
session_start();
$result=Array();
$result=$_SESSION['caseDeatil'];
echo $result[0];
$a="";
	    echo "<div style=\"background-color: white;\">";
		echo "<label>Name</label><h3>$result[0]</h3>";
		echo "<label>Email</label><h3>$result[1]</h3>";
		echo "<label>Phone</label><h3>$result[2]</h3>";
		echo "<label>Address</label><h3>$result[3]</h3>";
		echo "<label>Country</label><h3>$result[4]</h3>";
		echo "<label>Occupation</label><h3>$result[5]</h3>";
		echo "<label>Age</label><h3>$result[6]</h3>";
		echo "<label>Aadhar No</label><h3>$result[7]</h3>";
		echo "<label>State</label><h3>$result[8]</h3>";
		echo "<label>City</label><h3>$result[9]</h3>";
		echo "<label>Pincode</label><h3>$result[10]</h3>";
		echo "<label>CaseId</label><h3>$result[11]</h3>";
		echo "<label>Status of crime</label><h3>$result[12]</h3>";
		echo "<label>People Involved</label><h3>$result[13]</h3>";
		echo "<label>Nearest Police Station</label><h3>$result[14]</h3>";
		echo "<label>Accused</label><h3>$result[15]</h3>";
		echo "<label>Describe Incident</label><h3>$result[16]</h3>";
		echo "<label>date</label><h3>$result[17]</h3>";
	echo "</div>";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo $a;?>

</body>
</html>