<?php
require_once("db.php");

class cliente extends database{

    public $dni = null, $nombre, $telefono, $email, $cuenta_bancaria, $perfil_wimax, $T_creacion, $T_actualizado;

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

    public function ver_creador($id){
        $sql = "SELECT username, role
        FROM users
        INNER JOIN clientes
        ON users.id = clientes.user_creador && clientes.id = $id";
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function buscar_por_nombre($nombre){
        $sql = "select * from clientes where nombre='$nombre'";
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function registrar(){
        if(!is_null($this->nombre) && !is_null($this->telefono)){
            $this->T_creacion = date('Y-m-d H:i:s');
            $this->user_creador = $_SESSION['login']['id'];
            $sql = "INSERT INTO clientes (dni, nombre, telefono, email, perfil_wimax, T_creacion, cuenta_bancaria, user_creador) 
            VALUES ('$this->dni', '$this->nombre', '$this->telefono', 
            '$this->email', '$this->perfil_wimax', '$this->T_creacion', '$this->cuenta_bancaria', '$this->user_creador')";

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
        telefono='$this->telefono',
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