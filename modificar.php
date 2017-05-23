<html>
    <head>
        <title>Reporte</title>
        <link rel="stylesheet" href="registro.css">


    </head>
    <body>
        <center>
            
       <center>
        <h1> Reportar Estudiante </h1>     
      </center>
            
            <div>
                
                        
            <?php    
            $conexion = mysqli_connect('localhost', 'root', 'juandiego5554257','base_de_datos');
                
            $ID=$_REQUEST ['ID'];
            //mysql_select_db($conexion,'reporte');
                
            $query="SELECT * FROM reporte WHERE ID='$ID'";
            $resultado = mysqli_query($conexion,$query);
            $row=$resultado->fetch_assoc();
            
                
            ?>    
                    
                
            <form action="modificar_proceso.php?ID=<?php echo $row['ID']; ?>" method="post">
            

                <div>
                    <!--<label for="name"></label>-->
                    <input class="text" type="text" id="name" name="name" placeholder="Nombre estudiante" value="<?php echo $row ['Nombres_del_Estudiante']; ?>" />
                </div>
                <div>
                    <!--<label for="lastname">Apellidos del Estudiante: </label>-->
                    <input class="text"  type="text" id="lastname" name="lastname" placeholder="Apellido Estudiante" value=" <?php echo $row ['Apellidos_del_Estudiante']; ?> " />
                </div>
                <div>
                    <!--<label for="mail">Correo del Estudiante: </label>-->
                    <input class="text" type="text" id="mail" name="mail" placeholder="Corrreo Estudiante" value=" <?php echo $row ['Correo_del_Estudiante']; ?> " />
                </div>                
                <div>
                   <!-- <label for="carrer">Carrera: </label>-->
                    <input class="text"  type="text" id="carrer" name="carrer" placeholder="Carrera" value=" <?php echo $row ['Carrera']; ?> " />
                </div>
                <div>
                    <!--<label for="class">Materia: </label>-->
                    <input class="text"  type="text" id="class" name="class" placeholder="Materia" value=" <?php echo $row ['Materia']; ?> " />
                </div>
                <div>
                    <!--<label for="namep">Nombre del Profesor: </label>-->
                    <input class="text"  type="text" id="namep" name="namep" placeholder="Nombre Docente" value=" <?php echo $row ['Nombres_del_Profesor']; ?> " />
                </div>
                <div>
                    <!--<label for="lastnamep">Apellidos del Profesor: </label>-->
                    <input class="text"  type="text" id="lastnamep" name="lastnamep" placeholder="Apellido Docente" value=" <?php echo $row ['Apellidos_del_Profesor']; ?> " />
                </div>
                <div>
                    <!--<label for="msg">Observaciones: </label>-->
                    <input class="text" type ="text" id="msg" name="msg" placeholder="Observaciones" value=" <?php echo $row ['Observaciones']; ?> " /> 
                </div>
                
                <div class="button">
                    <center>
                        <button type="submit" > Enviar </button>
                        <button>
                            <a href="index.html">Regresar</a>
                        </button>
                        
                        
                    </center>
                    
                </div>
            </form>
        </div>
        </center>
    </body>
</html>