<?php
require_once("models/instalacion.php");
require_once("models/clientes.php");
$instalacion = new instalacion;
$cliente = new cliente;

$id = $_GET['id'];
$result = $instalacion->ver_detalles($id);
if($result->num_rows==0){
    header("location:?pag=error404");
    die();
}

$datos_incidencia = $instalacion->ver_incidencias_de_instalacion($id);


if($result->num_rows>0){
    $datos = $result->fetch_assoc();
}

$resultcliente = $cliente->buscar_por_nombre($datos['nombre']);
if($resultcliente->num_rows>0){
    $datoscliente = $resultcliente->fetch_assoc();
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

    $mensaje = $instalacion->actualizar($id, $_SESSION['login']['id']);
    echo "<meta http-equiv='refresh' content='1; url=#'>";
}

if($datos['activa']=='1'){
    $activa = "Si";
}else{
    $activa = "No";
}

$ver_creador_result = $instalacion->ver_creador($id);
$ver_creador = $ver_creador_result->fetch_assoc();

$ver_updater_result = $instalacion->ver_updater($id);
$ver_updater = $ver_updater_result->fetch_assoc();





require_once("views/ver_detalles_instalacion.php");
?>