<?php

class HomeController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        echo "Welcome to my home";
$form = new Application_Form_logout();
        $this->view->logout = $form;

    }

    public function mySweetHomeAction()
    {
        // action body
    }


}



