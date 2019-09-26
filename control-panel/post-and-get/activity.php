<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $ACTIVITY = new Activities(NULL);
    $VALID = new Validator();

    $ACTIVITY->title = $_POST['title'];
    $ACTIVITY->short_description = $_POST['short_description'];
    $ACTIVITY->description = $_POST['description'];

    $dir_dest = '../../upload/activity/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 360;
        $handle->image_y = 255;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ACTIVITY->image_name = $imgName;
    $ACTIVITY->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/activity/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 360;
        $handle->image_y = 255;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ACTIVITY = new Activities($_POST['id']);

    $ACTIVITY->image_name = $_POST['oldImageName'];
    $ACTIVITY->title = $_POST['title'];
    $ACTIVITY->short_description = $_POST['short_description'];
    $ACTIVITY->description = $_POST['description'];
    $ACTIVITY->update();
   

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $ACTIVITY = Activities::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}