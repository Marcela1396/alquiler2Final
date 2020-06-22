<?php
    // Registra un auto en la base de datos 
    include 'conexion.php';

    $placa = $_POST["placa"];
    $marca = $_POST["mark"];
    $modelo = $_POST["modelo"];
    $estado = 1;

    
    $sql="INSERT INTO autos (placa, modelo, mark, estado)
          values('$placa','$modelo','$marca', '$estado')";

   // echo mysqli_query($conexion, $sql);
   //echo $conexion->query($sql);
    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  // Cierra la conexion

    //$respuesta = mysqli_query($conexion, $sql);
    //echo $respuesta ? json_encode(array('status'=>true ,'message'=>'Auto Agregado')):json_encode(array('status'=>false ,'message'=>'Auto no agregado')) ;

?>
    
