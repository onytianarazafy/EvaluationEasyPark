<?php
//connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "devisClient";

//get input value

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Client (nomClient, devis)
VALUES ('ony', '1500000')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
