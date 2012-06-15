<?php
class Application_Form_logout extends Zend_Form
{

    public function init()
    {
if(Zend_Auth::getInstance()->hasIdentity())
 {
        $this->setAction('#');
        $this->setMethod('post');

         $logout = $this->createElement('submit','logout');
         $logout->setLabel('logout')
                 ->setIgnore(true);
         $this->addElement($logout);
 }
 else
 {
       echo "please sign in";
 }
}

}