<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conex=mysqli_connect("localhost","root","","reto");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conex,$consulta);
$filas=mysqli_fetch_array($resultado);


if ($filas['id']) {
	header("location:inicio.html");
}else{
	header("location:index.php");
	?>
	<?php
	include("index.php");
	?>
	<h1 class="boton1" >ERROR AL INICIAR SESION</h1>
	<?php
	}
mysqli_free_result($resultado);
mysqli_close($conex);
?>
