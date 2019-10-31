<?php

include_once(dirname(__FILE__) . '/../../class/include.php');
include_once(dirname(__FILE__) . '/../auth.php');



$id = Helper::randamIdForBookingID();

if ($id) {
    $data = array("status" => TRUE);
    header('Content-type: application/json');
    echo json_encode($id);
}
