<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//error_reporting(0);
include_once(dirname(__FILE__) . '/../../class/include.php');

$ORDER = new Order();

$arr = array();

if ($ORDER->refund($_POST)) {
    $arr['status'] = 1;
    $arr['id'] = $_POST['id'];
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);
