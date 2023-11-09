<?php
   if(isset($_POST['SubmitButton'])){ 
      //Starting the session	
      $id = session_create_id();	
      session_id($id);
      print("\n"."Id: ".$id);
      session_start();  
      $_SESSION['name'] = $_POST['name'];
      $_SESSION['age']  = $_POST['age'];	  
      session_commit();
   }
?>
<html>
   <body>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <label for="fname">Enter the values click Submit and click on Next</label>
         <br><br><label for="fname">Name:</label>
         <input type="text" id="name" name="name"><br><br>
         <label for="lname">Age:</label>
         <input type="text" id="age" name="age"><br><br>           
         <input type="submit" name="SubmitButton"/>
         <?php 
            echo '<br><br /><a href="session_page2.php">Next</a>';
         ?>
      </form>
   </body>
</html>