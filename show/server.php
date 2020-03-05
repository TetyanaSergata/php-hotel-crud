<?php
  include __DIR__ . '/../database.php';

  // Prima di fare la query controlliamo che id che prendiamo con il GET esiste.
  // Se non esiste tutto si ferma e non procede con la query
  if(empty($_GET['id'])) {
    die('ID non presente');
  }
  // Se 'id' è presente allora va avanti e fa la query
  $roomId = $_GET['id'];

  // Query al database
  $sql = "SELECT * FROM `stanze` WHERE `id` = '$roomId'";  //WHERE è molto importante!
  $result = $conn->query($sql);
  // var_dump($result);

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
 
