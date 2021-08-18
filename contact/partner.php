<?php
// database connection code
$con = mysqli_connect('208.109.41.236', 'jcl3217', 'Dl433123!','db_main');
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
if(isset($_POST['submit']))
{	
	$to = "admin@boxete.com"; // this is your Email address
    $from = $_POST['txtEmail']; // this is the sender's Email address
    $$txtFirstName = $_POST['txtFirstName'];
    $txtLastName = $_POST['txtLastName'];
    $subject = "BOXETE - Partner form submission";
    $message =  "Dear, BOXETE KITCHEN TEAM\n\nFull Name: " . $txtFirstName . " " . $txtLastName . "\nEmail: " . $txtEmail . "\nExperience: ". $txtExperience . "\nTell us about yourself: ". $txtMessage1 . "\nWhat kind of cusine do you specialize: ". $txtMessage2 . "\nDo you have specific dishes in mind: ". $txtMessage3 . "\nWhy do you think BOXETE kitchen fits your need?: ". $txtMessage4 . "\n\nWe got a career submission from www.boxetepartner.com" . "\n\n Please check the submission details" . $_POST['message'];
	
	sleep(3);
    $headers = "From:" . $from;
    if(mail($to,$subject,$message,$headers)){
		http_response_code(200);
		header("Location: ../partner.html");
		} }

?>