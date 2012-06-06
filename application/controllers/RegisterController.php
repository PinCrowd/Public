<?php

class RegisterController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->form = new Application_Form_Registration();
        
        if ($this->getRequest()->isPost())
        {
            if ($form->isValid($this->getRequest()->getPost()))
            {                
                $new_client = array('fname' => $this->_request->getPost('fname'),
                                  'lname' => $this->_request->getPost('lname'),
                                  'email' => $this->_request->getPost('email'),
                                  'pass' => $this->_request->getPost('pass'),
                                );
                /* @TODO - Hit API to register new user */
                                
            }
        }

    }

    public function newAction()
    {
        // action body
    }


}



