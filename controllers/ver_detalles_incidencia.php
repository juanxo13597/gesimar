<?php
require_once("models/incidencia.php");
$incidencia = new incidencia;


$id = $_GET['id'];
$result = $incidencia->ver_detalles($id);


if($result->num_rows>0){
    $datos = $result->fetch_assoc();
}



$creacion = "<p><small class='font-italic'>Creado: ".$datos['T_creacion']."</small></p>";
if(!is_null($datos['T_actualizado'])){
    $actualizacion = "<p><small class='font-italic text-danger'>Actualizado: ".$datos['T_actualizado']."</small></p>";
}else{
    $actualizacion = null;
}
$mensaje = null;
if(isset($_POST['guardar'])){
    $instalacion->cuota = $_POST['cuota'];
    $instalacion->activa = $_POST['activa'];
    $instalacion->tipo_conexion = $_POST['tipo_conexion'];

    $mensaje = $instalacion->actualizar($id);
    echo "<meta http-equiv='refresh' content='1; url=?pag=ver_instalaciones'>";
}

if($datos['activa']=='1'){
    $activa = "Si";
}else{
    $activa = "No";
}






require_once("views/ver_detalles_instalacion.php");
?>