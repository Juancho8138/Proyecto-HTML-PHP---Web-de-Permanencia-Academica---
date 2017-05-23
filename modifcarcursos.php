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

			<?php  
			$ID=$_REQUEST ['ID'];  
			$conexion = mysqli_connect('localhost', 'root', 'juandiego5554257','base_de_datos');

			
			//mysql_select_db($conexion,'reporte');

			$query="SELECT * FROM inscripcion WHERE ID='$ID'";
			$resultado = mysqli_query($conexion,$query);
			$row=$resultado->fetch_assoc();
			?>    
			
			<form action="modificarcursos_proceso.php?ID=<?php echo $row['ID']; ?>" method="post">
					<div>
						<form action="registro.php" method="post">
							<div>
								<!--<form action="/my-handling-form-page" method="post">
									<div>
									<!--<label for="Nombres">Nombres: </label>-->
									<input class="text" type="text" id="Nombres" name="Nombres" placeholder="Nombres" value="<?php echo $row['Nombres']; ?>" /> 
									</div>
									<div>
									<!--<label for="Apellidos">Apellidos: </label>-->
									<input class="text"  type="text" id="Apellidos" name="Apellidos" placeholder="Apellidos" value="<?php echo $row ['Apellidos']; ?>" />
									</div>
									<div>
									<!--<label for="Cedula">Cedula: </label>-->
									<input class="text"  type="text" id="Cedula" name="Cedula" placeholder="Cedula"  value="<?php echo $row ['Cedula']; ?>" />
									</div>
									<div>
									<!--<label for="Correo">Correo: </label>-->
									<input class="text"  type="text" id="Correo" name="Correo" placeholder="Correo"  value="<?php echo $row ['Correo']; ?>" />
									</div>
									<div>
									<!--<label for="Carrera">Carrera: </label>-->
									<input class="text"  type="text" id="Carrera" name="Carrera" placeholder="Carrera"  value="<?php echo $row ['Carrera']; ?>" />
									</div>

									<select name="Curso"> value="<?php echo $row ['Nombres_del_Estudiante']; ?>" />
										<option selected value="0"> Elige una opción </option>
										<optgroup label="Tutoria"> 
											<option value="Matematica Basica">Matematica Basica</option> 
											<option value="LectoEscritura">LectoEscritura</option> 
											<option value="Ingles">Ingles</option> 
										</optgroup> 
										<optgroup label="Talleres"> 
											<option value="Comprension Lectora">Comprension Lectora</option> 
											<option value="Ingles">Ingles</option> 
											<option value="Fortalecimiento Personal">Fortalecimiento Personal</option>
											<option value="Pensamiento Logico-Matematico">Pensamiento Logico-Matematico</option> 
										</optgroup> 
										<optgroup label="Asesorias"> 
											<option value="Talleres de Fortalecimiento Personal y Academico">Talleres de Fortalecimiento Personal y Academico</option> 
											<option value="
											Talleres de Comprension Lectora y Produccion Escrita">Talleres de Comprension Lectora y Produccion Escrita</option> 
											<option value="Talleres de Ingles">Talleres de Ingles</option>
											<option value="Talleres de Pensamiento Logico-Matematico">Talleres de Pensamiento Logico-Matematico</option>
											<option value="Tutorias en Competencias Basicas">Tutorias en Competencias Basicas</option> 
											<option value="Asesorias Psicologicas y Psicopedagogica">Asesorias Psicologicas y Psicopedagogica</option>
											<option value="Orienteacion Vocacional y Profesional">Orienteacion Vocacional y Profesional</option> 
											<option value="Asesorias en Habitos de Estudios">Asesorias en Habitos de Estudios</option> 
											<option value="Cosejeria Estudiantil">Cosejeria Estudiantil</option>
											<option value="29">Apoyo a los Estudiantes en Condicion de Discapacidad</option> 
										</optgroup> 
									</select>

									<select name="Disponibilidad">
										<option selected value="30"> Disponibilidad </option>
										<option value="Mañana">Mañana</option> 
										<option value="Tarde">Tarde</option> 
										<option value="Noche">Noche</option> 
									</select> 

									<div class="button">
										<center>
											<button type="submit" > Enviar </button>
											<button>
											<a href="webestudiantes.html">Regresar</a>
											</button>
										</center>
									</div>
								<!--</form>-->
							</div>
						</form>
					</div>
			</form>
		</center>
	</body>
</html>

