<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect ( "localhost", "root", "password" );
// Selecting Database
$db = mysql_select_db ( "borrow_db", $connection );
session_start (); // Starting Session
                  // Storing Session
$user_check = $_SESSION ['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = mysql_query ( "select email, firstname, lastname from Users where email='$user_check'", $connection );
$row = mysql_fetch_assoc ( $ses_sql );

$_SESSION['email'] = $row['email'];
$_SESSION['firstname'] = $row['firstname'];
$_SESSION['lastname'] = $row['lastname'];

if (! isset ( $_SESSION['email'] )) {
	mysql_close ( $connection ); // Closing Connection
	header ( 'Location: index.php' ); // Redirecting To Home Page
}
?>
