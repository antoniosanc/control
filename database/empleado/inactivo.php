<?php 
	require_once '../conexion.php';
	if (isset($_POST["nombre"])) {
		
	$name=$_POST["nombre"];
	$sql = mysqli_query($conexion, "UPDATE `empleados_stic` SET `status`='Inactivo' WHERE nombre='$name'" );
		
	}

?>

