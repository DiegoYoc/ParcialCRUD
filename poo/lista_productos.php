<?php   
    require_once "procesos_php/procesos.php";
    //instacia de clase procesos_productos 
    $busquedapuesto = new procesos_productos();
    //llama al método que realiza la busqueda y obtiene el resultado 
    $datos = $busquedapuesto->buscar();
    
?> 

     
     
     <table class="table table-striped"> 
        <thead>
            <tr class="text-center"> 
                <th>No.</th>
                <th> Id </th> 
                <th> Nombre </th>
                <th> Fecha </th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $contador=1;

            foreach ($datos as $row): ?> 
            <form>
            <tr class="text-center">
               <td><?php echo $contador; ?></td>
                <td>
                    <?php echo $row['Id']; ?>
                    <input type="hidden" name="txtcode" id="txtcode" value="<?php echo $row['Id'];   $contador= $contador + 1; 
?>"> </input>
                </td> 
               <td><?php echo $row['Nombre']; ?></td>
               <td><?php echo $row['Fecha']; ?></td>
   
               <td>
                    <button type="button" class="btn btn-default" aria-label="Left Align" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Modificar
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    
                    <button type="button" class="btn btn-primary" href="javascript:;" onclick="Eliminar(<?php echo $row['Id']; ?>);location.reload();return false;" value="E"/>Eliminar
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                    

                    
               </td>
               
               
            </tr>
            </form>
            <?php endforeach ?>
        </tbody>
        
         
                 
                  
        </table> 
         
        
 