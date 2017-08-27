<?php
    require_once 'SimpleCalc.php';
    require_once 'ExtendedCalc.php';

    if (isset($_POST['op']) && isset($_POST['x']) && isset($_POST['y'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];

        switch ($_POST['op']) {
            case 'addition':
                $class1 = new SimpleCalc;
                echo $class1->Addition($x, $y);
              break;
            case 'subtraction':
              $class1 = new SimpleCalc;
              echo $class1->Subtraction($x, $y);
            break;
        }
    }
?>
