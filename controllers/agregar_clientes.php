<?php
require_once("models/clientes.php");

$cliente = new cliente;
if(!empty($_POST['nombre'])){
    $cliente->dni = $_POST['dni'];
    $cliente->nombre = $_POST['nombre'];
    $cliente->direccion = $_POST['direccion'];
    $cliente->telefono = $_POST['telefono'];
    $cliente->email = $_POST['email'];

    echo $cliente->registrar();
}





require_once("views/agregar_clientes.php");
?>