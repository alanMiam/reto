<?php
include 'conex.php';
if($conex){
	echo"Conectado a la base de datos";
}else{
	echo"Error al conectar a la base de datos";
}

if (isset($_POST['registrar'])){
	if (strlen($_POST['nombre'])>=1 && 
	    strlen($_POST['correo'])>=1 &&
	    strlen($_POST['contraseña'])>=1){

		$nombre = trim($_POST['nombre']);
		$correo = trim($_POST['correo']);
		$contraseña = trim($_POST['contraseña']);

		$consulta = "INSERT INTO `usuarios`(`nombre`, `correo`, `contraseña`) VALUES ('$nombre','$correo','$contraseña')";

		$resultado = mysqli_query($conex, $consulta);

		if($resultado){
			?>
			<h3 class ="ok">REGISTRO EXITOSO UwU</h3>
			<?php
		}else{
			?>
			<h3 class ="bad">REGISTRO ERRONEO 7n7</h3>
			<?php
		}
	}else{
			?>
			<h3 class ="bad">COMPLETE LOS CAMPOS 0w0</h3>
			<?php
		}
}
?>
