<?php
require_once("db.php");

class instalacion extends database{

    public $cliente,$cuota,$activa = '1';

    public function registrar(){
        $sql = "select * from clientes where nombre = '$this->cliente'";
        $resultado = $this->conexion->query($sql);
        if($resultado->num_rows>0){
            $row = $resultado->fetch_assoc();
        }
        $cliente = $row['id'];

        $sql = "INSERT INTO instalaciones (cliente, cuota, activa) VALUES ('$cliente', '$this->cuota', '$this->activa')";
        
        if($this->conexion->query($sql)){
            $result = "<div class='alert alert-success' role='alert'>
                Instalacion Creada Correctamente.
              </div>";
        }else{
            $result = "<div class='alert alert-danger' role='alert'>
            error:". $this->conexion->error."
              </div>";
        }

        return $result;
    
    }




}

?>