<?php

$enteredPassword = $_GET["password"];
$enteredUsername = $_GET["username"];

//Variables for connecting to your database.
//These variable values come from your hosting account.
$hostname = "codered1.db.11273437.hostedresource.com";
$username = "codered1";
$dbname = "codered1";

//These variable values need to be changed by you before deploying
$password = "Legends1!";
$usertable = "users";
$yourfield = "username";

//Connecting to your database
$conn = mysqli_connect($hostname, $username, $password, $dbname);

//Fetching from your database table.
$query = "SELECT * FROM $usertable";
$result = mysqli_query($conn, $query);

$flag = 0;
if ($result) {
    while($row = mysqli_fetch_assoc($result)) {
        if( $row["username"] == $enteredUsername && $row["password"] == $enteredPassword) {
	        	$flag = 1;
	        	$data = $row;
    	}
    }
}

if($flag == 0)
	echo 'Failure';
else
	echo json_encode($data);
?>