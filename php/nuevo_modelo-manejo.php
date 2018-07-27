<?php
    include("Menu.php");
?>

<div style="text-align:center;" class="ui segment twelve wide column ">
    <div>
        <h1>
        <i class="trademark icon"></i>       
        Nueva modelo de automovil
        </h1>
    </div> 

<hr>

<form class="ui fluid form" method="POST" action="nuevo_modelo-manejo.php" autocomplete="off">
    <div class="ui one column grid">
    
        <div class=" wide column">
            <div class="field">
            
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_REQUEST['SUBMIT_MODELO']))
    {

    require("includes/conectar.php");
    $nombre_modelo=$_POST["nombre_modelo"];
    $fecha_modelo=$_POST["fecha_modelo"];
    $id_marca=$_POST["id_marca"];
  
    $sql="INSERT INTO modelo (nombre_modelo,fecha_modelo,id_marca) 
    SELECT * FROM (SELECT '$nombre_modelo','$fecha_modelo','$id_marca') AS tmp
    WHERE NOT EXISTS (
        SELECT nombre_modelo FROM modelo WHERE nombre_modelo = '$nombre_modelo'
    ) LIMIT 1";
    mysqli_set_charset($conexion,"utf8");
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        echo '<br><h1>Modelo agregado con exito.</h1>';
    }else{
        echo "<h1>Ocurrio un error: ".mysqli_error($conexion)."</h1>";
    }
    mysqli_close($conexion);
    }
}
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




