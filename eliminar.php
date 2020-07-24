<?php
include ("conexion.php");
    echo $rut;
    $query="DELETE FROM datospersonales WHERE rut=$rut";
    if(!$conexion->query($query)){
        echo "error";
    }

?>