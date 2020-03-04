<?php
require_once("db.php");

class user extends database{

    public $username,$password,$role = 'USER';

    public function register(){
        $pwd = hash('sha256', $this->password);
        $sql = "INSERT INTO users (username, password, role) VALUES ('$this->username', '$pwd', '$this->role')";
        
        if($this->conexion->query($sql)){
            $result = "<div class='alert alert-success' role='alert'>
                Usuario Creado Correctamente.
              </div>";
        }else{
            $result = "<div class='alert alert-success' role='alert'>
            error:". $this->conexion->error."
              </div>";
        }

        return $result;
    
    }

    public function login(){
        $pwd = hash('sha256', $this->password);
        $sql = "select * from users where username='$this->username' && password='$pwd'";
        $result = $this->conexion->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()) {
                $_SESSION['login']['username'] = $row['username'];
                $_SESSION['login']['role'] = $row['role'];
                $_SESSION['login']['login'] = 1;
                $_SESSION['login']['id'] = $row['id'];

                $data = true;
            }
        }else{
            $_SESSION['login']['login'] = 0;
            $data = false;
        }

        return $data;
        

    }

    public function logout(){
        session_start();
        session_destroy();
    }


    public function ver_todos(){
        $sql = "select * from users";
        $result = $this->conexion->query($sql);
        if($result->num_rows>0){
            $j=0;
            while($row = $result->fetch_assoc()) {
                $data[$j]['id'] = $row['id'];
                $data[$j]['username'] = $row['username'];
                $data[$j]['role'] = $row['role'];
                $j++;
            }
            return $data;
        }
    }

    public function verificar_admin(){
        if($_SESSION['login']['role'] != "ADMIN"){
            header("location:index.php");
        }
    }

    public function obtener_usuario($id){
        $sql = "select * from users where id='$id'";
        $result = $this->conexion->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()) {
                $data['id'] = $row['id'];
                $data['username'] = $row['username'];
                $data['role'] = $row['role'];

            }
            return $data;
        }else{
            header("location:index.php?pag=error404");
        }
    }

    public function update_user($id){
        if($this->password=='' || $this->password==""){ 
            $sql = "UPDATE users SET username='$this->username', role='$this->role' WHERE id='$id'"; 
        }else{
            $pwd = hash("sha256", $this->password);
            $sql = "UPDATE users SET username='$this->username', role='$this->role', password='$pwd' WHERE id='$id'";
        }

        if($this->conexion->query($sql)){
            $result = "<div class='alert alert-success' role='alert'>
            Usuario Guardado Correctamente.
          </div>";
        }else{
            $result = "<div class='alert alert-success' role='alert'>
            error:". $this->conexion->error."
              </div>";
        }

        return $result;

    }


}

?>