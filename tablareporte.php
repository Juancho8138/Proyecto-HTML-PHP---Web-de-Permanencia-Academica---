<!DOCTYPE html>
<html> 
  <head>
       <title>Reportes de Estudiantes</title>
<link rel="stylesheet" href="estilos.css">
  </head>   
  <body>
      <center>
        <table border="3">
          <thead>
         <tr>
            <th colspan="1"> <a href="" href=""></a></th>
            <th colspan="5">Reportes de Estudiantes</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <td>Nombres del Estudiante</td>   
                 <td>Apellidos del Estudiante</td>   
                 <td>Correo del Estudiante</td>   
                 <td>Carrera</td>   
                 <td>Materia</td>
                 <td>Nombres del Docente</td>
                 <td>Apellidos del Docente</td>
                 <td>Observaciones</td>
                 <td>ID</td>
                 <!--<td>Modificar</td>
                 <td>Eliminar</td> -->


              </tr>

              <?php

              /*include("validar.php");*/
              
               $conexion = mysqli_connect('localhost', 'root', 'juandiego5554257','base_de_datos');

              $query="SELECT * FROM reporte";
              $resultado= $conexion->query($query);
              while($row=$resultado->fetch_assoc()){

             ?>
             
              <tr>
                <td><?php echo $row['Nombres_del_Estudiante']; ?></td>
                <td><?php echo $row['Apellidos_del_Estudiante']; ?></td>
                <td><?php echo $row['Correo_del_Estudiante']; ?></td>
                <td><?php echo $row['Carrera']; ?></td>
                <td><?php echo $row['Materia']; ?></td>
                <td><?php echo $row['Nombres_del_Profesor']; ?></td>
                <td><?php echo $row['Apellidos_del_Profesor']; ?></td>
                <td><?php echo $row['Observaciones']; ?></td>
                <td><?php echo $row['ID']; ?></td>
            </tr>
              <tr>
                <td> <a href="modificar.php?ID=<?php echo $row['ID']; ?> "> Modificar </a></td>
                <td> <a href="eliminar.php?ID=<?php echo $row['ID']; ?> "> Eliminar </a></td>
            </tr>      
             
             

             <?php

              }

              ?>

          </tbody>
        </table>
       </center>
       
  </body>
</html>