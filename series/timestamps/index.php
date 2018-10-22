<?php

// 1. It returns the current unix timestamp.
$time = time();

// 2. The date which is a function uses the two arguments (dmy & h:i:s)
//    to process the timestamp correctly.
$actual_time = date('D M Y @ H:i:s',$time);

// 3. This modifies the date to however you want. Using the function strtotime() 
//    converts to a readable string to unix time.
$time_modified = date('d M Y @ H:s', $time);

// 4.
  echo '<h3>The current date/time is: '.$actual_time.'<h3>';
  
// 5.
  echo '<h3>The modified date/time is: '.$time_modified.'<h3>';

?>