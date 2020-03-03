<?php
require_once("models/user.php");

$user = new user;
$user->verificar_admin();
$id = $_GET['id'];
$data = $user->obtener_usuario($id);
$result = null;

if(isset($_POST['username'])){
    $user->username = $_POST['username'];
    $user->password = $_POST['password'];
    $user->role = $_POST['role'];

    $result = $user->update_user($id);
    echo "<meta http-equiv='refresh' content='1; url=?pag=admin_ver_usuarios'>";
}


require_once("views/admin_editar_usuario.php");
?>