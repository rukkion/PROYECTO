<?php
    include("Menu.php");
?>

<div style="text-align:center;" class="ui segment twelve wide column ">
    <div>
        <h1>
        <i class="trademark icon"></i>       
        Nueva marca
        </h1>
    </div> 

<hr>

<form class="ui fluid form" method="POST" action="nueva_marca-manejo.php" autocomplete="off">
    <div class="ui one column grid">
    
        <div class=" wide column">
            <div class="field">
            
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_REQUEST['SUBMIT_MARCA']))
    {

    require("includes/conectar.php");
    $marca=$_POST["marca"];
  
    $sql="INSERT INTO marca (nombre_marca) 
    SELECT * FROM (SELECT '$marca') AS tmp
    WHERE NOT EXISTS (
        SELECT nombre_marca FROM marca WHERE nombre_marca = '$marca'
    ) LIMIT 1";
    mysqli_set_charset($conexion,"utf8");
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        echo '<br><h1>Marca agregada con exito.</h1>';
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




