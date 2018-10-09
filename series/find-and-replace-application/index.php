<?php

  // 01.Explain why we are creating the $offset variable and what it is being used for.
  // The offset variable is the starting point in which to count the number of characters.

  $offset = 0;

  // 02.Explain what we are doing in the if statement and why we would do it.
  // It references the data and checks to see whether the form has been submitted. The variables, need
  // to be created for this to work.
  if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){

    // 03.Provide a reason why we would make a variable to capture a variable we could already use.
    //
    $text = $_POST['text'];
    $search = $_POST['searchfor'];
    $replace = $_POST['replacewith'];

    // 04.Explain why we need to create this variable $search_length.
    // It returns the length of the string of the integer.
    $search_length = strlen($search);

      if(!empty($text)&&!empty($search)&&!empty($replace)){

        while ($strpos = strpos($text, $search, $offset)) {

          // 05.Explain why we change the value of the $offset variable here.
          // It allows the program to work correctly.
          echo $offset = $strpos + $search_length;

          // 06.Explain what we are doing here to the $text variable.
          // This searches for what the user is searching and replacing.
          $text = substr_replace($text, $replace, $strpos, $search_length);

        }

        echo $text;

      } else {

        // 07.Explain why we include this here.
        // It is predefined and also an error message for the user to fill all fields.
        echo 'Please fill in all fields.';

      }

  }

?>

<hr>

<!-- 08.Explain the action and method attributes. -->
<form action="index.php" method="POST">

  <textarea name="text" rows="6" cols="30"></textarea><br><br>

  Search for:<br><br>
  <input type="text" name="searchfor"><br><br>

  Replace with:<br>
  <input type="text" name="replacewith"><br><br>

  <!-- 09.Explain what the type and value attributes are and do. -->
  <input type="submit" value="Find and Replace">

</form>