<?php

include_once('include/config.inc.php');
include_once('include/functions.inc.php');
include_once('include/menu.data.php');
  if(isset($pageTitle)){
	  $pageTitle = $companyName;
    }else{
	  $pageTitle = $companyName.'-'.$pageTitle;
  }
  echo '<!DOCTYPE html>';
  echo '<html lang="en">';
  echo      '<head>';
  echo           '<meta charset="UTF-8">';
  echo           '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
  echo           '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
  echo           '<title>'.$pageTitle.'</title>';
  echo           '<link rel="stylesheet" type="text/css" href="assets/css/style.css">';
  echo      '</head>';
  echo      '<body>';
  echo           '<header>';

  echo               '<h1>'.$pageTitle.'</h1>';
  echo               '<h2>On going Training</h2>';
  echo '<nav>';
        menuBuilder( $menuItems );
  echo '</nav>';
  echo '</header>';
  echo '</body>';

 ?>
  




