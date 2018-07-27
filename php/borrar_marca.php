<?php
    include("Menu.php");
?>

<div style="text-align:center;" class="ui segment twelve wide column ">
    <div>
        <h1>
        <i class="trademark icon"></i>       
        Borrar marca
        </h1>
    </div> 

<hr>

<form class="ui fluid form" method="POST" action="#" autocomplete="off">
    <div class="ui one column grid">
    
        <div class=" wide column">
            <div class="field">
            
<?php
require("includes/conectar.php");
$sql='delete from marca where id_marca="'.$_GET["id"].'"';

if(mysqli_query($conexion,$sql)){
    echo '<br><h2>Marca eliminada correctamente<br><br><a href="marcas.php">Regresar</a></h2>';
}
else{
    echo "No fue posible eliminar la marca: ".mysqli_error($conexion);
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

