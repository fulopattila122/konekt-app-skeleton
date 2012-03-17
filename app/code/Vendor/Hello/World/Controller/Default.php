<?php

class Vendor_Hello_World_Controller_Default extends Konekt_Framework_Core_Controller_Abstract
{
   public function indexAction($params)
   {
      $response = Konekt::app()->getResponse();
      $response->setAttribute('title', "Hello, You're Konekted");
      $response->setTemplate('hello.tpl');
      
      return true;
   }
}
