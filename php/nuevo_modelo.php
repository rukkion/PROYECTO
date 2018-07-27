<?php
    include("Menu.php");
?>

<div class="ui segment twelve wide column ">
    <div>
        <h1>
        <i class="trademark icon"></i>       
        Nuevo modelo de auto
        </h1>
    </div> 

<hr>

<form class="ui fluid form" method="POST" action="nuevo_modelo-manejo.php" autocomplete="off">
    <div class="ui two column grid center">
        
        <div class="twelve wide column">
            
            <div class="field">
                <h3>Marca</h3>
                <select class="ui search selection dropdown" id="search-select" name="id_marca">
                <option value="0">Marca</option>
                <?php 
                
                require('includes/conectar.php');
                $sql="SELECT nombre_marca from marca";
                mysqli_set_charset($conexion,"utf8");
                $resultado=mysqli_query($conexion,$sql);
                if(!$resultado){
                  echo mysqli_error($conexion);
                }
                if(mysqli_num_rows($resultado)>0){
                    $i=1;
                  while($renglon=mysqli_fetch_assoc($resultado)){
                      if(isset($_GET['id_marca']) && $_GET['id_marca']==$i) {
                  
                          echo '<option value="'.$i.'" selected>'.$renglon["nombre_marca"].'</option>';
                  
                      }else{
                          echo '<option value="'.$i.'">'.$renglon["nombre_marca"].'</option>';
                      }
                    $i++;
                  }
                }  
              ?>
              </select>
                <script>$('#search-select')
                .dropdown()
                ;
                </script>
            </div>
            <div class="field">
                <h3>Nombre del modelo </h3>
                <input type="text" name="nombre_modelo" id="nombre_modelo" required>
            </div>
            <div class="field">
                <h3>Año del modelo </h3>
                <input type="text" name="fecha_modelo" maxlength="4" placeholder="Año" required>
            </div>
            <div class="field ">
                
                  <button class="ui button" type="reset">
                    Cancelar
                  </button>
                  <button type="submit" class="ui primary button" name="SUBMIT_MODELO">
                    Crear nuevo modelo
                    </button>
                  
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
