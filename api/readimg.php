<?php

include 'conex.php';

$query = "SELECT reserva.id_res, reserva.id_usu,reserva.id_hab,reserva.fecha_entrada,reserva.fecha_salida,reserva.habitacion_res, reserva.personas_res,habit.imagen,usuario.nombre_usu,reserva.estado,usuario.telefono_usu FROM reserva INNER JOIN habit ON reserva.id_hab=habit.id_hab INNER JOIN usuario on reserva.id_usu=usuario.id_usu WHERE reserva.estado='activo' ;";
$result = mysqli_query($con, $query); 
$row = mysqli_fetch_assoc($result);

$datos = array();

while ($obj = mysqli_fetch_object($result)) {

     $datos[] = array('id_res'=> $obj->id_res 
                       ,'id_usu'=> $obj->id_usu
                       ,'fecha_entrada'=> $obj->fecha_entrada
                       ,'fecha_salida'=> $obj->fecha_salida
                       ,'habitacion_res'=> $obj->habitacion_res
                       ,'personas_res'=> $obj->personas_res
                       ,'imagen'=>$obj->imagen
                       ,'nombre'=>$obj->nombre_usu
                       ,'estado'=>$obj->estado
                       ,'telefono'=>$obj->telefono_usu
                        
                         
                );	 

}

if ($result->num_rows >= 1) {
    echo json_encode($datos);
}

?>