<?php

include 'conex.php';

$id=$_POST['id'];

$query = "SELECT reserva.id_res, reserva.id_usu,reserva.id_hab,reserva.fecha_entrada,reserva.fecha_salida,reserva.habitacion_res, reserva.personas_res,habit.imagen,usuario.nombre_usu,reserva.estado,usuario.telefono_usu FROM reserva INNER JOIN habit ON reserva.id_hab=habit.id_hab INNER JOIN usuario on reserva.id_usu=usuario.id_usu WHERE reserva.id_res='{$id}' ;";


$result=mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);

if ($result->num_rows >= 1) {
   
    echo json_encode($row);
}

?>