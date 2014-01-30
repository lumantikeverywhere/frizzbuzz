<?php
    class viewFbzz{
        
        public $oMain = null; //the main object has attached by controller
        public $tpl = '';
        public $tplpath = '';
        public $tplData = array();
        public function __construct($tpl=''){
            
            if (!empty($tpl)){
                $this->tpl = $tpl;
            }
        }
        
        /**
         * default
         **/
        public function display(){
            $this->tplData['fbzz'] = $this->oMain->goFrizzBuzz();
            $this->tplData['range'] = array('min'=>$this->oMain->min, 'max'=>$this->oMain->max, 'applybazz'=>(int)$this->oMain->applybazz);
            $this->render();
        }
        
        /**
         * Render to the template
         * This method must supplied by parent class of view in the real development, but now, we only need it here
         **/
        public function render(){
            if (empty($this->tpl)){
                $this->tpl = 'default';
            }
            include($this->tplpath . DIRECTORY_SEPARATOR . 'header.php');
            extract($this->tplData, EXTR_OVERWRITE);
            include($this->tplpath . DIRECTORY_SEPARATOR . 'fbzz' . DIRECTORY_SEPARATOR . $this->tpl . '.php');
            include($this->tplpath . DIRECTORY_SEPARATOR . 'footer.php');
        }
    }