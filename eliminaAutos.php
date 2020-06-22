<?php

    include 'conexion.php';
    $placa = $_POST["placa"]; 

    $sql = "DELETE FROM autos WHERE placa ='$placa'";
    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }


?>