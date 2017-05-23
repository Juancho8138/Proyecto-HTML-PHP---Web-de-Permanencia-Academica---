<?php
/*include "validar.php";*/

$conexion = mysqli_connect("localhost","root","juandiego5554257");
mysqli_select_db($conexion,"base_de_datos");

// recibir los datos y almacenarlos en variables
$name =    $_POST["name"];
$lastname =  $_POST["lastname"];
$mail =   $_POST["mail"];
$carrer =     $_POST["carrer"];
$class =  $_POST["class"];
$namep =   $_POST["namep"];
$lastnamep = $_POST["lastnamep"];
$msg =     $_POST["msg"];

// consulta para insertar
$insertar = "INSERT INTO reporte (Nombres_del_Estudiante, Apellidos_del_Estudiante, Correo_del_Estudiante, Carrera, Materia, Nombres_del_Profesor, Apellidos_del_Profesor, Observaciones) VALUES('$name', '$lastname', '$mail' , '$carrer','$class', '$namep', '$lastnamep' , '$msg')";


//ejecutar consulta
$resultado = mysqli_query ($conexion,$insertar);
if (!$resultado){
	echo 'Error al enviar la solicitud';
} else {
	echo 'El reporte ha sido recibido, pronto se contactara al estudiante';
}



//cerrar conexion
mysqli_close ($conexion);

?>