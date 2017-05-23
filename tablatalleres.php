<!DOCTYPE html>
<html >
  <head>
       <title>Talleres</title>
<link rel="stylesheet" href="estilos.css">
  </head>   
  <body>
      <center>
        <table border="3">
          <thead>
         <tr>
            <th colspan="1"> <a href="" href=""></a></th>
            <th colspan="5">Talleres</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <td>Taller</td>   
                 <td>Docentes</td>   
                 <td>Horario</td>   
                 <td>Aula</td>   
                 <td>ID</td>

                 


              </tr>

              <?php

              /*include("validar.php");*/
              
               $conexion = mysqli_connect('localhost', 'root', 'juandiego5554257','base_de_datos');

              $query="SELECT * FROM ciclo_de_talleres";
              $resultado= $conexion->query($query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
                <td><?php echo $row['Taller']; ?></td>
                <td><?php echo $row['Docentes']; ?></td>
                <td><?php echo $row['Horario']; ?></td>
                <td><?php echo $row['Aula']; ?></td>
                <td><?php echo $row['ID']; ?></td>

              </tr>

             <?php

              }

              ?>

          </tbody>
        </table>
       </center>
       
  </body>
</html>