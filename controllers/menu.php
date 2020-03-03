<?php

if($_SESSION['login']['role'] == "ADMIN"){
    $menuadmin = "<ul class='navbar-nav ml-aut mt-2 mt-lg-0'>
    <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='dropdownId' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>MENU ADMIN</a>
        <div class='dropdown-menu' aria-labelledby='dropdownId'>
            <a class='dropdown-item' href='?pag=admin_ver_usuarios'>Usuarios</a>
            <a class='dropdown-item' href='?pag=admin_nuevo_usuario'>Nuevo Usuario</a>
        </div>
    </li>
</ul>";
}else{
    $menuadmin = null;
}

require_once("views/menu.php");
?>