<?php 

require_once '../conexion.php';
	if(isset($_POST["nombre"])) {
		$nombre=$_POST["nombre"];
		$correo=$_POST["correo"];
		$puesto=$_POST["puesto"];
		$rfc=$_POST["rfc"];
		$curp=$_POST["curp"];
		$nss=$_POST["nss"];
		$ine=$_POST["ine"];
		$telefono=$_POST["telefono"];
		$imei=$_POST["imei"];

		$query = mysqli_query($conexion, "INSERT INTO empleados_stic(`nombre`, `ine`, `rfc`, `curp`, `telefono`, `nss`, `puesto`, `correo`, `imei`, `status`  ) VALUES ('$nombre', '$ine', '$rfc', '$curp', '$telefono', '$nss', '$puesto', '$correo', '$imei', 'Activo')");
		if($query){
	      $resultado = "exito";
	    }else{
	      $resultado = "error";
	    }
	    header('Location: ../../empleados.php');
	}

?>