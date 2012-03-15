<?php

class Vendor_Hello_World_Controller_Default extends Konekt_Framework_Core_Controller_Abstract
{
   public function indexAction($params)
   {
      Konekt::app()->getResponse()->setAttribute('title', 'Hello');
      Konekt::app()->getResponse()->setTemplate('hello.tpl');
      
      return true;
   }
}
