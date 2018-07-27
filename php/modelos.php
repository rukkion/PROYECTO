<?php
    include("Menu.php");
    include("Modal.php");
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
          require('includes/conectar.php');
          $sql="SELECT modelo.id_modelo as id_modelo, modelo.nombre_modelo as nombre_modelo, modelo.fecha_modelo as fecha_modelo, marca.nombre_marca as nombre_marca
                from marca, modelo where modelo.id_marca='' AND modelo.id_marca=marca.id_marca";
          mysqli_set_charset($conexion,"utf8");
          $resultado=mysqli_query($conexion,$sql);
          if(!$resultado){
            echo mysqli_error($conexion);
          }
          if(mysqli_num_rows($resultado)>0){
            while($renglon=mysqli_fetch_assoc($resultado)){
              echo '<tr>';
              echo    '<td class="center aligned">'.$renglon["nombre_marca"].'</td>';
              echo    '<td class="center aligned"><a class="ui blue button" href="editar_marca.php?id='.$renglon["id_marca"].'&nombre='.$renglon["nombre_marca"].'">Editar</a></td>';
              echo    '<td class="center aligned"><a onclick="$(\'.ui.borrarU.tiny.modal\').modal(\'show\'); " class="ui red button" href="borrar_marca.php?id='.$renglon['id_marca'].'">Eliminar</a></td>';
              echo  '</tr>';
            }
          }
            
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
