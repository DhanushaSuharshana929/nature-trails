<?php/* * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. *//** * Description of bookings * * @author Suharshana DsW */class Booking {    public $id;    public $name;    public $email;    public $contact_number;    public $check_in;    public $check_out;    public $adults;    public $child;    public $room;    public $message;    public function __construct($id) {        if ($id) {            $query = "SELECT * FROM `bookings` WHERE `id`=" . $id;            $db = new Database();            $result = mysql_fetch_array($db->readQuery($query));            $this->id = $result['id'];            $this->name = $result['name'];            $this->email = $result['email'];            $this->contact_number = $result['contact_number'];            $this->check_in = $result['check_in'];            $this->check_out = $result['check_out'];            $this->adults = $result['adults'];            $this->child = $result['child'];            $this->room = $result['room'];            $this->message = $result['message'];            return $this;        }    }    public function create() {        $query = "INSERT INTO `bookings` (`name`,`email`,`contact_number`,`check_in`,`check_out`,`adults`,`child`,`room`,`message`) VALUES  ('"                . $this->name . "','"                . $this->email . "', '"                . $this->contact_number . "', '"                . $this->check_in . "', '"                . $this->check_out . "', '"                . $this->adults . "', '"                . $this->child . "', '"                . $this->room . "', '"                . $this->message . "')";           $db = new Database();        $result = $db->readQuery($query);        if ($result) {            $last_id = mysql_insert_id();            return $this->__construct($last_id);        } else {            return FALSE;        }    }    public function all() {        $query = "SELECT * FROM `bookings` ORDER BY check_out ASC";        $db = new Database();        $result = $db->readQuery($query);        $array_res = array();        while ($row = mysql_fetch_array($result)) {            array_push($array_res, $row);        }        return $array_res;    }    public function update() {        $query = "UPDATE  `bookings` SET "                . "`name` ='" . $this->name . "', "                . "`email` ='" . $this->email . "', "                . "`contact_number` ='" . $this->contact_number . "', "                . "`check_in` ='" . $this->check_in . "', "                . "`check_out` ='" . $this->check_out . "' "                . "WHERE `id` = '" . $this->id . "'";        $db = new Database();        $result = $db->readQuery($query);        if ($result) {            return $this->__construct($this->id);        } else {            return FALSE;        }    }    public function delete() {        $this->deletePhotos();        unlink(Helper::getSitePath() . "upload/activity/" . $this->email);        $query = 'DELETE FROM `bookings` WHERE id="' . $this->id . '"';        $db = new Database();        return $db->readQuery($query);    }    public function deletePhotos() {        $ACTIVITY_PHOTO = new ActivitiesPhoto(NULL);        $allPhotos = $ACTIVITY_PHOTO->getActivitiesPhotosById($this->id);        foreach ($allPhotos as $photo) {            $IMG = $ACTIVITY_PHOTO->email = $photo["email"];            unlink(Helper::getSitePath() . "upload/activity/gallery/" . $IMG);            unlink(Helper::getSitePath() . "upload/activity/gallery/thumb/" . $IMG);            $ACTIVITY_PHOTO->id = $photo["id"];            $ACTIVITY_PHOTO->delete();        }    }    public function arrange($key, $img) {        $query = "UPDATE `bookings` SET `check_out` = '" . $key . "'  WHERE id = '" . $img . "'";        $db = new Database();        $result = $db->readQuery($query);        return $result;    }}