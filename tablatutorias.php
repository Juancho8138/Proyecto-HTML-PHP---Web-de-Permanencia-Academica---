<!DOCTYPE html>
<html >
  <head>
       <title>Tutorias</title>
<link rel="stylesheet" href="estilos.css">
  </head>   
  <body>
      <center>
        <table border="3">
          <thead>
         <tr>
            <th colspan="1"> <a href="" href=""></a></th>
            <th colspan="5">Tutorias</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <td>Tutoria</td>   
                 <td>Responsable</td>   
                 <td>Dias</td>   
                 <td>Horas</td>   
                 <td>ID</td>   


              </tr>

              <?php

              /*include("validar.php");*/
              
               $conexion = mysqli_connect('localhost', 'root', 'juandiego5554257','base_de_datos');

              $query="SELECT * FROM tutorias";
              $resultado= $conexion->query($query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
                <td><?php echo $row['Tutoria']; ?></td>
                <td><?php echo $row['Responsable']; ?></td>
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