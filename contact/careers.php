<?php
// database connection code
if(isset($_POST['submit']))
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

	// database insert SQL code
	$sql = "INSERT INTO `tbl_career` (`id`, `fldFirstname`, `fldLastname`, `fldAddress`, `fldCity`, `fldState`, `fldZip`, `fldEmail`, `fldPhone`, `fldPhonetype`) VALUES ('0', '$txtFirstName','$txtLastName','$txtAddress', '$txtCity', '$txtState', '$txtZipcode', '$txtEmail', '$txtPhone', '$txtPhonetype')";

	// insert in database 
	$rs = mysqli_query($con, $sql);

	
	$to = "jae@newcricketwireless.com"; // this is your Email address
    $from = $_POST['txtEmail']; // this is the sender's Email address
    $$txtFirstName = $_POST['txtFirstName'];
    $txtLastName = $_POST['txtLastName'];
    $subject = "BOXETE - Career form submission";
    $message =  "Dear, BOXETE KITCHEN TEAM\n\nFull Name: " . $txtFirstName . " " . $txtLastName . "\nEmail: " . $txtEmail . "\nAddress:" . $txtAddress . "\n " . $txtCity . " " . $txtState . " " . $txtZipcode . "\n\nWe got a career submission from www.boxetepartner.com" . "\n\n Please check the submission details" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
	session_start();
    $_SESSION['success_message'] = "Contact form saved successfully.";
    header("Location: ../careers.html");
    exit();
}	


?>
