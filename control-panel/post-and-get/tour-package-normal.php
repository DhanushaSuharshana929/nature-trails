<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $TOUR_PACKAGE = new TourPackage(NULL);
    $VALID = new Validator();

    $TOUR_PACKAGE->title = $_POST['title'];
    $TOUR_PACKAGE->price = $_POST['price'];
    $TOUR_PACKAGE->short_description = $_POST['short_description'];
    $TOUR_PACKAGE->description = $_POST['description'];

    $dir_dest = '../../upload/tour-package/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $TOUR_PACKAGE->image_name = $imgName;
    $TOUR_PACKAGE->create();

    $result = ["id" => $TOUR_PACKAGE->id];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/tour-package/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $TOUR_PACKAGE = new TourPackage($_POST['id']);

    $TOUR_PACKAGE->image_name = $_POST['oldImageName'];
    $TOUR_PACKAGE->title = $_POST['title'];
    $TOUR_PACKAGE->price = $_POST['price'];
    $TOUR_PACKAGE->short_description = $_POST['short_description'];
    $TOUR_PACKAGE->description = $_POST['description'];
    $TOUR_PACKAGE->update();

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit(); 
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $TOUR_PACKAGE = TourPackage::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}