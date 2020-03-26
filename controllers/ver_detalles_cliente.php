<?php
require_once("models/clientes.php");
require_once("models/instalacion.php");
$cliente = new cliente;
$instalacion = new instalacion;
$id = $_GET['id'];
$result = $cliente->ver_detalles($id);
if($result->num_rows==0){
    header("location:?pag=error404");
    die();
}
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
    $cliente->dni = $_POST['dni'];
    $cliente->nombre = $_POST['nombre'];
    $cliente->telefono = $_POST['telefono'];
    $cliente->email = $_POST['email'];
    $cliente->perfil_wimax = $_POST['perfil_wimax'];
    $cliente->cuenta_bancaria = $_POST['cuenta_bancaria'];
    $mensaje = $cliente->actualizar($id);
    echo "<meta http-equiv='refresh' content='1; url=#'>";
}

$ins_cli_result = $instalacion->ver_instalaciones_del_cliente($id);

$ver_creador_result = $cliente->ver_creador($id);
$ver_creador = $ver_creador_result->fetch_assoc();





require_once("views/ver_detalles_cliente.php");
?>