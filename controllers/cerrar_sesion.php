<?php
require_once("../models/user.php");
$user = new user;
$user->logout();
header("location:../index.php");

?>