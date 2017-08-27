<?php
abstract class ICalc
{
    abstract public function getCalcType();

    // Common method
    public function Multiplication($x, $y) {
        return $x * $y;
    }

    public function Division($x, $y) {
        if ($y != 0)
            return $x * $y;
        else
            throw new Exception('Division by zero.');
    }

    public function Subtraction($x, $y) {
        return $x - $y;
    }

    public function Addition($x, $y) {
        return $x + $y;
    }
}
