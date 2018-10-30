<?php

  include_once('include/config.inc.php');

  $pageTitle = "Events";

  require_once('include/header.inc.php');

  $events = array(
      array('Blue Jeans Day','October 12, 2018','All employees may wear jeans to work.'),
                  
	  array('Leave early day','December 22, 2018','All employees may leave work, with pay, at lunch on this day to get started on their holiday plans.'),
                  
	  array('Christmas Holiday Closing','December 23, 2018','December 27, 2018','Our offices will be closed December 23, 2018 through December 27, 2018.')
                );

 ?>

<?php
    echo '<div>';
      foreach ($event as $element => $inner_array) {
	echo '<strong>'.$element.'</strong><br>';
	  foreach ($inner_array as $item) {
	echo '-- '.$item.'<br>';
	  }
  };
	echo '</div>';	  
?>

<?php
   require_once('include/footer.inc.php');
?>