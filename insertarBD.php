<?php
    // include "conexion.php";
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
    $depende=NULL;
    if(isset($_POST["btnEnviar"])){
        if(!empty($_POST["depende"]))
        {
            $depende=$_POST["depende"];
            // foreach ($_POST["depende"] as $depende){
            //     echo $depende."<br>";
            // }  
        }
    }

    if($_REQUEST["siNo"]=="si"){
        $estadoSalud=$_POST["explicacion"]; 
    }
    else {
        $estadoSalud=NULL;
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
    
?>