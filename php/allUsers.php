<?php

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

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Fetching from your database table.
$query = "SELECT * FROM $usertable";
$result = mysqli_query($conn, $query);

$flag = 0;
if ($result) {
    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}

?>