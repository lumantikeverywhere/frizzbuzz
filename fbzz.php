<?php
    class fbzz{
        /**
         * starting positive integer number
         * default: 1, must output "1 2 Frizz 4 Buzz" 
         *
         **/
        public $min=1;
        
        
        /**
         * end of positive integer number
         * default: 100, must output "0 1 2 Frizz 4 Buzz ... Buzz 91 92 Frizz 94 Buzz Frizz 97 98 Frizz Buzz"
         *
         **/
        public $max = 100;
        
        /**
         * Static text for Frizz, Buzz And Buzz
         **/
        public $zz = array('zz3'=>'Frizz', 'zz5'=>'Buzz', 'con'=>'Bazz');
        
        /**
         * Apply 'Bazz' for consecutive Frizz Buzz or Buzz Frizz
         */
        public $applybazz = false;
        
        /**
         * constructor
         * $min: a redefined value of $this->min
         * $max: a redefined value of $this->max
         * $applyBazz: to go with bazz for consecutive occurance of frizz/buzz
         **/
        public function __construct($min=false, $max=false, $applyBazz=null){
            if (is_int($min)) $this->min = $min;
            if (is_int($max)) $this->max = $max;
            if (is_bool($applyBazz)) $this->applybazz = $applyBazz;
        }
        
        /**
         * Prepare an array to be Frizz and Buzz output
         * 
         **/
        public function goFrizzBuzz(){
            
            $result = array(); //initialize result
            $range = range($this->min, $this->max);
            
            foreach($range as $key=>$integer){
                $result[] = $this->_frizzOrBuzz($integer, ($this->applybazz ? $result : false));
            }
            return $result;
        }
        
        /**
         * Check if a given integer is in expected range
         * $integer : a single integer to be evaluated, required
         **/
        private function _inRange($integer){
            return ( ($integer >= $this->min) && ($integer <= $this->max) );
        }
        
        /**
         * Evaluate whether a specified $integer falling n Frizz or Buzz or The Integer it self
         * $integer: integer
         * $bazz: an array for already get
         * 
         **/
        private function _frizzOrBuzz($integer, $bazz=false){
            if ($integer == 0) return $integer;
            elseif ( ($integer % 3) == 0 ) return $this->zz['zz3'];
            elseif ( ($integer % 5) == 0 ) return $this->zz['zz5'];
            elseif ( $bazz && is_array($bazz) && (count($bazz) > 1) && 
                !is_int($bazz[count($bazz)-1]) &&
                !is_int($bazz[count($bazz)-2]) &&
                ($bazz[count($bazz)-1] != $this->zz['con']) &&
                ($bazz[count($bazz)-2] != $this->zz['con'])
            ) return $this->zz['con'];
            else return $integer;
        }
    }