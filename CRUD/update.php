
<?php

$nm = $_GET["txtnm"];
$rn = $_GET["txtrn"];

// Create connection
$conn = new mysqli("localhost", "root","", "MyData");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE webtech SET sname='$nm' WHERE srno='$rn'";


if ($conn->query($sql) === TRUE) {
  echo "record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
