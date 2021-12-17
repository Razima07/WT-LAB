<?php

// Create connection
$conn = new mysqli("localhost", "root","", "MyData");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "SELECT sname, srno FROM webtech";
$result = $conn->query($sql);
echo "Name " . "RollNO <br>";
if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {
    // echo "Name: " . $row["sname"]. " - RollNo: " . $row["srno"].  "<br>";
      echo "" . $row["sname"]. "  " . $row["srno"].  "<br>";
  }
} else {
  echo "0 results";
}





$conn->close();
?>
