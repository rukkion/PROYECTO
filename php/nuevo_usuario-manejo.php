<?php
    include("Menu.php");
?>

<div style="text-align:center;" class="ui segment twelve wide column ">
    <div>
        <h1>
        <i class="user plus icon"></i>       
        Nuevo usuario
        </h1>
    </div> 

<hr>

<form class="ui fluid form" method="POST" action="nuevo_usuario-manejo.php" autocomplete="off">
    <div class="ui one column grid">
    
        <div class=" wide column">
            <div class="field">
            
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_REQUEST['SUBMIT_USUARIO']))
    {

    require("includes/conectar.php");
    $usuario=$_POST["usuario"];
    
    $password=$_POST["password"];

    if($_POST["tipo"]=="0"){
        $tipo="Usuario";
    }elseif($_POST["tipo"]=="1"){
        $tipo="Administrador";
    }
    
    $correo=$_POST["correo"];

  
    $sql="INSERT INTO usuario (nombre_usuario,password_hash,tipo,estado,correo) 
    SELECT * FROM (SELECT '$usuario','$password','$tipo','1','$correo') AS tmp
    WHERE NOT EXISTS (
        SELECT correo FROM usuario WHERE correo = '$correo'
    ) LIMIT 1";
    mysqli_set_charset($conexion,"utf8");
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        echo '<br><h1>Usuario insertado con exito.</h1>';
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




