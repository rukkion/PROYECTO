<?php
session_start();
if (!isset($_SESSION['loggedin']) ) {
  header ("Location: ../index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">       
  <title>Cachorros LLC</title>
  <meta name="description" content="jaja una pagina">
  <script src="Semantic-UI-CSS-master/jquery.min.js"></script>
  <link rel="stylesheet"typw="text/css" href="Semantic-UI-CSS-master/semantic.css">
  <script src = "Semantic-UI-CSS-master/semantic.js">
  <script src="../js/main.js"></script>
  </script>
</head>
<body>

 <div class="container"> 
    <div class="ui teal top fixed menu stackable ">
      <a href="index.php" class="item">
        Inicio/Historial
      </a>
      <a href="Articulos.php" class="item">
        Articulos
      </a>
      <a href="Autos.php" class="item">
        Autos
      </a>
      <a href="usuarios.php" class="item">
        Usuarios
      </a>
      <div class="right menu">
        <a href="../index.php?out" class="ui item">
          Cerrar sesion
        </a>
      </div>
        
        <div class="ui horizontal list">
  <div class="item" >
      <i class="circular inverted teal users icon"></i>
    <div class="content">
      <?php 
        echo '<div class="ui sub header">'.$_SESSION["nombre_usuario"].'</div>';
      ?>
      <?php echo $_SESSION['tipo'];?>
    </div>
  </div>
</div>
        
    </div>
        
    <div class="ui stackable segment">
      
    
<div class="ui grid">
    <div class="row">
<div class="ui main three wide column vertical menu" >
  <div class="item">
  <div class="item">
    <div class="header">Historial</div>
    <div class="menu">
      <a class="item">Registrar Movimiento</a>
    </div>
  </div>
  <div class="item">
    <div class="header">Piezas</div>
    <div class="menu">
      <a class="item">Agregar pieza</a>
      <a class="item">Modificar pieza</a>
      <a class="item">Eliminar pieza</a>
    </div>
  </div>
  <div class="item">
    <div class="header">Autos</div>
    <div class="menu">
      <a class="item">Agregar modelo</a>
      <a class="item">Modificar modelo</a>
      <a class="item">Eliminar modelo</a>
      
    </div>
    
  </div>
      <div class="item">
      <div class="header"><a href="marcas.php">Marcas</a></div>
      <div class="menu">
      <a class="item">Agregar marca</a>
      <a class="item">Modificar marca</a>
      <a class="item">Eliminar marca</a>
    </div>
      </div>
  <div class="item">
    <div class="header">Soporte</div>
    <div class="menu">
      <a class="item">Soporte de correo</a>
      <a class="item">Manual</a>
    </div>
  </div>
</div> 
</div>

