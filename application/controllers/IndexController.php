<?php
ini_set("memory_limit","-1");
class IndexController extends Zend_Controller_Inax{

    public function init(){
       $this->_helper->layout->setLayout('adminLte');   
    }
    public function indexAction() {
        
    }
}