<?php

     include 'config.inc.php';
     
// 1. It allows you to access certain information about the user, page, and
// requests that have been sent.
  
  $script_name = $_SERVER['SCRIPT_NAME'];
  
// 2. Explain what is happening to reduce the resulting output of the $images variable.

   echo $images;

?>

<!-- 3. Explain how using the $script_name variable benefits us. 
 It allows you to use the same form to process different pages 
 with the $script_name variable. -->

   <form action="<?php echo $script_name; ?>" method="POST">
       <input type="submit" name="submit" value="Submit">
   </form>