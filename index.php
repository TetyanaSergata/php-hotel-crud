<?php
  include 'database.php';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="dist/app.css">
     <title>Php_Hotel_CRUD</title>
   </head>
   <body>
     <table class="table">
       <thead>
         <tr>
           <th>ID</th>
           <th>Room Number</th>
           <th>Floor</th>
         </tr>
       </thead>
       <tbody>
         <?php
            if (!empty($rooms)) {
              foreach ($rooms as $room) { ?>
                <tr>
                  <td>
                    <?php echo $room['id'] ?>
                  </td>
                  <td>
                    <?php echo $room['floor'] ?>
                  </td>
                  <td>
                    <?php echo $room['room_number'] ?>
                  </td>
                  <td>
                    <a href="#">VIEW</a>
                  </td>
                  <td>
                    <a href="#">UPDATE</a>
                  </td>
                  <td>
                    <a href="#">DELETE</a>
                  </td>
                </tr>
          <?php }
          }
          ?>

       </tbody>


     </table>

   </body>
 </html>
