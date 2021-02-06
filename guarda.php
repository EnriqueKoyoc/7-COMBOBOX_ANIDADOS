<?php
	require ('conexion.php');
	
	$id_localidad = $_POST['cbx_localidad'];
	
	$sql = "INSERT INTO datos (id, id_localidad) VALUES(NULL,'$id_localidad')";
	$resultado = $mysqli->query($sql);
	
	if($resultado){
		echo "Registro Guardado";
		} else {
		echo "Error al Registrar";
	}
?>