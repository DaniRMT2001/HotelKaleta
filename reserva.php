<?php
    session_start(); 
    if (empty($_SESSION['id'])){
        header('Location: login.html');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">   
<title>Document</title>
</head>
<body onload="cargarHabitacion()" class="bg-dark text-white">
 
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h3>Detalle de la Habitacion</h3>
            <label class="mt-3" for="">Seleccione tipo de habitacion</label>
            <select id="tipoHabitacion" onchange="cambiarHabitacion()" class="form-control " name="" >
            <option value="0">Eligir Habitacion</option>
                <option value="1">Deluxe</option>
                <option value="2">Sencilla </option>
                <option value="3">Doble</option>
                <option value="4">Vista al mar</option>
                <option value="5">Deluxe vip</option>
                <option value="6">personal</option>
            </select>
            <div class="mt-2" >
               <img id="imghab"  style="width: 500px; height:300px ; ">
            </div>
           
            <h3 id="prehab">...</h3>
            <p id="desphab">...</p>
            <h1>Reserva</h1>
            
            <div class="row">
                <div class="col">
                    <label for="">Fecha de entrada</label>
                    <input id="fechaEntrada" type="date">
                </div>
                <div class="col">
                    <label for="">Fecha de salida</label>
                    <input id="fechaSalida" type="date">
                </div>
            </div>
            
            <label class="mt-3" for="">Cantidad de Personas</label>
            <input id="personas" class="form-control" type="number" max="10" min="1" >
 
            <button onclick="enviarDatos()" class="btn btn-outline-success mt-3 mb-3">Reservar</button>
            <a href="index.html" class="btn btn-outline-warning mt-3 mb-3">Voler</a>   
        </div>
        <div class="col"></div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>

</body>
</html>