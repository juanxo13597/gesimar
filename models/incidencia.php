<?php
require_once("db.php");

class incidencia extends database{

    public $user_credor, $cliente, $nota, $activa, $T_creacion, $T_actualizado;

    public function registrar(){
        $this->T_creacion = date('Y-m-d H:i:s');

        $sql = "INSERT INTO incidencias (user_creador, cliente, nota, 
        activa, T_creacion) VALUES ('$this->user_creador', '$this->cliente', 
        '$this->nota', '$this->T_creacion')";
        
        if($this->conexion->query($sql)){
            $result = "<div class='alert alert-success' role='alert'>
                Incidencia Creada Correctamente.
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
        FROM incidencias N, clientes C, instalaciones I
        where N.cliente = C.id && N.instalacion = I.id";
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
        activa='$this->activa', T_actualizado = '$this->T_actualizado', tipo_conexion = '$this->tipo_conexion'
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