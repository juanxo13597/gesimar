<?php
require_once("models/user.php");
$user = new user;
$result = null;
$user->verificar_admin();
if(isset($_POST['username']) && isset($_POST['password'])){
    $user->username = $_POST['username'];
    if($_POST['password'] == $_POST['password2']){
        $user->password = $_POST['password'];
        $result = $user->register();
    }else{
        $result = "<div class='alert alert-danger' role='alert'>
                Las claves no coinciden
              </div>";
    }
    
}

require_once("views/admin_nuevo_usuario.php");
?>