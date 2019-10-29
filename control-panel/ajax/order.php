<?php

include_once(dirname(__FILE__) . '/../../class/include.php');
include_once(dirname(__FILE__) . '/../auth.php');

if ($_POST['option'] == 'resend-payment-receipt') {
    $status = '';
    $order = Order::getById($_POST['id']);
    if($order['status'] == 1) {
        $status = 'success';
    }
    
    $result = Order::sendConfirmationMail($status, $_POST['id'], $order['reference']);
    $result1 = Order::sendConfirmationMailToHotel($status, $_POST['id'], $order['reference']);

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}