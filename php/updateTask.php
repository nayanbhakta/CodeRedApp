<?php

$enteredTask = $_GET["idtasks"];
$enteredState = $_GET["state"];
$enteredProofPic = $_GET["proofpic"];

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
$stmt = $conn->prepare("UPDATE tasks SET state = ?, proofpic = ? WHERE idtasks = ?");
$stmt->bind_param('sdd', $enteredState, $enteredProofPic, $enteredTask);


if ($stmt->execute()) {
    echo "Update record successfully";
} else {
    echo "Error: <br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>