<?php
/*include "validar.php";*/

$conexion = mysqli_connect("localhost","root","juandiego5554257");
mysqli_select_db($conexion,"base_de_datos");

// recibir los datos y almacenarlos en variables
$ID = $_REQUEST ['ID'];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$mail = $_POST["mail"];
$carrer = $_POST["carrer"];
$class = $_POST["class"];
$namep = $_POST["namep"];
$lastnamep = $_POST["lastnamep"];
$msg = $_POST["msg"];


// consulta para insertar

//$insertar = "UPDATE reporte SET Nombres_del_Estudiante ='$name', Apellidos_del_Estudiante, Correo_del_Estudiante, Carrera, Materia, Nombres_del_Profesor, Apellidos_del_Profesor, Observaciones) VALUES (, '$lastname', '$mail' , '$carrer','$class', '$namep', '$lastnamep' , '$msg')";

$query = "UPDATE reporte SET Nombres_del_Estudiante = '$name', Apellidos_del_Estudiante = '$lastname', Correo_del_Estudiante = '$mail', Carrera = '$carrer', Materia = '$class', Nombres_del_Profesor = '$namep', Apellidos_del_Profesor = '$lastnamep', Observaciones = '$msg' WHERE ID='$ID'";


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