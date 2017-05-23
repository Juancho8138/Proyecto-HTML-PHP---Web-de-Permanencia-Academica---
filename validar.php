<?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if (empty($usuario) || empty($pass)) {
	header ("Location: index.html");
	exit ();
}


$conexion = mysqli_connect('localhost', 'root', 'juandiego5554257','base_de_datos') or die("Error al Conectar" .mysql_error());

$consulta = "SELECT * FROM estudiantes  WHERE Correo='$usuario' AND Cedula='$pass'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0){
	header("location: webestudiantes.html");
}
else{
	echo "Error en la autenticacion";
    mysqli_free_result($resultado);
}
mysqli_close($conexion);

?>

<?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if (empty($usuario) || empty($pass)) {
	header ("Location: index.html");
	exit ();
}


$conexion = mysqli_connect('localhost', 'root', 'juandiego5554257','base_de_datos') or die("Error al Conectar" .mysql_error());

$consulta = "SELECT * FROM profesores  WHERE Correo='$usuario' AND Cedula='$pass'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0){
	header("location: webdocentes.html");
}
else{
	echo "Error en la autenticacion";
    mysqli_free_result($resultado);
}
mysqli_close($conexion);

?>


<?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if (empty($usuario) || empty($pass)) {
	header ("Location: index.html");
	exit ();
}


$conexion = mysqli_connect('localhost', 'root', 'juandiego5554257','base_de_datos') or die("Error al Conectar" .mysql_error());

$consulta = "SELECT * FROM administrador  WHERE Correo='$usuario' AND Cedula='$pass'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0){
	header("location: webadministrador.html");
}
else{
	echo "Error en la autenticacion";
    mysqli_free_result($resultado);
}
mysqli_close($conexion);

?>