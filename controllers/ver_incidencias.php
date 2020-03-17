<?php
require_once("models/incidencia.php");

$incidencia = new incidencia;
$result = $incidencia->ver();
if($result->num_rows>0){
    $j=0;
    while($row = $result->fetch_assoc()){
        $data[$j]['id'] = $row['id'];
        $datos_cliente[$j] = $incidencia->datos_cliente($row['cliente'])->fetch_assoc();
        $datos_instalacion[$j] = $incidencia->datos_instalacion($row['instalacion'])->fetch_assoc();
        $data[$j]['activa'] = $row['activa'];

        $j++;
    }
}else{
    $data = null;
}






require_once("views/ver_incidencias.php");
?>