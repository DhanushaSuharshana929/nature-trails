<?php
include '../../class/include.php';

$invoices = new Invoice();

$arr = array();

if ($invoices->add($_POST)) {
    
    $id = mysql_insert_id();
    
    if($invoices->sendMail($id) === TRUE) {
        $invoices->sendMailToHotel($id);
        $arr['status'] = 2;
    } else {
        $arr['status'] = 1;
    }
    $arr['id'] = $id;
    
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);
