<?php
require_once("models/clientes.php");
require_once("models/instalacion.php");
require_once("models/incidencia.php");
$cliente = new cliente;
$instalacion = new instalacion;
$incidencia = new incidencia;


require_once("views/home.php");
?>