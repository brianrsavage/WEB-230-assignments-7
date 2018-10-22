<?php 

// 1. It stores the internal output in a buffer.
ob_start(); ?>

<h1>My Page</h1>
This is my page

<?php

   $redirect_page = 'http://google.com';
   
   $redirect = true;
 
 if ($redirect===true) {
   // 2. Redirects the user to another page.
    header('Location: '.$redirect_page);
 }
   // 3. It flushes the buffer and put the content back on the page.
 ob_end_flush();

 ?>
