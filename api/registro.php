<?php
 include('conex.php');

 $name=$_POST['name'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $direc=$_POST['direc'];
 $phone=$_POST['phone'];

 $query="INSERT INTO `usuario`(`id_usu`, `nombre_usu`, `correo_usu`, `contra_usu`, `direccion_usu`, `telefono_usu`, `tipo_usu`) 
        VALUES (NULL,'$name','$email','$pass','$direc','$phone','1')";
 $resul=mysqli_query($con, $query) or die(mysqli_error($con));

 echo json_encode('ok');

 


?>