<?php

$rn = $_GET["txtrn"];

// Create connection
$conn = new mysqli("localhost", "root","", "MyData");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM webtech WHERE srno='$rn'";

if ($conn->query($sql) === TRUE) {
  echo "record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
