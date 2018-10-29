<?php

      // 01. Explain what this variable will be used for and how. 
//This is used for the password that must be entered for the form to work. 
 //pass123 is specified and if user types something different then the "That is incorrect!" error will show.
      $match = 'pass123';

      if ( isset($_POST['password']) ) {
        $password = $_POST['password'];
        $msg = '';
        $msgType = 'success';
        // 02. Explain the process of the following if statment. 
// If the password matches in the form then that is correct will display ontop. If not
// then the 'that is incorrect!' will display.
        if ( !empty($password)) {
          if($password == $match){
            echo 'That is correct!';
          }else{
            echo 'That is incorrect!';
          }
        }else{
          echo 'Please enter a password.';
        }
      }
    ?>
        <form action="index.php" method="POST">
            Password:<br>
            <input type="password" name="password"><br><br>
            <input type="submit" class="btn" value="Submit">
        </form>
        
