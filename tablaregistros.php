<!DOCTYPE html>
<html >
  <head>
       <title>Estudiantes Registrados</title>
<!--<link rel="stylesheet" href="estilos.css">-->
<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>
  </head>   
  <body>
      <center>
        <table border="3">
          <thead>
         <tr>
           <!-- <th colspan="1"> <a href="" href=""></a></th>-->
            <th colspan="10">Estudiantes Registrados</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <td>Nombres</td>   
                 <td>Apellidos</td>   
                 <td>Cedula</td>   
                 <td>Correo</td>   
                 <td>Carrera</td>
                 <td>Curso</td>
                 <td>Disponibilidad</td>
                 <td>ID</td>
                 <td colspan="2">Operaciones</td>
                 <!-- <td>Modificar</td>
                 <td>Eliminar</td> -->


              </tr>

              <?php

              /*include("validar.php");*/
              
               $conexion = mysqli_connect('localhost', 'root', 'juandiego5554257','base_de_datos');

              $query="SELECT * FROM inscripcion";
              $resultado= $conexion->query($query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
                <td><?php echo $row['Nombres']; ?></td>
                <td><?php echo $row['Apellidos']; ?></td>
                <td><?php echo $row['Cedula']; ?></td>
                <td><?php echo $row['Correo']; ?></td>
                <td><?php echo $row['Carrera']; ?></td> 
                <td><?php echo $row['Curso']; ?></td>
                <td><?php echo $row['Disponibilidad']; ?></td>
                <td><?php echo $row['ID']; ?></td>
                <td> <a href="modifcarcursos.php?ID=<?php echo $row ['ID']; ?> "> Modificar </a></td>
                <td> <a href="eliminarcursos.php?ID=<?php echo $row['ID']; ?> "> Eliminar </a></td>  
              </tr>
             <!-- <tr>
                <td> <a href="modifcarcursos.php?ID=<?php echo $row; ?> "> Modificar </a></td>
                <td> <a href="eliminarcursos.php?ID=<?php echo $row; ?> "> Eliminar </a></td>
              </tr>--> 

             <?php
                  
              }

              ?>

          </tbody>
        </table>
       </center>
       
  </body>
</html>