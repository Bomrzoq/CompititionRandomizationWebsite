<?php
//Information Gathering
$Name   = $_POST['contestantName'];
$Phone  = $_POST['contestantPhone'];

//Database Connection Variables
$servername = "localhost";
$username = "root";
$password = "";

// Connection Creation
$conn = new mysqli($servername, $username, $password);

// Connection Checking
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Adding the information to the Database
$sql = "INSERT INTO contestant (contestantName, contestantPhone)
VALUES ('$Name', '$Phone')";

if ($conn->query($sql) === TRUE) {
  echo "Contestant Have been added successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>