<?php

class Application_Form_Registration extends Zend_Form
{

    public function init()
    {
        // Form config
        $this->setMethod('POST');
        $this->setAction('/register/new');
        $this->setAttrib('id', 'addClientForm');

        // Create elements
        $fname    = new Zend_Form_Element_Text('fname');
        $lname    = new Zend_Form_Element_Text('lname');
        $email    = new Zend_Form_Element('email');
        $pass     = new Zend_Form_Element_Password('pass');
        $alley    = new Zend_Form_Element_Text('alley');
        $submit   = new Zend_Form_Element_Submit('submit');
        $submit   = new Zend_Form_Element_Image('submit');
        
        $fname->setLabel('First Name:')
            ->setRequired(true)
            ->addValidator(new Zend_Validate_Alpha(true));

        $lname->setLabel('Last Name:')
            ->addValidator(new Zend_Validate_Alpha(true));
        
        $email->setLabel('Email:')
            ->addValidator(new Zend_Validate_EmailAddress()); 

        /* @TODO add password validation (lenght, etc) */
        $pass->setLabel('Password:');

        /* @TODO get list of bowling centers from DB */
        $alley->setLabel('Home alley:');

        $submit->setlabel('Submit')
            ->setImage('img/btn_signup.png')
            ->setAttrib('id', 'submitbutton')
            ->setAttrib('type', 'submit');        
        
        // Add elements
        $this->addElement($fname)
            ->addElement($lname)
            ->addElement($email)
            ->addElement($pass)
            ->addElement($alley)
            ->addElement($submit);        


    }

}