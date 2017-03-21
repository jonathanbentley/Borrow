<?php
    session_start();
    // get buyer email, password and name from db
    $pc = "password";
    $db = new mysqli('localhost', 'root', $pc, 'borrow_db');
    if ($db->connect_error):
        die ("Could not connect to db: " . $db->connect_error);
    endif;

    $firstNameData = $_POST["first"];
    $lastNameData = $_POST["last"];
    $emailData = $_POST["email"];
    $streetData = $_POST["street"];
    $cityData = $_POST["city"];
    $stateData = $_POST["state"];
    $zipData = $_POST["zip"];
    $passwordData = $_POST["password"];

    $query2 = "select email from Users";
    $result = $db->query($query2);
    $rows = $result->num_rows;
    $unique = true;
    for ($i = 0; $i < $rows; $i++){ 
        $row = $result->fetch_array();
        $emails_in_db = trim($row[0]);
        if ($emails_in_db == $_POST["email"]){
            $_SESSION["error"] = "<h2>An account with this email already exists.</h2>";
            header('Location: signup_cp.html');
            $unique = false;
        }
    }

    if ($unique) {
        $query = "insert into Users (firstname, lastname, email, address, city, state, zip, password) values (\"$firstNameData\", \"$lastNameData\", \"$emailData\", \"$streetData\", \"$cityData\", \"$stateData\", \"$zipData\", \"$passwordData\")";
            $db->query($query) or die ("Invalid Insert: " . $db->error);  
            header('Location: signup.html'); 
    }
?>