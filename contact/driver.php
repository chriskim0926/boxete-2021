<?php
// database connection code
if(isset($_POST['txtFirstName']))
{

$con = mysqli_connect('localhost', 'jcl3217', 'Dl433123!','db_main');
// get the post records

$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$txtAddress = $_POST['txtAddress'];
$txtCity = $_POST['txtCity'];
$txtState = $_POST['txtState'];
$txtZipcode = $_POST['txtZipcode'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtPhonetype = $_POST['txtPhonetype'];
$txtOtherCompany = $_POST['txtOtherCompany'];	


// database insert SQL code
$sql = "INSERT INTO `tbl_driver` (`id`, `fldFirstname`, `fldLastname`, `fldAddress`, `fldCity`, `fldState`, `fldZip`, `fldEmail`, `fldPhone`, `fldPhonetype`, `fldOthercompany`) VALUES ('0', '$txtFirstName','$txtLastName','$txtAddress', '$txtCity', '$txtState', '$txtZipcode', '$txtEmail', '$txtPhone', '$txtPhonetype', '$txtOtherCompany')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	

	header("Location:https://boxete.com/partner/driver.html"); 
		echo '<script>alert("Thank you for part of BOXETE!!")</script>';
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>