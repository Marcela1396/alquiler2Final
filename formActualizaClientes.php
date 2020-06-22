<?php
    // Formulario que permite la actualización de un cliente

    include 'encabezado.php';
    include 'conexion.php';
    
    $cedula = $_GET["cedula"];  // obtiene el codigo de la base de datos enviado por medio del boton Editar a traves de get 
    // Luego realiza la consulta en la base de datos de ese registro cuyo id coincida
	$sql = "SELECT * FROM clientes where cedula = '$cedula'"; 
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_array();
?>

<div class="container">
    <form action="./actualizaCliente.php" method="POST">
        <br> <br>
        
        <div align= "center"> 
            <i class="far fa-id-card fa-lg black-text mr-md-5 mr-3 fa-2x"> </i>
            <h3> Actualización de Datos del Cliente </h3>
        </div>    
        <!-- Material input -->
        <div class="md-form">
            <input type= "hidden" id="cedula" name="cedulaCli" class="form-control" value="<?php echo $row['cedula'] ?>" >
        </div>

        <div class="md-form">
            <input required type="text" id="nombre" name="nombreCli" class="form-control" value="<?php echo $row['nombre'] ?>">
            <label for="nombre">Nombre</label>
        </div>

        <div class="md-form">
            <input required type="number" id="telefono" name="telefonoCli" class="form-control" value="<?php echo $row['telefono'] ?>">
            <label for="telefono"> Telefono </label>
        </div>

        <button type="submit" class="btn btn-primary" >Actualizar </button>
        <a href="index.php" class="btn btn-danger">Cancelar </a>
    </form>
</div>


<?php
    include 'pie.php'
?>