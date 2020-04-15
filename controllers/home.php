<?php
require_once("models/clientes.php");
require_once("models/instalacion.php");
require_once("models/incidencia.php");
$cliente = new cliente;
$instalacion = new instalacion;
$incidencia = new incidencia;

$total_clientes = $cliente->total_clientes()->fetch_assoc();
$total_instalaciones = $instalacion->total_instalaciones()->fetch_assoc();
$total_incidencias = $incidencia->total_incidencias()->fetch_assoc();

require_once("views/home.php");
?>