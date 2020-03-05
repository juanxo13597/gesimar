<?php require_once("models/clientes.php"); 
require_once("models/user.php");

$cliente = new cliente;
$result = $cliente->ver();
if($result->num_rows>0){
    $j=0;
    while($row = $result->fetch_assoc()){
        $data[$j]['id'] = $row['id'];
        $data[$j]['dni'] = $row['dni'];
        $data[$j]['nombre'] = $row['nombre'];
        $data[$j]['telefono'] = $row['telefono'];
        $data[$j]['email'] = $row['email'];

        $j++;
    }
}else{
    $data = null;
}




require_once("views/ver_clientes.php");
?>