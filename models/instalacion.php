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

    public function ver(){
        $sql = "SELECT *
        FROM clientes C, instalaciones I
        WHERE I.cliente = C.id";
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function ver_detalles($id){
        $sql = "select * from clientes C, instalaciones I where I.id='$id'";
        $result = $this->conexion->query($sql);
        return $result;
    }


    public function actualizar($id){
        $this->T_actualizado = date('Y-m-d H:i:s');
        $sql = "UPDATE instalaciones SET cuota='$this->cuota',
        activa='$this->activa', T_actualizado = '$this->T_actualizado'
        WHERE id=$id";

        if($this->conexion->query($sql)){
            $result = "<div class='alert alert-success' role='alert'>
            Instalacion Guardada Correctamente.
        </div>";
        }else{
            $result = "<div class='alert alert-danger' role='alert'>
            Error: ".$this->conexion->error."
        </div>";
        }

        return $result;


    }







}

?>