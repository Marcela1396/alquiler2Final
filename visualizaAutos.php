<?php
     // Visualiza el listado de autos con las opciones de actualizar y eliminar
     
    include 'encabezado.php';
    include 'conexion.php';

    echo('
        <div align="center" class ="container"> 
        <br>
            <h3> Listado de Autos </h3>
    ');

    $sql = "SELECT * FROM autos JOIN marca on mark = idMarca";
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table" id="tb">
                <thead class="blue white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Estado</th>
                        <th scope="col" colspan="2">  Opciones  </th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ 
            $i = $i + 1;
            $placa = $row['placa'];
            $marca = $row['nombreMarca'];
            $modelo = $row['modelo'];  

            if($row['estado'] == 1) {
                $estado = 'Disponible' ; 
            }
            else{
                $estado = 'Alquilado' ; 
            }
            echo('
                <tbody>
                    <tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$placa.'</td>
                        <td>'.$marca.'</td>
                        <td>'.$modelo.'</td>
                        <td>'.$estado.'</td>
                        <td> <a href= "formActualizaAutos.php?placa='. $placa.' "class="btn btn btn-secondary"> Editar </a> </td>
                        <td> <a onclick= "eliminar(\''.$placa.'\')" class="btn btn btn-danger"> Eliminar </a>  </td> 
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
   // a href= "eliminaAutos.php?placa='.$placa.' "class="btn btn btn-danger"> Eliminar </a>  </td>
    // <a class="btn btn-danger" onclick=" eliminar('.$placa.');"> Eliminar </a> </td>    
?>

