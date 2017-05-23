<?php
/*include "validar.php";*/

$conexion = mysqli_connect("localhost","root","juandiego5554257");
mysqli_select_db($conexion,"base_de_datos");

// recibir los datos y almacenarlos en variables
$Nombres =    $_POST["Nombres"];
$Apellidos =  $_POST["Apellidos"];
$Cedula =   $_POST["Cedula"];
$Correo =     $_POST["Correo"];
$Carrera =  $_POST["Carrera"];
$Curso =     $_POST["Curso"];
$Disponibilidad =  $_POST["Disponibilidad"];

// consulta para insertar
$insertar = "INSERT INTO inscripcion(Nombres, Apellidos, Cedula, Correo, Carrera, Curso, Disponibilidad) VALUES('$Nombres', '$Apellidos', '$Cedula', '$Correo','$Carrera', '$Curso', '$Disponibilidad')";


//ejecutar consulta
$resultado = mysqli_query ($conexion,$insertar);
if (!$resultado){
	echo 'Error al registrarse';
} else {
	echo 'Te has registrado exitosamente, pronto te enviaremos un correo con los posibles horarios';
}



//cerrar conexion
mysqli_close ($conexion);

?>