<?php
    session_start(); 
    if (empty($_SESSION['id'])){
        header('Location: login.html');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">   
<title>Document</title>
</head>
<body onload="Reserva(); usuario() ">


    <div id="header"  class="row">
        <div class="col logo">
        <img class="img-fluid mt-4" style="height:30px ;" src="img/Capture.PNG" alt="">
        </div>
        <div class="col">
            <nav>
                <ul>
                    <li><a href="areacliente.php">Area Cliente</a></li>
                    <?php
                         if ($_SESSION['id']){
                        echo ' <li><a href="api/logout.php">LogOut</a></li>';
                    }
                ?>
                   
                    <li><a href="registro.html">registro</a></li>
                    <li><a id="accion" href="reserva.php">Reserva</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <div id="nombreCliente" class="row container ">

        <div class="col">
            <h1 id="name"></h1>
        </div>
        
      </div>
  
        <div class="row">
            <div class="col-md-2"></div>
            <div id="contenido" class="col-md-8">
        
             
     
                  
            </div>
            <div class="col-md-2"></div>
        </div>

<script src="js/jquery.js"></script>
<script src="js/app.js"></script>
</body>
</html>