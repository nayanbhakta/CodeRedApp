<?php

$enteredPassword = $_GET["password"];
$enteredUsername = $_GET["username"];
$enteredFullname = $_GET["fullname"];
$enteredRole = $_GET["role"];
$enteredPic = $_GET["profilepic"];
$enteredParent = $_GET["parent"];

//Variables for connecting to your database.
//These variable values come from your hosting account.
$hostname = "codered1.db.11273437.hostedresource.com";
$username = "codered1";
$dbname = "codered1";

//These variable values need to be changed by you before deploying
$password = "Legends1!";
$yourfield = "username";

//Connecting to your database
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//Fetching from your database table.
$stmt = $conn->prepare("INSERT INTO users VALUES(?, ?, ?, ?, ?, ?)");
$stmt->bind_param('ssssds', $enteredUsername, $enteredPassword, $enteredFullname, $enteredRole, $enteredPic, $enteredParent);


if ($stmt->execute()) {
    echo "New record inserted successfully";
} else {
    echo "Error: <br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>