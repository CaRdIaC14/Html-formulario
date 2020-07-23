<?php
    $conexion= new mysqli("localhost","root","","formulario");
    if($conexion){
        // echo "si";
    }
    else{
        echo "no conectado"; 
    }
?>