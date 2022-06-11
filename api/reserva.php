<?php

    include('conex.php');
    session_start();

    $id_usu = $_SESSION['id'];
    $id_hab = $_POST['id_hab'];
    $habitacion = $_POST['habitacion'];
    $fechaEntrada=$_POST['fechaEntrada'];
    $fechasalida=$_POST['fechaSalida'];
    $persona=$_POST['personas'];
    
    

    $query = "INSERT INTO `reserva`(`id_res`, `id_usu`, `id_hab`, `fecha_entrada`, `fecha_salida`, `habitacion_res`, `personas_res`, `estado`)
     VALUES (NULL,'$id_usu','$id_hab','$fechaEntrada','$fechasalida','$habitacion','$persona','activo')";

    $resul=mysqli_query($con, $query) or die(mysqli_error($con));

    echo json_encode('ok');

    
