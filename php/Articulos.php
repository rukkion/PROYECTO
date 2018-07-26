<?php
    include("Menu.php");
?>
<!--Modal Detalles Producto-->
<div class="ui detallesA small modal">
  <i class="close icon"></i>
  <div class="header">
    Detalles:
  </div>
    
<div  class="image content">
    <div class="ui medium image">
      <img onerror="this.src='../img/desconocido.png';" src="/images/avatar/large/chris.jpg">
    </div>
      
<div style="padding:0px 0px 0px 3em;" class="ui unstackable items">
  <div class="item">
    <div class="content">
      <a class="ui tiny header">ID Pieza: A23B-8800</a>
    </div>
  </div>
    
  <div class="item">
    <div class="content">
      <a class="ui tiny header">Categoria: Llantas</a><br>
        <a class="ui tiny header">ID Categoria: BD48</a>
    </div>
  </div>
    
<div class="item">
    <div class="content">
      <a class="ui tiny header">Descripcion:</a>
      <div class="description">
        <p>Descripcion muy corta de un producto imaginario.</p>
      </div>
    </div>
  </div>
    <div class="item">
    <div class="content">
      <a class="ui tiny header">Precio: $100.00</a>
    </div>
  </div>
    
    <div class="item">
    <div class="content">
      <a class="ui tiny header">Observacion(es):</a>
      <div class="description">
        <p>Observaciones muy corta de un producto imaginario.</p>
      </div>

    </div>
  </div> 
    <div class="item">
    <div class="content">
      <a class="ui tiny header">Estado: Usado</a>
    </div>
  </div>
</div>
      
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Regresar
    </div>
  </div>
</div>
<!--Modal Detalles Producto-->

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
    <th >Estado</th>
    <th >Precio</th>
    
  </tr></thead>
  <tbody>
    <tr onclick="active()">
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
        <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr> 
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr> 
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td><td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
      
  </tbody>
     
  <tfoot>
    <tr>
        <th colspan="6">  
           <div onclick="$('.ui.detallesA.small.modal').modal('show');" class="ui teal animated button" >
                <div class="visible content">Mostrar Detalles</div>
                <div class="hidden content">
                <i class="file alternate outline icon"></i>
          </div>
            </div>
            
            
            <div class="ui olive animated button" >
                <div class="visible content">Agregar</div>
                <div class="hidden content">
                <i class="plus square icon"></i>
          </div>
            </div>
            
            
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
