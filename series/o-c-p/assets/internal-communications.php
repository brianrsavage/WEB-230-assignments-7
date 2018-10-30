<<?php

$pageTitle = 'Internal Communications';
     include_once('include/config.inc.php');
     require_once('include/header.inc.php');

  $offset = 0;
  $text = '';
  $search = 'Acme';
  $replace = 'Insights';

  if(isset($_POST['text'])){
	  $text = $POST['text'];
   $search_length = strlen($search);
    
      if(!empty($text)){

        while ($strpos = strpos($text, $search, $offset)) {

          //Explain why we change the value of the $offset variable her.
          $offset = $strpos + $search_length;

          // Explain what we are doing here to the $text variable.
          $text = substr_replace($text, $replace, $strpos, $search_length);

        }
 
  }else{
     echo 'Please fill in the text fields.'; 
   }
  }
?>

<form action="internal-communications.php" method="POST">

  <textarea name="text" rows="10" cols="60"><?php echo $text; ?></textarea><br><br>

  <button type="submit"> value="Find and Replace"</button>

</form>

<?php

  require_once('include/footer.inc.php');

?>