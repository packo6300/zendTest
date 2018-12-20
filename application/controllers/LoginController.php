<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author packo
 */
class LoginController extends Zend_Controller_Json{
    public function init(){
        $this->_helper->layout->setLayout('empty');  
    }
    public function indexAction() {
        
    }
}
