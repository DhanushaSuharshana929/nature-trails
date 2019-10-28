<?php

include_once(dirname(__FILE__) . '/../../class/include.php');
include_once(dirname(__FILE__) . '/../auth.php');

if ($_POST['option'] == 'resend-payment-receipt') {
    $status = '';
    $invoice = Invoice::getById($_POST['id']);
    if($invoice['status'] == 1) {
        $status = 'success';
    }
    
    $result = Invoice::sendConfirmationMail($status, $_POST['id'], $invoice['reference']);
    $result1 = Invoice::sendConfirmationMailToHotel($status, $_POST['id'], $invoice['reference']);

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
if ($_POST['option'] == 'resend-invoice') {
    
    $result = Invoice::sendMail($_POST['id']);
    $result1 = Invoice::sendMailToHotel($_POST['id']);

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}