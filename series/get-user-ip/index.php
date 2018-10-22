<?php

  require 'config.inc.php';

  // 01. The foreach loop only works when using arrays.
    foreach ($ip_blocked as $ip) {
      if($ip == $ip_address){
        die('Your IP address, '.$ip_address.' has been blocked');
      }
    }

 ?>

 <h1>Welcome</h1>