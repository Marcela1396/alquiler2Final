<?php
    // Formulario que permite la actualizaciรณn de un cliente
    include 'encabezado.php';
    include 'conexion.php';

    $placa = $_GET["placa"];  // obtiene el codigo de la base de datos enviado por medio del boton Editar a traves de get 
    // Luego realiza la consulta en la base de datos de ese registro cuyo id coincida
	$sql = "SELECT * FROM autos where placa = '$placa'"; 
   
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_array();

?>
<div class="container">
    <form id="formActualizaAutos" method="POST">
        <br> <br>
        
        <div align= "center">   
            <i class="far fa-id-card fa-lg black-text mr-md-5 mr-3 fa-2x"> </i>
            <h3> Datos del Auto </h3>
        </div>  

        <!-- Material input -->
        <div class="md-form">
            <input  type="hidden" id="placa" name="placa" class="form-control" value="<?php echo $row['placa'] ?>">
        </div>

        <div class="md-form">
            <label for="modelo"> Placa :  <?php echo $row['placa'] ?> </label>
        </div>
        <br><br>

        <select class="browser-default custom-select" id="marca" name="mark" required value="<?php echo $row['mark'] ?>">
            <option value="" disabled selected>Marca</option>
            <option value="1">Ford</option>
            <option value="2">Chevrolet</option>
            <option value="3">Hyundai</option>
        </select>

        <div class="md-form">
            <input  type="text" id="modelo" name="modelo" class="form-control" value="<?php echo $row['modelo'] ?>" required>
            <label for="modelo">Modelo</label>
        </div>

        <input type="button" class="btn btn-primary" onclick="actualizarAuto()" value="Actualizar">
        <a href="visualizaAutos.php" class="btn btn-danger">Cancelar </a>
    </form>
</div>


