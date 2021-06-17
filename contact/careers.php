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

// database insert SQL code
$sql = "INSERT INTO `tbl_career` (`id`, `fldFirstname`, `fldLastname`, `fldAddress`, `fldCity`, `fldState`, `fldZip`, `fldEmail`, `fldPhone`, `fldPhonetype`) VALUES ('0', '$txtFirstName','$txtLastName','$txtAddress', '$txtCity', '$txtState', '$txtZipcode', '$txtEmail', '$txtPhone', '$txtPhonetype')";

// insert in database 
$rs = mysqli_query($con, $sql);

	$to = "jae@newcricketwireless.com"; // this is your Email address
    $from = $_POST['txtEmail']; // this is the sender's Email address
    $$txtFirstName = $_POST['txtFirstName'];
    $txtLastName = $_POST['txtLastName'];
    $subject = "BOXETE - Career form submission";
    $message = $txtFirstName . " " . $txtLastName . " We got an career submission from " . "\n\n Please check the submission details" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }	



?>
