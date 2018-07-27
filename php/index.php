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
    
<script>
    $(document).ready(function() {
        $d=1;
    $('#tablaHistorial tr').click(function() {
        document.location.href=("?id="+$d);
    });

});
</script>
    
 <table name="tablaHistorial" id="tablaHistorial" class="ui sortable selectable teal celled table ">
  <thead>
    <tr class="">
    <th class="three wide ">Fecha</th>
    <th class="six wide">Articulo</th>
    <th class="two wide">Cantidad</th>
    <th class="  two wide">Movimiento</th>
    <th class="three wide">Total</th>
    
  </tr></thead>

  <tbody>
    
    <tr  style="cursor:pointer;" id="1" >
      <a href="Articulos.php"><td name="fecha"> 18/11/1996</td>
      <td name="articulo"> Auto Rojo #45</td>
      <td name="cantidad"> 50pz</td>
      <td name="tipo"> Entrada</td>
      <td name="total"> $150.00</td></a>
    </tr>
      
  </tbody>
        <tbody>
        <?php
          require('includes/conectar.php');
          $sql="select fecha:movimiento, id_pieza, cantidad, tipo_movimiento,precio_compra from historial";
          mysqli_set_charset($conexion,"utf8");
          $resultado=mysqli_query($conexion,$sql);
          if(!$resultado){
            echo mysqli_error($conexion);
          }
          if(mysqli_num_rows($resultado)>0){
            while($renglon=mysqli_fetch_assoc($resultado)){
              echo '<tr>';
              echo    '<td>'.$renglon["nombre_usuario"].'</td>';
              echo    '<td>'.$renglon["correo"].'</td>';
              echo    '<td>'.$renglon["tipo"].'</td>';
              echo    '<td class="center aligned"><a class="ui blue button" href="editar_usuario.php?id='.$renglon["id_usuario"].'&nombre='.$renglon["nombre_usuario"].'&correo='.$renglon["correo"].'&tipo='.$renglon["tipo"].'">Editar</a></td>';
              echo    '<td class="center aligned"><a onclick="$(\'.ui.borrarU.tiny.modal\').modal(\'show\'); " class="ui red button" href="#">Eliminar</a></td>';
              echo  '</tr>';
            }
          }
            
        ?>
        
        </tbody>
    
     
  <tfoot>
    <tr>
        <th colspan="5">
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
