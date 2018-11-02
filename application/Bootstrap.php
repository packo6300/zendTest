<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initDoctype(){
        $this->bootstrap('view');
        $view = $this->getResource('view');
        define('APP_PATH', '../application');
        define('IMAGES_PATH', '../application/assets/img');
        define('WK_IMAGES_PATH', APP_PATH . '/assets/img');
        define('STYLESHEET_PATH', '../application/assets/css');
        define('JAVASCRIPT_PATH', '../application/assets/js');
        define('LIBRARY_PATH', '../library');
        define('BOOTSTRAP_PATH', '../application/assets/bootstrap/'); 
        
        $view->headLink([
            'href' => 'bower_components/bootstrap/dist/css/bootstrap.min.css',
            'rel' => 'stylesheet',
            'media' => 'screen',
            'type' => 'text/css'
        ], 'PREPEND');
        $view->headScript()->prependFile('bower_components/jquery/dist/jquery.min.js');
        $view->headScript()->prependFile('bower_components/jquery-ui/jquery-ui.min.js');
        $view->headScript()->prependFile('bower_components/bootstrap/dist/js/bootstrap.min.js'); 
    }
}

