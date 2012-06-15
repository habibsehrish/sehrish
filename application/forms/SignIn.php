<?php

class Application_Form_SignIn extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
$this->setAction('#');
$this->setMethod('post');
 $email = $this->createElement('text','email');
        $email->setLabel('email: *')
                ->setRequired(true);
                
        $password = $this->createElement('password','password');
        $password->setLabel('password: *')
                ->setRequired(true);
                
        $signin = $this->createElement('submit','SignIn');
        $signin->setLabel('SignIn')
                ->setIgnore(true);
        $this->addElements(array(
                        $email,
                        $password,
                        $signin,
                        ));


// if(Zend_Auth::getInstance()->hasIdentity())
// {
//         // $this->setAction('logout');
//         $logout = $this->createElement('submit','logout');
//         $logout->setLabel('logout')
//                 ->setIgnore(true);
//         $this->addElement($logout);
// }
// else
// {
//        echo "please sign in";
// }
    }


}

