<?php

/* Uncomment for development server
error_reporting(-1);
ini_set('display_errors', 1);
*/

require_once ('app/code/Konekt/Framework/Konekt.php');

   try {
      $response = Konekt::app()->getRouter()->dispatch(basename(__FILE__));
      $response->display();
   }
   catch (Exception $e) {
      Konekt::app()->getResponse()->err500($e->getMessage());
      Konekt::app()->getResponse()->display();
   }
