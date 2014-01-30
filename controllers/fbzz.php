<?php
    class controllerFbzz{
        public $view = null;
        
        public function __construct(){
            //sent main object to view
            $min = isset($_REQUEST['min']) ? (int)$_REQUEST['min'] : '';
            $max = isset($_REQUEST['max']) ? (int)$_REQUEST['max'] : '';
            $applyBazz = isset($_REQUEST['applybazz']) ? (bool)$_REQUEST['applybazz'] : '';
            
            //task below must be done by parent class with claess abstraction naming, but now we dont need parent class 
            
            //create view object 
            require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'fbzz' . DIRECTORY_SEPARATOR . 'view.php';
            $this->view = new viewFbzz();
            
            //template path
            $this->view->tplpath = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'templates';
            
            
            //task below...., end 
            
            //create controller specific main object
            require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'fbzz.php';
            $this->view->oMain = new fbzz($min, $max, $applyBazz);
            
        }
        
        public function display(){
            $this->view->display();
        }
    }