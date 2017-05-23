<?php
/*include "validar.php";*/

$ID = $_REQUEST['ID'];

$conexion = mysqli_connect("localhost","root","juandiego5554257");
mysqli_select_db($conexion,"base_de_datos");

// recibir los datos y almacenarlos en variables


// consulta para insertar
$query= "DELETE FROM reporte WHERE ID = '$ID'";


//ejecutar consulta
//$resultado = mysqli_query ($conexion,$insertar);

$resultado = $conexion ->query($query);

if(!$resultado){
    echo "Error al eliminar";
}
else{
    echo "Eliminado";
}
//cerrar conexion
mysqli_close ($conexion);

?>