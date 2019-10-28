<?php

include '../../class/include.php';

$order = new Order();

$arr = array();

if ($order->add($_POST)) {

    $id = mysql_insert_id();
    $arr['status'] = 1;
    $arr['id'] = $id;
//    header('Location: ../../invoice-pay.php?id='. $id);
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);
