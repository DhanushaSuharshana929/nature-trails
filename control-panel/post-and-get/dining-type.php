<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $PAGES = new DiningType(NULL);
    $VALID = new Validator();

    $PAGES->title = $_POST['title'];

    $PAGES->create();
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) { 
    
    $PAGES = new DiningType($_POST['id']);
     
    $PAGES->title = $_POST['title']; 
    $PAGES->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}