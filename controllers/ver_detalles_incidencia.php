<?php
require_once("models/incidencia.php");
$incidencia = new incidencia;
$id = $_GET['id'];

$result = $incidencia->ver_detalles($id);


if($result->num_rows>0){
    $datos = $result->fetch_assoc();
    $datos_cliente = $incidencia->datos_cliente($datos['cliente'])->fetch_assoc();
    $datos_instalacion = $incidencia->datos_instalacion($datos['instalacion'])->fetch_assoc();
}

$creacion = "<p><small class='font-italic'>Creado: ".$datos['T_creacion']."</small></p>";
if(!is_null($datos['T_actualizado'])){
    $actualizacion = "<p><small class='font-italic text-danger'>Actualizado: ".$datos['T_actualizado']."</small></p>";
}else{
    $actualizacion = null;
}
$mensaje = null;

if($datos['activa'] == 1){
    $activa = "Si";
}else{
    $activa = "No";
}

if(isset($_POST['guardar'])){
    $incidencia->activa = $_POST['activa'];
    $incidencia->nota = $_POST['nota'];

    $mensaje = $incidencia->actualizar($id);
    echo "<meta http-equiv='refresh' content='1; url=?pag=ver_incidencias'>";
}






require_once("views/ver_detalles_incidencia.php");
?>