<h1>My Page</h1>

<?php

     $redirect_page = 'http://google.com';

     $redirect = true;
     
     if($redirect == true){

// 1. The function is used to modify the browser and redirect it.

     header('Location: '.$redirect_page);

    }
    
?>