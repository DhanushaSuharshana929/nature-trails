<?php

include './class/include.php';
if (!isset($_SESSION)) {
    session_start();
}
$id = $_SESSION['order_id'];
$invoice = Invoice::getByID($id);

$data = DefaultData::getDetailsByCurrency();
foreach ($data as $details) {
    foreach ($details as $currency) {
        if ($currency['currency'] === $invoice["currency"]) {
            $apiPassword = $currency['API_password'];
            $apiUsername = $currency['API_username'];
            $merchant = $currency['merchant_ID'];
        }
    }
}

$curlData = array(
    'apiOperation' => 'RETRIEVE_ORDER',
    'apiPassword' => $apiPassword,
    'apiUsername' => $apiUsername,
    'merchant' => $merchant,
    'order.id' => 'NTWI'.$id
);

$curlDataSt = http_build_query($curlData); //echo $curlDataSt; exit;

$options = array(
    CURLOPT_URL => "https://cbcmpgs.gateway.mastercard.com/api/nvp/version/52",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $curlDataSt,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false
);

$curl = curl_init();
curl_setopt_array($curl, $options);
$response = curl_exec($curl);
curl_close($curl);

$items = explode("&", $response);
$success = '';
$receipt = '';
foreach ($items as $item) {
    if (strstr($item, 'transaction%5B0%5D.transaction.receipt=')) {
        $a = explode("=", $item);
        $receipt = $a[1];
    }
    if (strstr($item, 'result=SUCCESS')) {
        $success = 'success';
    }
}

$invoices = new Invoice();
$stat = 'error';

if ($success === 'success') {

    if ($invoices->updateStatus($id, $receipt)) {
        $stat = 'success';
    } else {
        $stat = 'error';
    }
} else {
    $stat = 'error';
}
Invoice::sendConfirmationMail($stat, $id, $receipt);
Invoice::sendConfirmationMailToHotel($stat, $id, $receipt);
unset($_SESSION['order_id']);
header('Location: invoice-pay.php?id=' . $id . '&pay=' . $stat . '&ref=' . $receipt);
