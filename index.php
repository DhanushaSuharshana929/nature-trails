<?php

include './class/include.php';
#remove the directory path we don't want
$request = $_SERVER['REQUEST_URI'];
#split the path by '/'
$params = split("/", $request);


if ($params[2] == 'home' || $params[2] == "") {
    include './home.php';
    exit();
} elseif ($params[2] == 'about-us') {

    include './about-us.php';
    exit();
} elseif ($params[2] == 'accommodation-in-unawatuna' && $params[3] != "") {
    $id = Room::getRoomIDByName(str_replace("-", " ", $params[3]));
    $ROOM = new Room($id);
    include './view-room.php';
    exit();
} elseif ($params[2] == 'accommodation-booking' && $params[3] != "") {
    $id = Room::getRoomIDByName(str_replace("-", " ", $params[3]));
    $ROOM = new Room($id);
    $ROOMS = new Room(NULL);
    include './room-booking.php';
    exit();
} elseif ($params[2] == 'accommodation-booking') {
    $ROOMS = new Room(NULL);
    include './room-booking.php';
    exit(); 
} elseif ($params[2] == 'accommodation-in-unawatuna') {
    include './room.php';
    exit();
} elseif ($params[2] == 'restaurants-in-unawatuna') {
    include './dining.php';
    exit();
} elseif ($params[2] == 'things-to-do-in-unawatuna' && $params[3] != "") {
    $id = Attraction::getAttractionIDByName(str_replace("-", " ", $params[3]));
    $ATTRACTION = new Attraction($id);
    include './view-excursion.php';
    exit();
} elseif ($params[2] == 'things-to-do-in-unawatuna') {
    include './excursion.php';
    exit();
} elseif ($params[2] == 'blog' && $params[3] != "") {
    $id = Blog::getBlogIDByName(str_replace("-", " ", $params[3]));
    $BLOG = new Blog($id);
    include './view-blog.php';
    exit();
} elseif ($params[2] == 'blog') {
    include './blog.php';
    exit();
} elseif ($params[2] == 'photo-gallery') {
    include './gallery.php';
    exit();
} elseif ($params[2] == 'contact-us') {
    include './contact.php';
    exit();
} elseif ($params[2] == 'feedback') {
    include './feedback.php';
    exit();
} elseif ($params[2] == 'site-map') {
    include './site-map.php';
    exit();
} elseif ($params[2] == 'terms-and-conditions' && $params[3] != "") {
    $PAGE = new Page($params[3]);
    include './terms-and-conditions.php';
    exit();
} elseif ($params[2] == 'not-found') {
    include './not-found.php';
    exit();
} 


//online

//if ($params[1] == 'home' || $params[1] == "") {
//    include './home.php';
//    exit();
//} elseif ($params[1] == 'about-us') {
//
//    include './about-us.php';
//    exit();
//} elseif ($params[1] == 'accommodation-in-unawatuna' && $params[2] != "") {
//    $id = Room::getRoomIDByName(str_replace("-", " ", $params[2]));
//    $ROOM = new Room($id);
//    include './view-room.php';
//    exit();
//} elseif ($params[1] == 'accommodation-in-unawatuna') {
//    include './room.php';
//    exit();
//} elseif ($params[1] == 'restaurants-in-unawatuna') {
//    include './dining.php';
//    exit();
//} elseif ($params[1] == 'things-to-do-in-unawatuna' && $params[2] != "") {
//    $id = Attraction::getAttractionIDByName(str_replace("-", " ", $params[2]));
//    $ATTRACTION = new Attraction($id);
//    include './view-excursion.php';
//    exit();
//} elseif ($params[1] == 'things-to-do-in-unawatuna') {
//    include './excursion.php';
//    exit();
//} elseif ($params[1] == 'blog' && $params[2] != "") {
//    $id = Blog::getBlogIDByName(str_replace("-", " ", $params[2]));
//    $BLOG = new Blog($id);
//    include './view-blog.php';
//    exit();
//} elseif ($params[1] == 'blog') {
//    include './blog.php';
//    exit();
//} elseif ($params[1] == 'photo-gallery') {
//    include './gallery.php';
//    exit();
//} elseif ($params[1] == 'contact-us') {
//    include './contact.php';
//    exit();
//} elseif ($params[1] == 'site-map') {
//    include './site-map.php';
//    exit();
//} elseif ($params[1] == 'feedback') {
//    include './feedback.php';
//    exit();
//} elseif ($params[1] == 'terms-and-conditions' && $params[2] != "") {
//    $PAGE = new Page($params[2]);
//    include './terms-and-conditions.php';
//    exit();
//} elseif ($params[1] == 'not-found') {
//    include './not-found.php';
//    exit();
//} 