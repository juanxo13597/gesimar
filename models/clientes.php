<?php
require_once("db.php");

class cliente extends database{

    public $dni, $nombre, $direccion, $telefono, $email, $perfil_wimax, $T_creacion, $T_actualizado;

    public function ver(){
        $sql = "select * from clientes";
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function ver_detalles($id){
        $sql = "select * from clientes where id='$id'";
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function registrar(){
        if(!is_null($this->nombre) && !is_null($this->telefono && !is_null($this->direccion))){
            $this->T_creacion = date('Y-m-d H:i:s');
            $sql = "INSERT INTO clientes (dni, nombre, direccion, telefono, email, perfil_wimax, T_creacion) 
            VALUES ('$this->dni', '$this->nombre', '$this->direccion', '$this->telefono', '$this->email', '$this->perfil_wimax', '$this->T_creacion')";

            if($this->conexion->query($sql)){
                $result = "<div class='alert alert-success' role='alert'>
                Cliente Guardado Correctamente.
              </div>";
            }else{
                $result = "<div class='alert alert-danger' role='alert'>
                Error: ".$this->conexion->error."
              </div>";
            }
        }else{
            $result = "<div class='alert alert-info' role='alert'>
                Necesito datos.
              </div>";
        }

        return $result;
    }

    public function actualizar($id){
        $this->T_actualizado = date('Y-m-d H:i:s');
        $sql = "UPDATE clientes SET dni='$this->dni', nombre='$this->nombre',
        direccion='$this->direccion', telefono='$this->telefono',
        email='$this->email', perfil_wimax='$this->perfil_wimax', T_actualizado='$this->T_actualizado'
        WHERE id=$id";

        if($this->conexion->query($sql)){
            $result = "<div class='alert alert-success' role='alert'>
            Cliente Guardado Correctamente.
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