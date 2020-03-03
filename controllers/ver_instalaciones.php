<?php require_once("models/instalacion.php"); 


$instalacion = new instalacion;
$result = $instalacion->ver();
if($result->num_rows>0){
    $j=0;
    while($row = $result->fetch_assoc()){
        $data[$j]['id'] = $row['id'];
        $data[$j]['clienteid'] = $row['cliente'];
        $data[$j]['nombre'] = $row['nombre'];
        $data[$j]['cuota'] = $row['cuota'];
        $data[$j]['activa'] = $row['activa'];
        $data[$j]['direccion'] = $row['direccion'];

        $j++;
    }
}else{
    $data = null;
}




require_once("views/ver_instalaciones.php");
?>