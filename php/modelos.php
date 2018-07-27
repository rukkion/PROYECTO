<?php
    include("Menu.php");
    //include("Modal.php");
?>



<div class="ui segment thirteen wide column ">
    <div>
        
        <h1>    
        <i class="teal large trademark icon"></i>       
        Modelos &nbsp; &nbsp; &nbsp;
            <a  href="nuevo_modelo.php">
         <div class="ui olive animated button" >
             <div class="visible content ">Agregar Modelo</div>
                <div class="hidden content">
                <i class="plus square icon"></i>
             </div>
             </div></a>
        </h1>
    </div> 


<hr>
<form class="ui fluid form" method="GET" action="modelos.php" autocomplete="off">
    <div class="ui two column grid center">
        
        <div class="twelve wide column">
            <div class="field">
                <h3>Nombre de la marca </h3>
                
                
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
            <div class="field ">
                  <a href="modelos.php" class="ui secondary button">Restablecer</a>
                  <button type="submit" class="ui primary button">
                    Buscar
                </button>
                  
            </div>
        </div>
    </div>
</form>

<table class="ui teal sortable single line table">
<thead>
        <tr>
            <th class="center aligned">Modelo</th>
            <th class="center aligned">Fecha</th>
            <th class="center aligned">Marca</th>
            <th class="center aligned" colspan="2">Acciones</th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(isset($_GET['id_marca']) && $_GET["id_marca"]>0) {
            $sql='SELECT modelo.id_marca as id_marca, modelo.id_modelo as id_modelo, modelo.nombre_modelo as nombre_modelo, modelo.fecha_modelo as fecha_modelo, marca.nombre_marca as nombre_marca
            from marca, modelo where modelo.id_marca=\''.$_GET['id_marca'].'\' AND modelo.id_marca=marca.id_marca';   
        } else {
            $sql='SELECT modelo.id_marca as id_marca, modelo.id_modelo as id_modelo, modelo.nombre_modelo as nombre_modelo, modelo.fecha_modelo as fecha_modelo, marca.nombre_marca as nombre_marca
            from marca, modelo where modelo.id_marca=marca.id_marca';
        }
          
          mysqli_set_charset($conexion,"utf8");
          $resultado=mysqli_query($conexion,$sql);
          if(!$resultado){
            echo mysqli_error($conexion);
          }
          if(mysqli_num_rows($resultado)>0){
            while($renglon=mysqli_fetch_assoc($resultado)){
              echo '<tr>';
              echo    '<td class="center aligned">'.$renglon["nombre_modelo"].'</td>';
              echo    '<td class="center aligned">'.$renglon["fecha_modelo"].'</td>';
              echo    '<td class="center aligned">'.$renglon["nombre_marca"].'</td>';
              //echo    '<td class="center aligned"><a class="ui blue button" href="editar_modelo.php?id_modelo='.$renglon["id_modelo"].'&nombre_modelo='.$renglon["nombre_modelo"].'&id_marca='.$renglon["id_marca"].'&fecha_modelo='.$renglon["fecha_modelo"].'">Editar</a></td>';
              echo    '<td class="center aligned"><a onclick="$(\'.ui.borrarU.tiny.modal\').modal(\'show\'); " class="ui red button" href="borrar_modelo.php?id='.$renglon['id_modelo'].'">Eliminar</a></td>';
              echo  '</tr>';
            }
          }
          mysqli_close($conexion);
        ?>
        </tr>
        </tbody>
      </table>
       
                    </div>
                </div>
            </div>      
        </div>
    </body>
</html>
