<html>   
   <head>
      <title>Second Page</title>
   </head>
   <body>
      <?php
         //Session started
         session_start();
         print("Values from the session with id: ".session_id());
         echo "<br>";
         print($_SESSION['name']); 
         echo "<br>";
         print($_SESSION['age']);
      ?>   
   </body>   
</html>