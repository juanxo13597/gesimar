<?php
require_once("models/instalacion.php");

$instalacion = new instalacion;
$mensaje = null;
if(isset($_POST['guardar'])){
    $instalacion->cliente = $_POST['cliente'];
    $instalacion->cuota = $_POST['cuota'];
    $instalacion->activa = $_POST['activa'];

    $mensaje = $instalacion->registrar();
}





require_once("views/agregar_instalaciones.php");
?>