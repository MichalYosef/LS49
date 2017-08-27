<?php
    require_once 'connection.php';
    require_once 'vendor.php';

    $func = $_POST['func'];
    $data = $_POST['data'];

    switch ($func) {
        case 'allSoftwares': 
        $s = Vendor::getAllSoftwares();
        return $s;
            break;
        case 'allVendors':
            $v = Vendor::getAllVendors();
            echo JSON_encode($v);
            break;
        case 'insertVendor':
            $v = new Vendor($data);
            $v->Insert();
            echo $v->getId();
            break;
        default:
            return 'invalid request';
    }


?>