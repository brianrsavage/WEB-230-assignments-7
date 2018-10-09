<?php

  $text = "I see billy and alex at the mall when dale and I were there.";
  $user_input='I see billy and alex at the mall when dale and I were there. ';
  $find = array('alex','billy','dale');
  
  $replace = array('a**x','b***y','d**e');
  
    if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
      $user_input_new = str_ireplace($find,$replace,$user_input);
      
      echo $user_input_new;
      
    }

?>

<hr>

<form action="index.php" method="POST">
   <textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea>
   <br><br><input type="submit" value=submit>
</form>

