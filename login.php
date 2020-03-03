<?php session_start() ?>

<?php
$message = null;
if(isset($_POST['username']) && isset($_POST['password'])){
    require_once("models/user.php");
    $user = new user;
    $user->username = $_POST['username'];
    $user->password = $_POST['password'];
    if($user->login()){
        header("location:index.php");
    }else{
        $message = "<div class='alert alert-danger' role='alert'>
            Error: Usuario Y/O contraseñas incorrectos.
          </div>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESIMAR - LOGIN</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <center>

            <div class="card mt-5 col-5 border-primary box">
                <div class="card-body pt-5">

                    <form action="" method="post">
                    <?=$message?>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Usuario" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Entrar</button>
                        </div>

                    </form>


                </div>
            </div>
        </center>

    </div>

</body>

</html>