<?php

// 1. The if statemnet is executing the $rand function
  if(isset($_POST['roll'])){
  
// 2. The rand function generates a random number between the minimum and maximum
// numbers given.
  $rand = rand(1, 6);
     echo 'You rolled a '.$rand;

  }
  
// 3.


?>
  <form action="index.php" method="POST">
     <input type="submit" name="roll" value="Roll dice.">
  </form>