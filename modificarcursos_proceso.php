<?php
/*include "validar.php";*/

$conexion = mysqli_connect("localhost","root","juandiego5554257");
mysqli_select_db($conexion,"base_de_datos");

// recibir los datos y almacenarlos en variables
$ID = $_REQUEST ['ID'];
$Nombres = $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$Cedula = $_POST["Cedula"];
$Correo = $_POST["Correo"];
$Carrera = $_POST["Carrera"];
$Curso = $_POST["Curso"];
$Disponibilidad = $_POST["Disponibilidad"];


// consulta para insertar

//$insertar = "UPDATE reporte SET Nombres_del_Estudiante ='$name', Apellidos_del_Estudiante, Correo_del_Estudiante, Carrera, Materia, Nombres_del_Profesor, Apellidos_del_Profesor, Observaciones) VALUES (, '$lastname', '$mail' , '$carrer','$class', '$namep', '$lastnamep' , '$msg')";

$query = "UPDATE inscripcion SET Nombres = '$Nombres', Apellidos = '$Apellidos', Cedula = '$Cedula', Correo = '$Correo', Carrera = '$Carrera', Curso = '$Curso', Disponibilidad = '$Disponibilidad', WHERE ID='$ID'";


//ejecutar consulta
$resultado= $conexion->query($query);
if (!$resultado){
	echo 'Error al modificar';
} else {
	echo 'Se han hecho los cambios correctamente';
}



//cerrar conexion
mysqli_close ($conexion);

?>