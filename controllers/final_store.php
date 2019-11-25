<?php
require('../models/Users.php');
$users = new Users();

$id = $_GET['id'];
$hearbeating = $_POST['heartbeating'];

$user = $users->updateSecondFrequence($id, $hearbeating);

header("Location: ../views/restart.php");

