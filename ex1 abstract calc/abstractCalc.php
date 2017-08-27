<?php

if(isset($_POST['submit']))
{

    if(isset( $_POST['calc_action']))
    {
        $calcObj;
        
        $a;
        $b;
        $result;

        if(isset($_POST['abs']))
        {
            $calcObj = new AbsCalc() ;
        }
        else{
            $calcObj = new SimpleCalc() ;
        }
        
        if(isset($_POST['a'])&&isset($_POST['b']))
        {
            $a = $_POST['a'];
            $b = $_POST['b'];
            
           

                if(isset($_POST['calc_action']))
                {
                    $requiredAction = $_POST['calc_action'];
                    switch( $requiredAction )
                    {
                        case "+":
                        {
                            $result = $calcObj->plus($a, $b);
                            break;
                        }   
                        case "-":
                        {
                            $result = $calcObj->minus($a, $b);
                            break;
                        }   
                        case "+":
                        {
                            $result = $calcObj->mult($a, $b);
                            break;
                        }   
                        case "+":
                        {
                            $result = $calcObj->divide($a, $b);
                            break;
                        }   
                        
                    }
                    echo(" Result of *".$calcObj->getCalcType()."* is: ".$result);

                }
        
        }
    }

}

abstract class AbstractCalc
{

    abstract public function getCalcType();

    public function plus( $a, $b)
    {   
        return $a + $b;

    }

    public function minus( $a, $b)
    {   
        return $a - $b;

    }

    public function mult( $a, $b)
    {   
        return $a * $b;

    }

    public function divide( $a, $b)
    {   
        return $a / $b;

    }

}

class SimpleCalc extends abstractCalc
{
    public function getCalcType()
    {
        return "SimpleCalc";

    }

    
}

class AbsCalc extends abstractCalc
{
    public function getCalcType()
    {
        return "AbsCalc";

    }

    public function abs( $x)
    {
        return abs($x);
    }
}


?>