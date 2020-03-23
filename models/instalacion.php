<?php
require_once("db.php");

class instalacion extends database{

    public $cliente,$cuota,$activa = '1', $tipo_conexion, $direccion, $T_creacion, $T_actualizado, $user_creador;

    public function registrar(){
        $sql = "select * from clientes where nombre = '$this->cliente'";
        $resultado = $this->conexion->query($sql);
        if($resultado->num_rows>0){
            $row = $resultado->fetch_assoc();
        }
        $cliente = $row['id'];
        $this->T_creacion = date('Y-m-d H:i:s');

        $sql = "INSERT INTO instalaciones (cliente, cuota, direccion, activa, tipo_conexion, T_creacion, user_creador) 
        VALUES ('$cliente', '$this->cuota', '$this->direccion', '$this->activa', '$this->tipo_conexion', '$this->T_creacion', '$this->user_creador')";
        
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

    public function formato_fecha($fecha){
        $fecha_cambiada = date_format($fecha, 'H:i:s - d-m-Y');
        return $fecha_cambiada;
    }

    public function ver_incidencias_de_instalacion($id){
        $sql = "SELECT N.id, N.activa, I.direccion, N.T_creacion
        FROM incidencias N, instalaciones I
        where N.instalacion = '$id' && N.instalacion = I.id";
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function ver_instalaciones_del_cliente($id){
        $sql = "SELECT *
        FROM clientes C, instalaciones I
        where i.cliente = C.id && c.id ='$id'";
        $result = $this->conexion->query($sql);
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
        $sql = "select * from clientes C, instalaciones I where I.id='$id' && I.cliente = C.id";
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