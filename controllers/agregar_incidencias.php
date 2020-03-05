<?php
require_once("models/incidencia.php");

$incidencia = new incidencia;
$mensaje = null;
if(isset($_POST['guardar'])){
    $iddeinstalacion = $incidencia->buscar_id_direccion($_POST['instalacion'])->fetch_assoc();
    $iddecliente = $incidencia->buscar_id_cliente($_POST['cliente'])->fetch_assoc();
    $incidencia->cliente = intval($iddecliente['id']);
    $incidencia->instalacion = intval($iddeinstalacion['id']);
    $incidencia->nota = $_POST['nota'];
    $incidencia->user_creador = $_SESSION['login']['id'];


    $mensaje = $incidencia->registrar();
    echo "<meta http-equiv='refresh' content='1; url=?pag=ver_incidencias'>";
}





require_once("views/agregar_incidencias.php");
?>