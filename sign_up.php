<?php
require 'PHPMailerAutoload.php';
session_start ();
// get buyer email, password and name from db
$pc = "password";
$db = new mysqli ( 'localhost', 'root', $pc, 'borrow_db' );
if ($db->connect_error) :
	die ( "Could not connect to db: " . $db->connect_error );

    endif;

$firstNameData = trim($_POST ["first"]);
$lastNameData = trim($_POST ["last"]);
$emailData = trim($_POST ["email"]);
$streetData = trim($_POST ["street"]);
$cityData = trim($_POST ["city"]);
$stateData = trim($_POST ["state"]);
$zipData = trim($_POST ["zip"]);
$passwordData = md5(trim($_POST ["password"]));

$query2 = "select email from Users";
$result = $db->query ( $query2 );
$rows = $result->num_rows;
$unique = true;
for($i = 0; $i < $rows; $i ++) {
	$row = $result->fetch_array ();
	$emails_in_db = trim ( $row [0] );
	if ($emails_in_db == $_POST ["email"]) {
		$_SESSION ["error"] = "<h2>An account with this email already exists.</h2>";
		header ( 'Location: signup_cp.html' );
		$unique = false;
	}
}

if ($unique) {
	$query = "insert into Users (firstname, lastname, email, address, city, state, zip, password) values (\"$firstNameData\", \"$lastNameData\", \"$emailData\", \"$streetData\", \"$cityData\", \"$stateData\", \"$zipData\", \"$passwordData\")";
	$db->query ( $query ) or die ( "Invalid Insert: " . $db->error );
	header ( 'Location: signup.html' );
	
	// Send email confirmation
	$mail = new PHPMailer ();
	
	$mail->isSMTP (); // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com;smtp.gmail.com'; // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = 'borrowmarketplace@gmail.com'; // SMTP username
	$mail->Password = 'ecomm2017'; // SMTP password
	$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587; // TCP port to connect to
	
	$mail->setFrom ( 'borrowmarketplace@gmial.com', 'Borrow' );
	$mail->addAddress ( $emailData, $firstNameData . $lastNameData ); // Add a recipient
	                                                               
	// $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
	                                                               // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
	$mail->isHTML ( true ); // Set email format to HTML
	
	$mail->Subject = 'Welcome to Borrow!';
	$mail->Body = 'Thank you for registering with Borrow, the worlds largest marketplace of peer-to-peer rentals.';
	$mail->AltBody = 'Thank you for registering with Borrow, the worlds largest marketplace of peer-to-peer rentals.';
	
	if (! $mail->send ()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
}

?>