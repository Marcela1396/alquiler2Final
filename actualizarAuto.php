<?php
    // Actualiza el cliente seleccionado eb la base de datos
    
    include 'conexion.php';

    $placa = $_POST["placa"];
    $marca = $_POST["mark"];
    $modelo = $_POST["modelo"];

  
    $sql = "UPDATE autos SET placa='$placa', mark='$marca',  modelo='$modelo'
    WHERE placa='$placa'";
    
     if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  // Cierra la conexion
?>