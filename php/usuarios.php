<?php
    include("Menu.php");
?>

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
<!---->

<div class="ui segment thirteen wide column ">
    <div>
        
        <h1>    
        <i class="teal large users icon"></i>       
        Usuarios &nbsp; &nbsp; &nbsp;
            <a  href="nuevo_usuario.php">
         <div class="ui olive animated button" >
             <div class="visible content ">Agregar Usuario</div>
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
            <th>Nombre usuario</th>
            
            <th>Correo Electrónico</th>
            <th>Tipo</th>
            <th class="center aligned" colspan="2">Acciones</th>
          </tr>
        </thead>
        <tbody>
        <?php
          require('includes/conectar.php');
          $sql="select id_usuario, nombre_usuario, correo, tipo from usuario";
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
        </tr>
        </tbody>
      </table>
       
                    </div>
                </div>
            </div>      
        </div>
    </body>
</html>
