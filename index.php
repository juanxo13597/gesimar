<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESIMAR</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
</head>
<body>
    <div class="container">
        <?php 
        session_start();
        require_once("controllers/menu.php");
        echo "<div class='border-left border-right border-bottom border-primary p-4 box'>";
        require_once("controllers/navegacion.php");
        require_once("controllers/".navegacion().".php"); 
        echo "</div>";
        ?>
    </div>
        
    </div>

    


</body>
</html>