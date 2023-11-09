<html>   
   <head>
      <title>Setting up a PHP session</title>
   </head>   
   <body>
      <?php  
         //Starting the session
         session_start();   
         $id = session_id();
         print("Session Id: ".$id);
      ?>
   </body>   
</html>