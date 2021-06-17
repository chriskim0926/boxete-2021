<?php
include "../db/dbcareers.php";
// database connection code
if(isset($_POST['submit']))
{
	$to = "jae@newcricketwireless.com"; // this is your Email address
    $from = $_POST['txtEmail']; // this is the sender's Email address
    $$txtFirstName = $_POST['txtFirstName'];
    $txtLastName = $_POST['txtLastName'];
    $subject = "BOXETE - Career form submission";
    $message =  "Dear, BOXETE KITCHEN TEAM\n\nFull Name: " . $txtFirstName . " " . $txtLastName . "\nEmail: " . $txtEmail . "\nAddress:" . $txtAddress . "\n " . $txtCity . " " . $txtState . " " . $txtZipcode . "\n\nWe got a career submission from www.boxetepartner.com" . "\n\n Please check the submission details" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
		$message = "";
		 $message = "Success! You entered: ";
   
}	


?>
