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
     <div class="container">
       <div class="row">
         <div class="col-12">
           <h1 class="text-center">Tutte le stanze disponibili</h1>
           <table class="table">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>Floor</th>
                 <th>Room Number</th>
                 <th></th>
                 <th></th>
                 <th></th>
               </tr>
             </thead>
             <tbody>
               <?php
                  if (!empty($rooms)) {
                    foreach ($rooms as $room) { ?>
                      <tr>
                        <td>
                          <?php echo $room['id']; ?>
                        </td>
                        <td>
                          <?php echo $room['floor']; ?>
                        </td>
                        <td>
                          <?php echo $room['room_number']; ?>
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
         </div>
       </div>
     </div>
   </body>
 </html>
