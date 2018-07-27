
<!--Modal Detalles Producto-->
<div class="ui detallesA small modal">
  <i class="close icon"></i>
  <div class="header">
    Detalles:
  </div>
    
<div  class="image content">
    <div class="ui medium image">
      <img onerror="this.src='../img/desconocido.png';" src="">
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


<!--Modal Confirmar Borrar usuario-->
<div class="ui tiny borrarU modal transition" >
    <div class="header">
      Confirmacion.
    </div>
    <div class="content">
      <p>Estas seguro de que quieres borrar el usuario?</p>
    </div>
    <div class="actions">
      <div class="ui negative button">
        Cancelar
      </div>
      <div class="ui positive right labeled icon button">
        Eliminar
        <i class="checkmark icon"></i>
      </div>
    </div>
  </div>
<!--Modal Confirmar Borrar usuario-->


<!--Modal Detalles Historial-->
<div class="ui  historial small modal">
          <i class="close icon"></i>
        <?php 
        if(isset($_GET["id"])){
            
          $sql="select * from historial where id_movimiento =".$_GET["id"]."";
          mysqli_set_charset($conexion,"utf8");
          $resultado=mysqli_query($conexion,$sql);
          if(!$resultado){
            echo mysqli_error($conexion);
          }
          if(mysqli_num_rows($resultado)>0){
            $renglon=mysqli_fetch_assoc($resultado);
        echo '
          <div class="header">
            Detalles de Movimento: '.$renglon["id_movimiento"].'
          </div>

        <div id="historial" class="image content">
            <div class="ui medium image">
              <img onerror="this.src=\'../img/desconocido.png\';" src="">
            </div>

        <div style="padding:0px 0px 0px 3em;" class="ui unstackable items">
          <div class="item">
            <div class="content">
              <a class="ui tiny header">ID Pieza:'.$renglon["id_pieza"].' <?php $modal_historial_id_pieza; ?></a>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <a class="ui tiny header">Cantidad:'.$renglon["cantidad"].'</a><br>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <a class="ui tiny header">Fecha:'.$renglon["fecha_movimiento"].'</a><br>
            </div>
          </div>

        <div class="item">
            <div class="content">
              <a class="ui tiny header">Tipo de Movimiento:'.$renglon["tipo_movimiento"].'</a>
            </div>
          </div>

            <div class="item">
            <div class="content">
              <a class="ui tiny header">Precio compra:'.$renglon["precio_compra"].'</a>
            </div>
          </div>


        </div>

          </div>
          <div class="actions">
            <div class="ui black deny button">
              Regresar
            </div>
          </div>
        ';}
}
?></div>
<!--Modal Detalles Historial-->


<!--Modal Registrar Movimiento-->
<div class="ui registrarM tiny modal">
  <i class="close icon"></i>
  <div class="header">
    Registrar Movimento:
  </div>
    
<div  class="content ">
   <form class="ui form">   
<div style="padding:0px 0px 0px 3em;" class="ui unstackable items">
  <div class="item">
    <div class="content">
      <a class="ui small header">Pieza:&nbsp;&nbsp;</a>
    </div>
  </div>
    
  <div class="item">
    <div class="content">
      <a class="ui small header">Fecha:</a><div class="ui mini input">
        <input  type="date" /></div>
    </div>
  </div>
    
<div class="item">
    <div class="content">
        <a class="ui small header">Tipo de Movimiento:&nbsp;&nbsp;</a>
        <div class="ui mini input">
            <select class="ui fluid dropdown">
                <option value="Entrada">Entrada</option>
                <option value="Salida">Salida</option>
                <option value="Otro">Otro</option> 
            </select>
        </div>
    </div>
  </div>
    

    
    <div class="item">
    <div class="content">
      <a class="ui small header">Cantidad:&nbsp;&nbsp;</a><div class="ui mini input">
        <input style="width: 70px;" type="number" /></div>
    </div>
  </div>
       <div class="item">
    <div class="content">
      <a class="ui small header">Total:&nbsp;&nbsp;</a><div class="ui right labeled mini input">
  <label for="amount" class="ui label">$</label>
  <input style="width: 70px;" type="text" placeholder="Amount" id="amount">
  <div class="ui basic label">.00</div>
</div>
    </div>
  </div>

</div> 
</form>   
  </div>
    

  <div class="actions">
      <div  class="ui green ok button">
      Registrar
    </div>
    <div  class="ui red cancel button">
      Cancelar
    </div>
  </div>
</div>
<!--Modal Detalles Historial-->

<!--Modal Detalles Auto-->
<div class="ui detallesAuto small modal">
  <i class="close icon"></i>
  <div class="header">
    Detalles:
  </div>
    
<div  class="image content">
    <div class="ui medium image">
      <img onerror="this.src='../img/desconocido.png';" src="">
    </div>
      
<div style="padding:0px 0px 0px 3em;" class="ui unstackable items">
  <div class="item">
    <div class="content">
        <a class="ui tiny header">Modelo: A23B-8800</a><br>
        <a class="ui tiny header">ID Modelo: A23B-8800</a><br>
        <a class="ui tiny header">Fecha:</a>
    </div>
  </div>
    
  <div class="item">
    <div class="content">
      <a class="ui tiny header">Marca: Llantas</a><br>
        <a class="ui tiny header">ID Marca: BD48</a>
    </div>
  </div>
    

    <div class="item">
    <div class="content">
      <a class="ui tiny header">Precio: $100.00</a>
    </div>
  </div>
     
    <div class="item">
    <div class="content">
      <a class="ui tiny header">VIN:000-000-000</a>
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