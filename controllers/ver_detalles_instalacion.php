<?php
require_once("models/instalacion.php");
require_once("models/clientes.php");
$instalacion = new instalacion;
$cliente = new cliente;

$id = $_GET['id'];
$result = $instalacion->ver_detalles($id);


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