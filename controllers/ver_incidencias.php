<?php
require_once("models/incidencia.php");

$incidencia = new incidencia;
$result = $incidencia->ver();
if($result->num_rows>0){
    $j=0;
    while($row = $result->fetch_assoc()){
        $data[$j]['id'] = $row['id'];
        $data[$j]['direccion'] = $row['direccion'];
        $data[$j]['telefono'] = $row['telefono'];
        $data[$j]['nombre'] = $row['nombre'];
        $data[$j]['activa'] = $row['activa'];

        $j++;
    }
}else{
    $data = null;
}


require_once("views/ver_incidencias.php");
?>