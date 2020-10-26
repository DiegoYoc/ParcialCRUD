<!DOCTYPE html> 
 <html> 
 <head> 
    <title>Datos</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <!--con esto se llama al script-->
    <script src="js/productos.acciones.js"></script>

    
 </head> 
 <body> 
     <header class="encabezado">
            <table>
                <tr>
                    <td width="120"><img src="img/usac.png" width="100" class="shake-slow shake-constant shake-constant--hover"></td>
                    <td><b>USAC-EFPEM <br>Didactica de la programación <br>Evaluación Parcial</b></td>
                </tr>
            
            </table>
   
    </header>
        <h2 id="titulo">CRUD PHP</h2><br>
<div class="boton">
         
            <button type="button" class="btn btn-info" aria-label="Left Align" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">NUEVO
        <span class="glyphicon glyphicon-file" aria-hidden="true"></span></button>
    
 </div> 
    <div class="contenedor-tabla" id="detalle">
        <!--TU TABLA TIENE QUE TENER LA CLASE tabla-resultado, PARA QUE TOME LOS VALORES CORRECTOS-->



    <div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/agg.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="nId"><b>Id</b></label>
      <input type="text" placeholder="Escribir nuevo Id" id="nId" required>

      <label for="nNombre"><b>Nombre</b></label>
      <input type="text" placeholder="Escribir nuevo nombre" id="nNombre" required>

      <label for="nFecha"><b>Fecha</b></label>
      <input type="date" id="nFecha" required class="form-control">
        
      <center>
<button type="submit" class="btn btn-success" aria-label="Left Align" style="width:auto;" href="javascript:;" onclick="AlmacenaryCargar($('#nId').val(), $('#nNombre').val(), $('#nFecha').val());location.reload(); return false;" >Agregar
        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
        <button type="submit" class="btn btn-danger" aria-label="Left Align" style="width:auto;"  onclick="document.getElementById('id01').style.display='none';">Cancelar
        <span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span></button>
      
      </center>
      
    </div>
        

  </form>
</div>


    <div id="id02" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/mod.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="nId"><b>Id</b></label>
      <input type="text" placeholder="Escribir nuevo Id" id="nId" required>

      <label for="nNombre"><b>Nombre</b></label>
      <input type="text" placeholder="Escribir nuevo nombre" id="nNombre" required>

      <label for="nFecha"><b>Fecha</b></label>
      <input type="date" id="nFecha" required class="form-control">
        
      <center>
<button type="submit" class="btn btn-success" aria-label="Left Align" style="width:auto;" href="javascript:;" onclick="AlmacenaryCargar2($('#nId').val(), $('#nNombre').val(), $('#nFecha').val()); location.reload();return false;" >Actualizar
        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
        <button type="submit" class="btn btn-danger" aria-label="Left Align" style="width:auto;"  onclick="document.getElementById('id02').style.display='none';">Cancelar
        <span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span></button>
      
      </center>
      
    </div>
        

  </form>
</div>
        <?php 
            include ('lista_productos.php');
         ?>
        

    </div>
    
   

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    <script src="jquery/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body> 
 </html> 