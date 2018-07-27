<?php
    include("Menu.php");
    
?>


<div class="ui segment thirteen wide column ">
        <div>
          <h1>
              <i class=" teal large boxes icon "></i>
            &nbsp;Articulos 
          </h1>
        </div>
 <div class="ui menu ">
     
  <div class="ui category search item ">
      
    <div class="ui transparent icon input">
      <input class="prompt" type="text" placeholder="Buscar articulos...">
      <i class="search link icon"></i>
    </div>
    <div class="results"></div>
  </div>
</div> 
    
 <table class="ui sortable selectable teal celled table "> 
  <thead>
    <tr>
    <th >Nombre</th>
    <th >ID</th>
    <th >Observacion</th>
    <th >Categoria</th>
    <th class="one wide">Cantidad</th>
    <th >Estado</th>
    <th >Precio</th>
    
  </tr></thead>
  <tbody>
  <?php
           
           require('includes/conectar.php');
           include("Modal.php");
             $sql="select id_pieza,id_categoria, nombre_pieza, cantidad, observacion,precio_venta, estado from pieza";
             mysqli_set_charset($conexion,"utf8");
             $resultado=mysqli_query($conexion,$sql);
             if(!$resultado){
               echo mysqli_error($conexion);
             }
             if(mysqli_num_rows($resultado)>0 ){
   
               while( $renglon=mysqli_fetch_assoc($resultado)){
                   
                   echo    '<script> $(document).ready(function() {$(\'#t'.$renglon["id_pieza"].'\').click(function() {document.location.href=("?id='.$renglon["id_pieza"].'");});});</script>';
                   echo    '<tr id="t'.$renglon["id_pieza"].'" style="cursor:pointer;"> ';
                   echo    '<td>'.$renglon["nombre_pieza"].'</td>';
                   echo    '<td>'.$renglon["id_pieza"].'</td>';
                   echo    '<td>'.$renglon["observacion"].'</td>';
                   echo    '<td>'.$renglon["id_categoria"].'</td>';
                   echo    '<td>'.$renglon["cantidad"].'</td>';
                   echo    '<td>'.$renglon["estado"].'</td>';
                   echo    '<td>'.$renglon["precio_venta"].'</td>';
                 echo  '</tr>';
                  
               }
             }
         
           ?>  
  </tbody>
     
  <tfoot>
    <tr>
        <th colspan="7">  
           <div onclick="$('.ui.detallesA.small.modal').modal('show');" class="ui teal animated button" >
                <div class="visible content">Mostrar Detalles</div>
                <div class="hidden content">
                <i class="file alternate outline icon"></i>
          </div>
            </div>
            
            <a href="nuevo_articulo.php">
            <div class="ui olive animated button" >
                <div class="visible content">Agregar</div>
                <div class="hidden content">
                <i class="plus square icon"></i>
          </div>
                </div></a>
            
            
            <div class="ui yellow animated button" >
                <div class="visible content">Editar</div>
                <div class="hidden content">
                <i class="pencil icon"></i>
          </div>
            </div>
            
            
            <div class="ui orange animated button" >
                <div class="visible content">Eliminar</div>
                <div class="hidden content">
                <i class="trash alternate icon"></i>
          </div>
            </div>
            
        
          <div class="ui  right floated pagination menu">
            <a class="icon  item">
              <i class="teal angle double left chevron icon"></i>
            </a>
            <a class="icon item">
              <i class=" teal left chevron icon"></i>
            </a>
             <a class="icon item">
              <i class="teal circle outline chevron icon"></i>
            </a>        
            <a class="icon item">
              <i class="teal right chevron icon"></i>
            </a>
            <a class="icon item">
              <i class="teal angle double right chevron icon"></i>
            </a>
          </div>
        </th>
  </tr>
</tfoot>
</table> 

</div>
    </div>
        </div>      

        </div>
</div> 
      
    </body>
</html>
