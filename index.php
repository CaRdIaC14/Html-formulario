<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link rel="icon" type="image/png" href="Img\logo.png">
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="bootstrap4/css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
		<title>Formulario</title>
	</head>
	
	<body>
		<div id="principal">
			<header>
				<div id="logo">
					<img src="Img\logo.png" class="imagen">
				</div>
				<nav class="menu">
					<ul>
						<li><a href="contruccion.html">Enlace 1</a></li>
						<li><a href="contruccion.html">Enlace 2</a></li>
						<li><a href="contruccion.html">Enlace 3</a></li>
					</ul>
				</nav>
			</header>
		
			<form action="insertarBD.php" method="POST" class="formulario" enctype="multipart/form-data">
				<div id="titulo">
					<h2>Solicitud de Empleo</h2>
				</div>
				<div id="subTitulo">
					<h3>1. DATOS PERSONALES:</h3>	
				</div>

				<div class="datosPersonales">
					<p>
						<label for="nombre">Nombre:</label>
						<input type="text" name="nombre" id="nombre" placeholder="Juan"  required>
					</p>
					<p>
						<label for="apellido">Apellido:</label>
						<input type="text" name="apellido" id="apellido" placeholder="Perez" required>
					</p>
					<p>
						<label for="nacimiento">Fecha de nacimiento:</label>
						<input type="date" name="nacimiento"id="nacimiento value="01-01-2020" " required>
					</p>
					<p>
						<label for="rut">Rut:</label>
						<input type="text" name="rut" id="rut" placeholder="12.345.678-9" maxlength="12" required >
					</p>
					<p>
						<label for="telefono">Telefono:</label>
						<input type="tel" id="telefono" id="telefono" name="telefono"placeholder="12345678" pattern="[0-9]{8}">
					</p>
					<p>
						<label for="direccion">Direccion actual:</label>	
						<input type="text" name="direccion" id="direccion" placeholder=" calle 123 poblacion"  required>
					</p>
					<p>
						<label for="nacionalidad">Nacionalidad:</label>
						<input type="text" id="nacionalidad" name="nacionalidad"  required>
					</p>
					<p>
						<label for="grado">Grado de estudio:</label>
						<input type="text" name="grado" id="grado"  required>
					</p>
					<p class="block">
						<label for="civil">Estado civil:</label>
						<div class="radio">
							<input type="radio" name="estadoCivil"  id="soltero" value="soltero">
							<label for="soltero">Soltero</label>
							<input type="radio" name="estadoCivil"id="casado" value="casado">
							<label for="casado">Casado</label>
							<input type="radio" name="estadoCivil" id ="otro" value="otro">
							<label for="otro">Otro</label>
						</div>
					</p>
					<p class=" block">
						<label for="Vive">Vive con:</label>
						<div class="radio">
							<input type="radio" name="vive" id ="solo" value="solo">
							<label for="solo">Solo/a</label>
							<input type="radio" name="vive"id ="padres" value="padres">
							<label for="padres">Padres</label>
							<input type="radio" name="vive"id ="familiares" value="familiares">
							<label for="familiares">Familiares</label>
							<input type="radio" name="vive"id ="otros" value="otros">
							<label for="otros">Otro</label>
						</div>
					</p>
					<p class="block">
						<label for="depende">Personas que dependen de usted:</label>
						<div class="checkbox">
							<input type="checkbox" name="depende[]" id="Esposo" value="esposo">
							<label for="Esposo" >Esposo/a</label>
							<input type="checkbox" name="depende[]" id="Hijos" value="hijos">
							<label for="Hijos" >Hijos</label>
							<input type="checkbox" name="depende[]" id="Hermano" value="hermano">
							<label for="Hermano" >Hermano/a</label>
							<input type="checkbox" name="depende[]" id="Padres" value="padre">
							<label for="Padres" >Padres</label>
							<input type="checkbox" name="depende[]" id="Otros" value="otro">
							<label for="Otros" >Otros</label>
						</div>
					</p>
				</div>

				<div id="subTitulo">
					<h3>2. ESTADO DE SALUD:</h3>
				</div>
				<div class="salud">
					<b>Alguna enfermedad crónica:</b>
					<div class="main row">
						<div class="col-md-0"></div>
						<div class="col-md-4">
							<div class="radio">
								<input type="radio" name="siNo" id="si" value="si">
								<label for="si">No</label>
								<input type="radio" name="siNo" id="no" value="no">
								<label for="no">Si (Explique)</label>
							</div>
						</div>
						<div class="col-md-8">
							<textarea name="explicacion" id="textArea" ></textarea>
						</div>	
					</div>
				</div>
					
				<div id ="subTitulo">
					<h3>3. ESTUDIOS:</h3>
				</div>
				<div class="estudios">
					<div class="main row">	
						<div class="col-md-4">
							<h4>Enseñanza basica:</h4>
							<a>Nombre escuela:</a>
							<input type="text" name="escuelaBasica"required>
							<br>
							<a>Años de estudios:</a>
							<input type="text" name="anioBasica" required>
							<br>
							<a>Certificado</a>
							<input type="file" class="btn-sm btn-block btn-primary" name="certificacionBasica" required>
						</div>
						<div class="col-md-4"> 
							<h4>Enseñanza media:</h4>
							<a>Nombre escuela</a>
							<input type="text" name="escuelaMedia"required>
							<br>
							<a>Años de estudios:</a>
							<input type="text" name="anioMedia" required>
							<br>
							<a>Certificado</a>
							<input type="file" class="btn-sm btn-block btn-primary" id="certificacionMedia" name="certificacionMedia" required>
						</div>
						<div class="col-md-4">
							<h4>Enseñanza Superior:</h4>
							<a>Nombre Universidad:</a>
							<input type="text" name="universidad"required>
							<br>
							<a>Años de estudios:</a>
							<input type="text" name="anioSuperior" required>
							<br>
							<a>Certificado</a>
							<input type="file" class="btn-sm btn-block btn-primary" id="CertificadacionSuperior" name="certificadacionSuperior" required>
						</div>
					</div>
				</div>
				<br>
				<input type="submit" name="btnEnviar" value="Enviar" class="btn btn-block btn-primary" id="enviar">
			</form>
			<br>
		</div>
	</body>
</html> 
