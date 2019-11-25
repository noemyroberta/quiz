<?php

    require_once('../models/Users.php');    

    $user_age = $_POST['age'];
    $user_course = $_POST['course'];
    $user_facility = $_POST['facility'];
    $user_weight = $_POST['weight'];
    $user_height = $_POST['height'];
    $user_heartbeating = $_POST['heartbeating'];

    $user_facility = utf8_decode($user_facility[0]);
    $facility = iconv("ISO-8859-1", "UTF-8", $user_facility);
    
    $user_course = utf8_decode($user_course[0]);
    $course = iconv("ISO-8859-1", "UTF-8", $user_course);

    $user = new Users();
    $user->insertUser($user_age, $user_weight, $user_height, $course, $facility, $user_heartbeating, $user_heartbeating);
    
    $findUser = $user->selectUserByData($user_height, $user_weight, $user_age);
    $user_id = $findUser["uti_id"];

    if($user != null) {    
        header("location: ../views/intermediate.php?id=$user_id");
    }