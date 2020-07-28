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
		<title>Mostrar</title>
	</head>
	<body>
        <div class="contenedor">
            <div id="logo">
                <img src="Img\logo.png" class="imagen">
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Volver</a></li>
                </ul>
            </nav>
        </div>
		
		<table border="1">
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Fecha de nacimiento</td>
            <td>Rut</td>
            <td>Telefono</td>
            <td>Direccion</td>
            <td>Nacionalidad</td>
            <td>Grado de estudio</td>
            <td>Estado civil</td>
            <td>Vive con</td>
            <td>Personas que depende:</td>
            <td>Estado salud</td>
            <td>Escuela basica</td>
            <td>Años de estudios</td>
            <td>Certificado</td>
            <td>Escuela media</td>
            <td>Años de estudios</td>
            <td>Certificado</td>
            <td>Universidad</td>
            <td>Años de estudios</td>
            <td>Certificado</td>
        </tr>
        <?php
        include ("conexion.php");
        $query="SELECT * FROM datospersonales";
        $res=$conexion->query($query);
        while($row =$res->fetch_assoc()){?>
            <tr>
            <td><?php echo $row["nombre"];?></td>
            <td><?php echo $row["apellido"];?></td>
            <td><?php echo $row["fechaNacimiento"];?></td>
            <td><?php echo $row["rut"];?></td>
            <td><?php echo $row["telefono"];?></td>
            <td><?php echo $row["dirreccion"];?></td>
            <td><?php echo $row["nacionalidad"];?></td>
            <td><?php echo $row["grado"];?></td>
            <td><?php echo $row["estadoCivil"];?></td>
            <td><?php echo $row["vive"];?></td>
            <td><?php		
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
                ?></td>
            <td><?php if($row["estadoSalud"]=="NULL"){
                echo "No tiene problemas";
            }else{
                echo $row["estadoSalud"];
            }?></td>
            <td><?php echo $row["nombreBasica"];?></td>
            <td><?php echo $row["anioBasica"];?></td>
            <td><img src="data:image/jpg;base64,<?php echo base64_encode($row["certificadoBasica"]); ?>",width="100px", height="100px"></></td>
            <td><?php echo $row["anioMedia"];?></td>
            <td><?php echo $row["nombreMedia"];?></td>
            <td><img src="data:image/jpg;base64,<?php echo base64_encode($row["certificadoMedia"]); ?>",width="100px", height="100px"></></td>
            <td><?php echo $row["nombreSuperior"];?></td>
            <td><?php echo $row["anioSuperior"];?></td>
            <td><img src="data:image/jpg;base64,<?php echo base64_encode($row["certificadoSuperior"]); ?>",width="100px", height="100px"></></td>
            </tr>
        <?php
        }
        ?>
        </table>
	</body>
</html> 
