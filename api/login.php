<?php 

    include 'conex.php'; 
    session_start();

    $correo = $_POST['correo']; 
    $contra  = $_POST['contra'];

  
    $query = "SELECT * FROM usuario where correo_usu = '{$correo}' and contra_usu = '{$contra}' ";
    $result = mysqli_query($con, $query); 
    $row = mysqli_fetch_assoc($result);

    if ($result->num_rows >= 1) {
            $_SESSION['id'] = $row['id_usu'];
           
            echo json_encode($row);
        }

?>