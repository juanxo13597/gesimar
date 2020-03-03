<?php
require_once("models/user.php");
$user = new user;
$user->verificar_admin();
$data = $user->ver_todos();

require_once("views/admin_ver_usuarios.php");
?>