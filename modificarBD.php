<?php
    if(isset($_POST["btnEnviar"])){
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
        if($_REQUEST["siNo"]=="si"){
            $estadoSalud=$_POST["explicacion"]; 
        }
        else {
            $estadoSalud="NULL";
        }
        $nombreBasica=$_POST["escuelaBasica"];
        $anioBasica=$_POST["anioBasica"];
        if(is_file(addslashes($_FILES["certificacionBasica"]["tmp_name"]))) {
            $certificadoBasica= addslashes(file_get_contents($_FILES["certificacionBasica"]["tmp_name"]));
            $query="UPDATE datospersonales SET certificadoBasica=$certificadoBasica WHERE rut=$rut";
            $conexion->query($query);
        } 
        
        $nombreMedia=$_POST["escuelaMedia"];
        $anioMedia=$_POST["anioMedia"];
        if(is_file(addslashes($_FILES["certificacionMedia"]["tmp_name"]))) {
            $certificadoMedia= addslashes(file_get_contents($_FILES["certificacionMedia"]["tmp_name"]));
            $query="UPDATE datospersonales SET certificadoBasica=$certificadoBasica WHERE rut=$rut";
            $conexion->query($query);
        }

        $nombreSuperior=$_POST["universidad"];
        $anioSuperior=$_POST["anioSuperior"];
        if(is_file(addslashes($_FILES["certificadacionSuperior"]["tmp_name"]))) {
            $certificadoSuperior= addslashes(file_get_contents($_FILES["certificadacionSuperior"]["tmp_name"]));
            $query="UPDATE datospersonales SET certificadoBasica=$certificadoBasica WHERE rut=$rut";
            $conexion->query($query);
        } 

        $query="UPDATE datospersonales SET nombre='$nombre',apellido='$apellido',fechaNacimiento='$nacimiento',rut='$rut',telefono=$telefono,dirreccion='$direccion',nacionalidad='$nacionalidad',
        grado='$grado',estadoCivil='$estadoCivil',vive='$vive',espaso='$depende[0]',hijo='$depende[1]',hermano='$depende[2]',padre='$depende[3]',otros='$depende[4]',estadoSalud='$estadoSalud',
        nombreBasica='$nombreBasica',anioBasica='$anioBasica',nombreMedia='$nombreMedia',anioMedia='$anioBasica',nombreSuperior='$nombreSuperior',anioSuperior='$anioSuperior' WHERE rut=$rut";
        if(!$conexion->query($query)){
            echo "Error: Verifique los datos";
        }
        else{
            echo "Solicitud modificada correctamente";
        }
    }
?>