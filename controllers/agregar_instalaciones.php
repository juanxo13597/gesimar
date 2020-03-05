<?php
require_once("models/instalacion.php");

$instalacion = new instalacion;
$mensaje = null;
if(isset($_POST['guardar'])){
    $instalacion->cliente = $_POST['cliente'];
    $instalacion->cuota = $_POST['cuota'];
    $instalacion->activa = $_POST['activa'];
    $instalacion->user_creador = $_SESSION['login']['id'];
    $instalacion->tipo_conexion = $_POST['tipo_conexion'];

    $mensaje = $instalacion->registrar();
    echo "<meta http-equiv='refresh' content='1; url=?pag=ver_instalaciones'>";
}





require_once("views/agregar_instalaciones.php");
?>