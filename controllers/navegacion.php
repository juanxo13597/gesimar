<?php

function navegacion(){
    if(!isset($_SESSION['login']['login']) || $_SESSION['login']['login'] = 0){
        header("location:login.php");
    }else{
        if(!isset($_GET['pag'])){
            return "home";
        }else{
            if(file_exists("controllers/".$_GET['pag'].".php")){
                return $_GET['pag'];
            }else{
                return "error404";
            }
            return $_GET['pag'];
        }
    }
    
}


?>