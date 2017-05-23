<!DOCTYPE html>
<html >
  <head>
       <title>Asesorias</title>
<link rel="stylesheet" href="estilos.css">
  </head>   
  <body>
      <center>
        <table border="3">
          <thead>
         <tr>
            <th colspan="1"> <a href="" href=""></a></th>
            <th colspan="5">LISTA DE ASESORIAS</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <td>Actividad_o_Servicio</td>   
                 <td>Responsables</td>   
                 <td>Dias</td>   
                 <td>Horas</td>   
                 <td>ID</td>   


              </tr>

              <?php

             // include("validar.php");
              
              $conexion = mysqli_connect('localhost', 'root', 'juandiego5554257','base_de_datos');

              $query="SELECT * FROM asesorias";
              $resultado= $conexion->query($query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
                <td><?php echo $row['Actividad_o_Servicio']; ?></td>
                <td><?php echo $row['Responsables']; ?></td>
                <td><?php echo $row['Dias']; ?></td>
                <td><?php echo $row['Horas']; ?></td>
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