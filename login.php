<?php
session_start (); // Starting Session
$error = ''; // Variable To Store Error Message
echo "A!<br>";
if (isset ( $_POST ['submit'] )) {
	echo "B!<br>";
	if (empty ( $_POST ['email'] ) || empty ( $_POST ['password'] )) {
		$error = "Username or Password is invalid";
	} else {
		echo "C!<br>";
		// Define $username and $password
		$username = $_POST ['email'];
		$password = $_POST ['password'];
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect ( "localhost", "root", "password" );
		// To protect MySQL injection for Security purpose
		$username = stripslashes ( $username );
		$password = stripslashes ( md5 ( $password ) );
		$username = mysql_real_escape_string ( $username );
		$password = mysql_real_escape_string ( $password );
		// Selecting Database
		$db = mysql_select_db ( "borrow_db", $connection );
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query ( "select * from Users where password='$password' AND email='$username'", $connection );
		$rows = mysql_num_rows ( $query );
		if ($rows == 1) {
			echo "D!<br>";
			$_SESSION ['login_user'] = $username; // Initializing Session
			header ( "location: profile.php" ); // Redirecting To Other Page
		} else {
			$error = "Username or Password is invalid";
			header ( "location: sign_in_cp.html" ); // Redirecting To Other Page
		}
		mysql_close ( $connection ); // Closing Connection
	}
}
?>