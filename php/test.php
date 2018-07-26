<?php
    include("Menu.php");
?>
<button onclick="$('.ui.modal').modal('show');" class="ui button">
  Cancel
</button>
<!--Modal Detalles Producto-->
<div class="ui small modal">
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
 </div>
        </div>      

        </div>
</div> 

    </body>
</html>
