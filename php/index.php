<?php
    include("Menu.php");
    include("Modal.php");
?>


<div class="ui segment thirteen wide column ">
        <div>
          <h1>
              <i class=" teal large clipboard list icon "></i>
            Historial de articulos 
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
    

    
 <table name="tablaHistorial" id="tablaHistorial" class="ui sortable selectable teal celled table ">
  <thead>
    <tr class="">
    <th class="one wide ">ID</th>
    <th class="three wide ">Fecha</th>
    <th class="six wide">Articulo</th>
    <th class="two wide">Cantidad</th>
    <th class="  two wide">Movimiento</th>
    <th class="three wide">Total</th>
    
  </tr></thead>


        <tbody>
        <?php
          require('includes/conectar.php');
          $sql="select id_movimiento,fecha_movimiento, id_pieza, cantidad, tipo_movimiento,precio_compra from historial";
          mysqli_set_charset($conexion,"utf8");
          $resultado=mysqli_query($conexion,$sql);
          if(!$resultado){
            echo mysqli_error($conexion);
          }
          if(mysqli_num_rows($resultado)>0){
            while($renglon=mysqli_fetch_assoc($resultado)){
                echo    '<script> $(document).ready(function() {$(\'#t'.$renglon["id_movimiento"].'\').click(function() {document.location.href=("?id='.$renglon["id_movimiento"].'");});});</script>';
                echo    '<tr id="t'.$renglon["id_movimiento"].'" style="cursor:pointer;"> ';
                echo    '<td>'.$renglon["id_movimiento"].'</td>';
                echo    '<td>'.$renglon["fecha_movimiento"].'</td>';
                echo    '<td>'.$renglon["id_pieza"].'</td>';
                echo    '<td>'.$renglon["cantidad"].'</td>';
                echo    '<td>'.$renglon["tipo_movimiento"].'</td>';
                echo    '<td>'.$renglon["precio_compra"].'</td>';
              echo  '</tr>';
            }
          }
            
        ?>
        
        </tbody>
    
     
  <tfoot>
    <tr>
        <th colspan="6">
           <div onclick="$('.ui.historial.small.modal').modal('show');" class="ui teal animated button" >
                <div class="visible content">Mostrar Detalles</div>
                <div class="hidden content">
                <i class="file alternate outline icon"></i>
          </div>
            </div>
                    
            <div onclick="$('.ui.registrarM.tiny.modal').modal('show');" class="ui olive animated button" >
                <div class="visible content">Registrar Movimiento</div>
                <div class="hidden content">
                <i class="cart arrow down icon"></i>
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
