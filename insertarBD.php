<?php
    include ("conexion.php");
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $nacimiento=$_POST["nacimiento"];
    $rut=$_POST["rut"];
    $telefono=$_POST["telefono"];
    $direccion=$_POST["direccion"];
    $nacionalidad=$_POST["nacionalidad"];
    $grado=$_POST["grado"];
    $vive=$_POST["vive"];
    

    if($_REQUEST["estadoCivil"]=="soltero"){
       $estadoCivil="soltero"; 
    }
    elseif($_REQUEST["estadoCivil"]=="casado"){
        $estadoCivil="casado"; 
    }
    else{
        $estadoCivil="otro"; 
    }
    $depende[0]="NULL";
    $depende[1]="NULL";
    $depende[2]="NULL";
    $depende[3]="NULL";
    $depende[4]="NULL";
    if(isset($_POST["btnEnviar"])){
        if(!empty($_POST["depende"])){
            foreach ($_POST["depende"] as $valor){
                if( $valor == "esposo"){
                    $depende[0]="si";
                }
                if( $valor == "hijos"){
                    $depende[1]="si";
                }
                if( $valor == "hermano"){
                    $depende[2]="si";
                }
                if( $valor == "padre"){
                    $depende[3]="si";
                }
                if( $valor == "otro"){
                    $depende[4]="si";
                }
            } 
        }
    }
    if($_REQUEST["siNo"]=="si"){
        $estadoSalud=$_POST["explicacion"]; 
    }
    else {
        $estadoSalud="NULL";
    }
    $nombreBasica=$_POST["escuelaBasica"];
    $anioBasica=$_POST["anioBasica"];
    $certificadoBasica= addslashes(file_get_contents($_FILES["certificacionBasica"]["tmp_name"]));

    $nombreMedia=$_POST["escuelaMedia"];
    $anioMedia=$_POST["anioMedia"];
    $certificadoMedia= addslashes(file_get_contents($_FILES["certificacionMedia"]["tmp_name"]));

    $nombreSuperior=$_POST["universidad"];
    $anioSuperior=$_POST["anioSuperior"];
    $certificadoSuperior= addslashes(file_get_contents($_FILES["certificadacionSuperior"]["tmp_name"]));

    // echo $depende[0];
    $query="INSERT INTO datospersonales(nombre, apellido, fechaNacimiento, rut, telefono, dirreccion, nacionalidad, grado, estadoCivil, vive, espaso, hijo, hermano, padre, otros, estadoSalud, nombreBasica, anioBasica, certificadoBasica, nombreMedia, anioMedia, certificadoMedia, nombreSuperior, anioSuperior, certificadoSuperior) 
    VALUES ('$nombre','$apellido','$nacimiento','$rut','$telefono','$direccion','$nacionalidad','$grado','$estadoCivil','$vive','$depende[0]','$depende[1]','$depende[2]','$depende[3]','$depende[4]','$estadoSalud','$nombreBasica',$anioBasica,'$certificadoBasica','$nombreMedia',$anioMedia,'$certificadoMedia',' $nombreSuperior',$anioSuperior,'$certificadoSuperior')";
    if ($conexion->query($query) === TRUE) {
	    echo "Registro creada correctamente";
	} else {
	    echo "Error: <br>" . $conexion->error;
    }
?>