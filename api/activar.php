<?php 

include 'conex.php'; 
 session_start();

 $idReserva = $_POST['idReserva']; 

$query = "UPDATE reserva SET estado = 'activo' where id_res = '{$idReserva}' ";
$result = mysqli_query($con, $query); 
echo json_encode('ok');

?>