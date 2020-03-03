<?php
require_once("models/clientes.php");

$cliente = new cliente;
$mensaje = null;
if(!empty($_POST['nombre'])){
    $cliente->dni = $_POST['dni'];
    $cliente->nombre = $_POST['nombre'];
    $cliente->direccion = $_POST['direccion'];
    $cliente->telefono = $_POST['telefono'];
    $cliente->email = $_POST['email'];
    $cliente->perfil_wimax = $_POST['perfil_wimax'];

    $mensaje = $cliente->registrar();
}





require_once("views/agregar_clientes.php");
?>