<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $BLOG_PHOTO = new BlogPhoto($_POST['id']);

    unlink('../../../upload/blog/gallery/' . $BLOG_PHOTO->image_name);
    unlink('../../../upload/blog/gallery/thumb/' . $BLOG_PHOTO->image_name);

    $result = $BLOG_PHOTO->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}