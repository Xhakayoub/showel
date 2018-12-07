<?php
namespace Showel\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class ShowelController extends AbstractActionController
 {
     public function indexAction()
     {
         return new ViewModel();
     }

     
 }