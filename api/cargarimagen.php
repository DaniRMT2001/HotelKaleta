<?php 

    include 'conex.php';

	 	$query = "SELECT * FROM habit"; 
	 	$resultado = mysqli_query($con, $query); 
	
	$datos = array();

	while ($obj = mysqli_fetch_object($resultado)) {

		$datos[] = array('id'=> $obj->id_hab 
						,'camas'=> $obj->camas_hab
                        ,'num'=> $obj->num_hab
                        ,'edificio'=> $obj->edificio_hab
                        ,'imagen'=> $obj->imagen
						,'precio'=> $obj->precio
						,'descripcion'=> $obj->descripcion
						,'tipo_hab'=> $obj->tipo_hab
                     );	 

	}

	$fila = mysqli_num_rows($resultado);

	if ($fila > 0) {
		
		echo json_encode($datos);
	}else{
	}

?>