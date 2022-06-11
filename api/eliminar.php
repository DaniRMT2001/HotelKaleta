<?php
include 'conex.php'; 


$idReserva = $_POST['idReserva']; 

$query = "DELETE FROM reserva WHERE id_res = '{$idReserva}' ";
$result = mysqli_query($con, $query); 
echo json_encode('ok');

?>
