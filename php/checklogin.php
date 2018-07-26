<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Cachorros Industria LLC</title>
  <link rel="stylesheet" type="text/css" href="../Semantic-UI-CSS-master/semantic.css">
  <link rel="stylesheet" href="../css/login.css">
 
  <script src="../Semantic-UI-CSS-master/jquery.min.js"></script>
  <script src="../Semantic-UI-CSS-master/semantic.min.js"></script>
  <script src="../Semantic-UI-CSS-master/components/form.js"></script>
  <script src="../Semantic-UI-CSS-master/components/transition.js"></script>

</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui  inverted image header">
      <img src="../img/pitbull.svg" class="image">
      <div class="content">
        Cachorros Industria LLC
      </div>
    </h2>
    <form class="ui large form" method="post" id="formulario_login" action="checklogin.php">
      <div class="ui stacked segment">
        
        
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    require("includes/conectar.php");
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql='SELECT id_usuario, nombre_usuario, tipo FROM usuario WHERE correo="'.$email.'" and password_hash="'.$password.'"';
    mysqli_set_charset($conexion,"utf8");
    $resultado=mysqli_query($conexion,$sql);
    if(mysqli_num_rows($resultado)<=0){
        echo '<h2>Usuario o contraseña incorrectos.<br><a href="../index.php">Volver a Intentarlo</a></h2>';
    }elseif(mysqli_num_rows($resultado)>1){
        echo '<h2>Usuario duplicado, por favor comuniquese con el administrador.</h2>';
    }elseif(mysqli_num_rows($resultado)==1){
        $renglon=mysqli_fetch_assoc($resultado);
        $_SESSION['loggedin']=true;
        $_SESSION['id_usuario']=$renglon["id_usuario"];
        $_SESSION['nombre_usuario']=$renglon["nombre_usuario"];
        $_SESSION['tipo']=$renglon["tipo"];
        $_SESSION['start']=time();
        $_SESSION['expire']=$_SESSION['start']+(5*60);
        
        header( "refresh:3;url=index.php" );
        echo '<div style="text-align:center;"><h2>Bienvenid@ '.$renglon["nombre_usuario"].'.<br><br>En un momento serás redireccionado.</h2></div>';
        
    }
    mysqli_close($conexion);
}
?>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      ¿Olvidaste la contraseña? <a href="#">Recuperar contraseña</a>
    </div>
  </div>
</div>

</body>
<footer>
  <div class="ui middle aligned center aligned grid">
      <h4 class="ui grey inverted header">&copy; Todos los derechos reservados 2018.</h4>
  </div>

</footer>
</html>

