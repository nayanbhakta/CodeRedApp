<?php

$enteredUser = $_GET["username"];

//Variables for connecting to your database.
//These variable values come from your hosting account.
$hostname = "codered1.db.11273437.hostedresource.com";
$username = "codered1";
$dbname = "codered1";

//These variable values need to be changed by you before deploying
$password = "Legends1!";
$usertable = "tasks";

//Connecting to your database
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Fetching from your database table.
$result = mysqli_query($conn, "SELECT * FROM $usertable WHERE user_assigned = '$enteredUser'");


// $stmt->bind_result($name, $description, $state, $points, $proofpic);


while ( $row = mysqli_fetch_assoc($result) ) {
    $tasksArray[] = $row;
}


echo json_encode($tasksArray);
?>