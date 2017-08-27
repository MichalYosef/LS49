<?php
    require_once 'ICalc.php';

    class ExtendedCalc extends ICalc {

        public function Abs($x) {
            if ($x < 0)
                return $x*-1;
            return $x;
        }

        public function getCalcType() {
            return "Extended Calculator";
        }
    }

?>