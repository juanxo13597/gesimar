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
    $cliente->cuenta_bancaria = $_POST['cuenta_bancaria'];
    $cliente->perfil_wimax = $_POST['perfil_wimax'];

    $mensaje = $cliente->registrar();
    echo "<meta http-equiv='refresh' content='1; url=?pag=ver_clientes'>";
}





require_once("views/agregar_clientes.php");
?>