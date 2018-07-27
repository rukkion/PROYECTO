<?php
    include("Menu.php");
?>

<div style="text-align:center;" class="ui segment twelve wide column ">
    <div>
        <h1>
        <i class="user times icon"></i>       
        Borrar usuario
        </h1>
    </div> 

<hr>

<form class="ui fluid form" method="POST" action="#" autocomplete="off">
    <div class="ui one column grid">
    
        <div class=" wide column">
            <div class="field">
            
<?php
require("includes/conectar.php");
$sql='delete from usuario where id_usuario="'.$_GET["id"].'"';

if(mysqli_query($conexion,$sql)){
    echo '<br><h2>Usuario eliminado correctamente<br><br><a href="usuarios.php">Regresar</a></h2>';
}
else{
    echo "No fue posible eliminar al usuario: ".mysqli_error($conexion);
}
mysqli_close($conexion);
?>





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

