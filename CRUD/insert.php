<?php
$nm = $_GET["txtnm"];
$rn = $_GET["txtrn"];

// Create connection
$conn = new mysqli("localhost", "root","", "MyData");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO webtech (sname, srno) VALUES ('$nm', '$rn')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
