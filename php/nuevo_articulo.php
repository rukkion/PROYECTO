<?php
    include("Menu.php");
?>
<div class="ui segment twelve wide column ">
    <div>
        <h1>
        <i class="teal large boxes  icon"></i>       
        &nbsp; Nuevo Articulo
        </h1>
    </div> 


<hr>
<form class="ui fluid form" action="post" autocomplete="off">
    <div class="ui two column grid">
        <div class="four wide column">
            <div class="ui center aligned segment">
                <h2>Imagen del producto</h2>
                <img class="ui medium circular image" src="profile.jpg">
                <br>
                <button class="ui labeled icon button">
                    <i class="cloud upload icon"></i>
                    Subir imagen
                </button>
            </div>
        </div>
        <div class="twelve wide column">
            <div class="ui form">
                <div class="field">
                    <label>Nombre pieza</label>
                    <input type="text" name="nombre" id="nombre" >
                </div>
                 <div class="field">
                <label>Descripcion</label>
                <textarea></textarea>
                </div>
                <div class="field ">
                    <label>Precio de venta</label>
                    <div class="ui right labeled input">
                      <label for="amount" class="ui label">$</label>
                      <input type="text" placeholder="Precio" id="precio">
                      <div class="ui basic label">.00</div>
                    </div>
                </div>
                
                <div class="field">
                    <label>Cantidad</label>
                    <div class="ui right labeled input">
                      <input type="text" placeholder="0" id="cantidad">
                      <div class="ui label">Pz</div>
                    </div>
                </div>
               
                <div class="field">
                    <Label>Estado</Label>
                    <select class="ui dropdown">
                        <option value="">Nuevo</option>
                        <option value="1">Usado</option>
                        <option value="0">Otro</option>
                    </select>
                </div>              
                
                <div class="field">
                    <label>Observacion(es)</label>
                    <textarea rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 68px;"></textarea>
                </div>
                
                <div class="field">
                    <Label>Categoria</Label>
                    <select class="ui dropdown">
                        <option value="">Categoria</option>
                        <option value="1">Categoria</option>
                        <option value="0">Categoria</option>
                    </select>
                </div>
                
                <div class="field ">

                      <button class="ui button" type="reset">
                        Cancelar
                      </button>
                      <button class="ui primary button" type="submit">
                        Crear nuevo articulo
                      </button>
                </div>
            </div>
        </div>
    </div>
</form>
 
                    </div>
                </div>
            </div>      
        </div>
    </body>
</html>
