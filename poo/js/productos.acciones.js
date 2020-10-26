function AlmacenaryCargar(codigo, nombre, tipo) {
    var parametros = {
        "vCodigo": codigo,
        "vNombre": nombre,
        "vTipo": tipo
    };
    $.ajax({
        data: parametros,
        url: 'procesos_php/almacenarycargar.php',
        type: 'post',
        success: function(response) {
            $("#detalle").html(response);
            document.getElementById("FormIngreso").reset();
            
            

        }

    });
}
function actualizarDatos(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"actualizarDatos.php",      
        success: function(res){                     
            res=jQuery.parseJSON(res);
            $("#nId").val(res['Id']);
            $("#nNombre").val(res['Nombre']);
            $("#nFecha").val(res['Fecha']);
        }
    });
    
}
function Eliminar(codigo) {
    console.log(codigo);
    var parametrose = {
        "vCodeEliminar": codigo

    };
    $.ajax({
        data: parametrose,
        url: 'procesos_php/eliminar.php',
        type: 'post',
        success: function(response) {
            $("#detalle").html(response);


        }

    });
}