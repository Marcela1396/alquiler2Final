<?php
    // Visualiza el listado de clientes registrados con las opciones de actualizar y eliminar
    
    include 'encabezado.php';
    include 'conexion.php';
    
    echo('
        <div align="center" class ="container"> 
        <br>
            <h3> Listado de clientes </h3>
        
    ');

    $sql = "SELECT * FROM clientes order by cedula";
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table">
                <thead class="blue white-text">
                    <tr>
                        <th scope="col"><p align="center">  # </p></th>
                        <th scope="col"><p align="left">  Cedula </p> </th>
                        <th scope="col"><p align="left">  Nombre </p></th>
                        <th scope="col"><p align="left">  Telefono </p></th>
                        <th scope="col"> <p align="center"> Opciones </p> </th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ //cedula->'123', nombre->'maria',telefono ->'39293']
            $i = $i + 1;
            $cedula = $row['cedula'];
            $nombre = $row['nombre'];
            $telefono = $row['telefono'];   
            
            echo('
                <tbody>
                    <tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$cedula.'</td>
                        <td>'.$nombre.'</td>
                        <td>'.$telefono.'</td>
                        <td> <a href= "formActualizaClientes.php?cedula='. $cedula.' "class="btn btn btn-secondary"> Editar </a> 
                         <a href= "eliminaClientes.php?cedula='.$cedula.' "class="btn btn btn-danger"> Eliminar </a>  </td>
                    </tr>
            ');                        
        }

        echo('
                </tbody>
            </table>
        </div>
        ');   
    }
    
    include 'pie.php'
?>