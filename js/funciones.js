$(document).ready(function() {
    $('#formRegistroAutos').submit(function(e) { 
        $.ajax({
            type: "POST", // metodo por el cual se envian los datos
            data: $("#formRegistroAutos").serialize(), // Se toman todos los datos del formulario
            url: "./registrarAutos.php", // A donde se dirige para hacer el registro en la BD
            success: function(res) {
               
                if (res == 1) {
                   alert("Registrado");
                } else {
                    alert("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            beforeSend: function() {
                alert("Enviando");
            }
        });
    });

});


function registrarAuto() {
    // Funcion que Registra  un auto empleando ajax$('#formRegistroAutos').submit(function(e) { 
    $.ajax({
        type: "POST", // metodo por el cual se envian los datos
        data: $("#formRegistroAutos").serialize(), // Se toman todos los datos del formulario
        url: "./registrarAutos.php", // A donde se dirige para hacer el registro en la BD
        success: function(res) {
            if (res == 1) {
                alert("Registrado");
            } else {
                alert("No Registrado");
            }
        },
        error: function() {
            alert("No se ha podido obtener la informacion");
        },
        beforeSend: function() {
            alert("Enviando");
        }
    });

}




function actualizarAuto() {
    // Funcion que Actualiza  un auto empleando ajax
    $.ajax({
        type: "POST", // metodo por el cual se envian los datos
        data: $("#formActualizaAutos").serialize(), // Se toman todos los datos del formulario
        url: "actualizarAuto.php", // A donde se dirige para hacer el registro en la BD
        success: function(res) {
            if (res == 1) {
                alert("Actualizado");
            } else {
                alert("No Actualizado");
            }
        },
        error: function() {
            alert("No se ha podido obtener la informacion");
        },
        beforeSend: function() {
            alert("Enviando");
        }
    });
    
}


function eliminar(placa) {

    var parametros = {
        "placa": placa,
    };
    // Funcion que Elimina  un auto empleando ajax
    $.ajax({
        type: "POST", // metodo por el cual se envian los datos
        data: parametros, // Se toman todos los datos del formulario
        url: "eliminaAutos.php", // A donde se dirige para hacer el registro en la BD
        success: function(r) {
            if (r == 1) {
                alert("Eliminado");
            } else {
                alert("No Eliminado");
            }
        }
    });
}


/*
function registrarAuto() {
    // Funcion que Registra  un auto empleando ajax
    //const data = $("#formRegistroAutos").serialize();
    //console.log('esta es data', data);

    $.ajax({
        type: "POST", // metodo por el cual se envian los datos
        data: $("#formRegistroAutos").serialize(), // Se toman todos los datos del formulario
        url: "./registrarAutos.php", // A donde se dirige para hacer el registro en la BD
        success: function(respuesta) {
            console.log(JSON.stringify(respuesta));
            respuesta = JSON.parse(respuesta);
            if (respuesta.status) {
                alert(respuesta.message)
            } else {
                alert(respuesta.message)
            }
        }
    });
} 
*/
/*

function registrarAuto() {
    // Funcion que Registra  un auto empleando ajax
    //alert("entraste");
    $.ajax({
        type: "POST", // metodo por el cual se envian los datos
        data: $("#formRegistroAutos").serialize(), // Se toman todos los datos del formulario
        url: "./registrarAutos.php", // A donde se dirige para hacer el registro en la BD          

        success: function(res) {
            if (res == 1) {
                alert("Registrado");
            } else {
                alert("No Registrado");
            }
        },
        error: function() {
            alert("No se ha podido obtener la informacion");
        },
        beforeSend: function() {
            alert("Enviando");
        }
    });
}



*/