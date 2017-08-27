<?php
    require_once 'ICalc.php';
    
    class SimpleCalc extends ICalc {
        public function getCalcType() {
            return "Simple Calculator";
        }
    }

?>