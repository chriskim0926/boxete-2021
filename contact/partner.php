<?php
// database connection code
if(isset($_POST['txtFirstName']))
{

$con = mysqli_connect('localhost', 'jcl3217', 'Dl433123!','db_main');
// get the post records

$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$txtCompany = $_POST['txtCompany'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtPhonetype = $_POST['txtPhonetype'];
$txtExperience = $_POST['txtExperience'];
$txtMessage1 = $_POST['txtMessage1'];
$txtMessage2 = $_POST['txtMessage2'];
$txtMessage3 = $_POST['txtMessage3'];
$txtMessage4 = $_POST['txtMessage4'];


// database insert SQL code
$sql = "INSERT INTO `tbl_partner` (`id`, `fldFirstname`, `fldLastname`, `fldCompany`, `fldEmail`, `fldPhone`, `fldPhonetype`, `fldExperience`, `fldYourself`, `fldCusine`, `fldDishes`, `fldKitchenfits`) VALUES ('0', '$txtFirstName','$txtLastName','$txtCompany', '$txtEmail', '$txtPhone', '$txtPhonetype', '$txtExperience', '$txtMessage1', '$txtMessage2', '$txtMessage3', '$txtMessage4')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{

	header("Location:http://boxete.com/partner.html"); 
		echo '<script>alert("Thank you for part of Boxete!!")</script>';
}
}
else
{
	echo "Are you a genuine visitor?";
	
}


?>