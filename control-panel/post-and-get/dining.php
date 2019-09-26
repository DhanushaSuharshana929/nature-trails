<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $DINING = new Dining(NULL);
    $VALID = new Validator();

    $DINING->type = $_POST['type'];
    $DINING->title = $_POST['title'];
    $DINING->price = $_POST['price'];
    $DINING->short_description = $_POST['short_description'];

    $dir_dest = '../../upload/dining/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 270;
        $handle->image_y = 191;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $DINING->image_name = $imgName;
    $DINING->create();

    $result = ["id" => $_POST['type']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $dir_dest = '../../upload/dining/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 270;
        $handle->image_y = 191;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $DINING = new Dining($_POST['id']);

    $DINING->image_name = $_POST['oldImageName'];
    $DINING->title = $_POST['title'];
    $DINING->price = $_POST['price'];
    $DINING->short_description = $_POST['short_description'];

    $DINING->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $DINING = Dining::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}