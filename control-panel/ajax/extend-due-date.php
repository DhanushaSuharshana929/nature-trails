<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

$invoices = new Invoice();

$arr = array();

if ($invoices->extendDueDate($_POST)) {
    $result = Invoice::sendMail($_POST['id']);
    $result1 = Invoice::sendMailToHotel($_POST['id']);
    $arr['status'] = 1;
    $arr['id'] = $_POST['id'];
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);

