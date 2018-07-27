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
    
 <table class="ui sortable selectable teal celled table ">
  <thead>
    <tr class="">
    <th class="three wide ">Fecha</th>
    <th class="six wide">Articulo</th>
    <th class="two wide">Cantidad</th>
    <th class="  two wide">Movimiento</th>
    <th class="three wide">Total</th>
    
  </tr></thead>
  <tbody>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr> 
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr> 
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
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
