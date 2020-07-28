<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link rel="icon" type="image/png" href="Img\logo.png">
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<title>Formulario</title>
	</head>
	
	<body>
		<div id="principal">
			<header>
				<div id="logo">
					<img src="Img\logo.png" class="imagen">
				</div>
				<nav class="menu">
					<div class="modal fade" id="eliminar" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-sm modal-xs modal-md modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h2>Eliminar Solicitud de Empleo</h2>
								</div>

								<div class="modal-body">
									<?php
										include ("conexion.php");
										$query="SELECT * FROM datospersonales";
										$res=$conexion->query($query);
										while($row =$res->fetch_assoc()){
											?><form action="eliminar.php" method="POST" class="formularioEliminar">
												<div class="row">
													<div class="col-md-6">
														<?php 
															echo "Nombre: ".$row["nombre"]." ".$row["apellido"] ."<br>";
															echo "Rut: ",$row["rut"]."<br>";
															echo "Direccion actual: ",$row["dirreccion"]."<br>";
															echo "Grado de estudio: ",$row["grado"]."<br>";
															echo "Estado civil: ",$row["estadoCivil"]."<br>";
														?>
													</div>
													<div class="col-md-6">
														<?php 
															echo "Fecha de nacimiento : ",$row["fechaNacimiento"]."<br>";
															echo "Telefono: ",$row["telefono"]."<br>";
															echo "Nacionalidad: ",$row["nacionalidad"]."<br>";
															echo "Vive con: ",$row["vive"]."<br>";
															if($row["estadoSalud"]!="NULL"){
																echo "Estado salud: ".$row["estadoSalud"]."<br>";
															}			
														?>
													</div>
												</div>
												<?php

												if ($row["espaso"]=="si" || $row["hijo"]=="si" || $row["hermano"]=="si" || $row["padre"]=="si" || $row["otros"]=="si"){
													echo "Personas que dependen de usted:<br>";
													?>
													<div class="depende"><?php		
														if($row["espaso"]=="si"){
															echo "-Esposo/a <br>";
														}
														if($row["hijo"]=="si"){
															echo "-Hijo/a <br>";
														}
														if($row["hermano"]=="si"){
															echo "-Hermano/a <br>";
														}
														if($row["padre"]=="si"){
															echo "-Padres <br>";
														}
														if($row["otros"]=="si"){
															echo "-Otro <br>";
														}
													?></div><?php
													
												}
												?>
												<div class="row">
													<div class="col-md-4">
														<?php
														echo "Nombre escuela basica: ".$row["nombreBasica"]."<br>";
														echo "Años de estudio: ".$row["anioBasica"]."<br>";
														echo "Certidicado:<br>";
														?>
														<img src="data:image/jpg;base64,<?php echo base64_encode($row["certificadoBasica"]); ?>",width="100px", height="100px">
													</div>
													<div class="col-md-4">
														<?php
														echo "Nombre escuela basica: ".$row["nombreMedia"]."<br>";
														echo "Años de estudio: ".$row["anioMedia"]."<br>";
														echo "Certidicado:<br>";
														?>
														<img src="data:image/jpg;base64,<?php echo base64_encode($row["certificadoMedia"]); ?>",width="100px", height="100px">
													</div>
													<div class="col-md-4">
															<?php
														echo "Nombre escuela basica: ".$row["nombreSuperior"]."<br>";
														echo "Años de estudio: ".$row["anioSuperior"]."<br>";
														echo "Certidicado:<br>";
														?>
														<img src="data:image/jpg;base64,<?php echo base64_encode($row["certificadoSuperior"]); ?>",width="100px", height="100px">
													</div>
												</div>
												<input type="hidden" name="rut" value="<?php echo $row["rut"];?>">
												<div class="btnEliminar">
													<input type="submit" class="btn btn-danger" value="Eliminar">
												</div>
											</form>
											<?php
									}?>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-primary">Cerrar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modificar" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-sm modal-xs modal-md modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h2>Modificar Solicitud de Empleo</h2>
								</div>

								<div class="modal-body">
									<?php
										include ("conexion.php");
										$query="SELECT * FROM datospersonales";
										$res=$conexion->query($query);
										while($row =$res->fetch_assoc()){
											?><form action="modificar.php" method="POST" class="formularioEliminar">
												<div class="row">
													<div class="col-md-6">
														<?php 
															echo "Nombre: ".$row["nombre"]." ".$row["apellido"] ."<br>";
															echo "Rut: ",$row["rut"]."<br>";
															echo "Direccion actual: ",$row["dirreccion"]."<br>";
															echo "Grado de estudio: ",$row["grado"]."<br>";
															echo "Estado civil: ",$row["estadoCivil"]."<br>";
														?>
													</div>
													<div class="col-md-6">
														<?php 
															echo "Fecha de nacimiento : ",$row["fechaNacimiento"]."<br>";
															echo "Telefono: ",$row["telefono"]."<br>";
															echo "Nacionalidad: ",$row["nacionalidad"]."<br>";
															echo "Vive con: ",$row["vive"]."<br>";
															if($row["estadoSalud"]!="NULL"){
																echo "Estado salud: ".$row["estadoSalud"]."<br>";
															}			
														?>
													</div>
												</div>
												<?php

												if ($row["espaso"]=="si" || $row["hijo"]=="si" || $row["hermano"]=="si" || $row["padre"]=="si" || $row["otros"]=="si"){
													echo "Personas que dependen de usted:<br>";
													?>
													<div class="depende"><?php		
														if($row["espaso"]=="si"){
															echo "-Esposo/a <br>";
														}
														if($row["hijo"]=="si"){
															echo "-Hijo/a <br>";
														}
														if($row["hermano"]=="si"){
															echo "-Hermano/a <br>";
														}
														if($row["padre"]=="si"){
															echo "-Padres <br>";
														}
														if($row["otros"]=="si"){
															echo "-Otro <br>";
														}
													?></div><?php
												}
												?>
												<div class="row">
													<div class="col-md-4">
														<?php
														echo "Nombre escuela basica: ".$row["nombreBasica"]."<br>";
														echo "Años de estudio: ".$row["anioBasica"]."<br>";
														echo "Certidicado:<br>";
														?>
														<img src="data:image/jpg;base64,<?php echo base64_encode($row["certificadoBasica"]); ?>",width="100px", height="100px">
													</div>
													<div class="col-md-4">
														<?php
														echo "Nombre escuela basica: ".$row["nombreMedia"]."<br>";
														echo "Años de estudio: ".$row["anioMedia"]."<br>";
														echo "Certidicado:<br>";
														?>
														<img src="data:image/jpg;base64,<?php echo base64_encode($row["certificadoMedia"]); ?>",width="100px", height="100px">
													</div>
													<div class="col-md-4">
															<?php
														echo "Nombre escuela basica: ".$row["nombreSuperior"]."<br>";
														echo "Años de estudio: ".$row["anioSuperior"]."<br>";
														echo "Certidicado:<br>";
														?>
														<img src="data:image/jpg;base64,<?php echo base64_encode($row["certificadoSuperior"]); ?>",width="100px", height="100px">
													</div>
												</div>
												<input type="hidden" name="nombre" value="<?php echo $row["nombre"];?>">
												<input type="hidden" name="apellido" value="<?php echo $row["apellido"];?>">
												<input type="hidden" name="rut" value="<?php echo $row["rut"];?>">
												<input type="hidden" name="dirreccion" value="<?php echo $row["dirreccion"];?>">
												<input type="hidden" name="grado" value="<?php echo $row["grado"];?>">
												<input type="hidden" name="estadoCivil" value="<?php echo $row["estadoCivil"];?>">
												<input type="hidden" name="fechaNacimiento" value="<?php echo $row["fechaNacimiento"];?>">
												<input type="hidden" name="telefono" value="<?php echo $row["telefono"];?>">
												<input type="hidden" name="nacionalidad" value="<?php echo $row["nacionalidad"];?>">
												<input type="hidden" name="vive" value="<?php echo $row["vive"];?>">
												<input type="hidden" name="espaso" value="">
												<input type="hidden" name="hijo" value="">
												<input type="hidden" name="hermano" value="">
												<input type="hidden" name="padre" value="">
												<input type="hidden" name="otros" value="">
												<?php
													if($row["espaso"]=="si"){?>
														<input type="hidden" name="espaso" value="<?php echo $row["espaso"];?>">
													<?php
													}
													if($row["hijo"]=="si"){?>
														<input type="hidden" name="hijo" value="<?php echo $row["hijo"];?>">
													<?php
													}
													if($row["hermano"]=="si"){?>
														<input type="hidden" name="hermano" value="<?php echo $row["hermano"];?>">
													<?php
													}
													if($row["padre"]=="si"){?>
														<input type="hidden" name="padre" value="<?php echo $row["padre"];?>">
													<?php
													}
													if($row["otros"]=="si"){?>
														<input type="hidden" name="otros" value="<?php echo $row["otros"];?>">
													<?php
													}
													if($row["estadoSalud"]!="NULL"){?>
														<input type="hidden" name="estadoSalud" value="<?php echo $row["estadoSalud"];?>">
													<?php
													}
													else{?>
														<input type="hidden" name="estadoSalud" value="">
														<?php
													}?>
												<input type="hidden" name="nombreBasica" value="<?php echo $row["nombreBasica"];?>">
												<input type="hidden" name="anioBasica" value="<?php echo $row["anioBasica"];?>">
												<input type="hidden" name="nombreMedia" value="<?php echo $row["nombreMedia"];?>">
												<input type="hidden" name="anioMedia" value="<?php echo $row["anioMedia"];?>">
												<input type="hidden" name="nombreSuperior" value="<?php echo $row["nombreSuperior"];?>">
												<input type="hidden" name="anioSuperior" value="<?php echo $row["anioSuperior"];?>">
												<div class="btnEliminar">
													<input type="submit" name="btnModificar" class="btn btn-primary" value="Modificar">
												</div>
											</form>
											<?php
									}?>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-primary">Cerrar</button>
								</div>
							</div>
						</div>
					</div>
					<ul>
						<li><a data-toggle="modal" data-target="#eliminar" href="">Eliminar</a></li>
						<li><a data-toggle="modal" data-target="#modificar" href="">Modificar</a></li>
						<li><a href="mostrar.php">Mostrar</a></li>
					</ul>
				</nav>
			</header>
		
			<form action="insertarBD.php" method="POST" class="formulario" target="mostrar" enctype="multipart/form-data">
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
								<input type="radio" name="siNo" id="si" value="no">
								<label for="si">No</label>
								<input type="radio" name="siNo" id="no" value="si">
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
			<iframe name="mostrar" src="insertarBD.php" frameborder="0">
			</iframe>
		</div>
	</body>
</html> 
