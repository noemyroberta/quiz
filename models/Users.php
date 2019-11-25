<?php

require ('UsersDAO.php');

class Users {

    var $user;

    public function users() { $this->user = new UsersDAO(); }

    public function insertUser($age, $weight, $height, $course, $facility, $secondFrequence, $firstFrequence) {
        $this->user->insertUser($age, $weight, $height, $course, $facility, $secondFrequence, $firstFrequence);
    }

    public function updateSecondFrequence($id, $secondFrequence) {
        $this->user->updateSecondFrequence($id, $secondFrequence);
    }

    public function selectUserByData($height, $weight, $age) {
       return $this->user->selectUserByData($height, $weight, $age);
    }

}