<?php
  include 'env.php';

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    die();
  }

  $sql = "SELECT * FROM `stanze`";
  $result = $conn->query($sql);
  var_dump($result);
  // die();

  if ($result && $result->num_rows > 0) {
   $rooms = [];
   while($row = $result->fetch_assoc()) {
   $rooms[] = $row;
   }

  } elseif ($result) {
   echo "No results";
  } else {
   echo "Query error";
  }

  $conn->close();


 ?>
