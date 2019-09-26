<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $BLOG = new Blog($_POST['id']);
    unlink('../../../upload/blog/gallery/thumb/' . $BLOG->image_name);
    unlink('../../../upload/blog/gallery/' . $BLOG->image_name);
    $result = $BLOG->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
 