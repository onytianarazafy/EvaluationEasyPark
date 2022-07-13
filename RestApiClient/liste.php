<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "devisClient";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT  nomClient ,devis FROM client";

$result1 = $conn->query($sql1);


if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    echo  $row1["nomClient"] . $row1["devis"];
  }
} else {
  echo "0 results";
}

$conn->close();

?>
