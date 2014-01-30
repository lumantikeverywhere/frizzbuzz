<?php
    class fbzz{
        /**
         * starting positive integer number
         * default: 0, must output "0 1 2 Frizz 4 Buzz" 
         *
         **/
        public $min=0;
        
        
        /**
         * end of positive integer number
         * default: 100, must output "0 1 2 Frizz 4 Buzz ... Buzz 91 92 Frizz 94 Buzz Frizz 97 98 Frizz Buzz"
         *
         **/
        public $max = 100;
        
        /**
         * a delay (in seconds ) between increament. This will be applied in javascript call
         * default: 0, no delay, no javascript
         *
         **/
        public $delay = 0;
        
        /**
         * Static text for Frizz, Buzz And Buzz
         **/
        $this->zz = array('zz3'=>'Frizz', 'zz5'=>'Buzz', 'con'=>'Bazz');
        
        /**
         * constructor
         * $min: a redefined value of $this->min
         * $max: a redefined value of $this->max
         * $delay: a redefined value of $this->delay
         **/
        public function __construct($min, $max, $delay=0){
            $this->min = $min;
            $this->max = $min;
            
            $this->delay = $delay;
        }
        
        /**
         * Prepare an array to be Frizz and Buzz output
         * $current: specific single integer, default: false ( prepare from $this->min up to $this->max, not for single integer )
         * 
         **/
        public function goFrizzBuzz(){
            
            $result = array(); //initialize result
            $range = range($this->min, $this->max);
            
            foreach($range as $key=>$integer){
                $result[] = $this->_frizzOrBuzz($integer);
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
         * 
         **/
        private function _frizzOrBuzz($integer, $applyBazz=false){
            if ($applyBazz) return $this->zz['zzcon'];
            elseif ($integer % 3) return $this->zz['zz3'];
            elseif ($integer % 5) return $this->zz['zz5'];
            else return $integer;
        }
    }