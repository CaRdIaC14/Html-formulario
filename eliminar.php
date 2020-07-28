<?php
include ("conexion.php");
    $rut=$_POST["rut"];
    $query="DELETE FROM datospersonales WHERE rut=$rut";
    if(!$conexion->query($query)){
        echo "error";
    }
    else{
        include("index.php");
    }

?>