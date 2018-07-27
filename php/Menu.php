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
        
    <div class="ui stackable segments">
      
    
<div class="ui segment grid">
    <div class="row">
<div class="ui main three wide column vertical menu" >
  <div class="item">
  <div class="item">
    <div class="header"><a href="index.php">Historial</a></div>
    <div class="menu">
      <a class="item" href="registrar_movimiento.php">Registrar Movimiento</a>
    </div>
  </div>
  <div class="item">
    <div class="header"><a href="Articulos.php">Articulos</a></div>
    <div class="menu">
      <a class="item" href="nuevo_articulo.php">Agregar articulo
      <a class="item" href="Articulos.php">Modificar articulo</a>
      <a class="item" href="Articulos.php">Eliminar articulo</a>
    </div>
  </div>
  <div class="item">
    <div class="header"><a href="modelos.php">Modelos</a></div>
    <div class="menu">
      <a class="item" href="nuevo_modelo.php">Agregar modelo</a>
      <a class="item" href="modelos.php">Eliminar modelo</a>
      
    </div>
    
  </div>
      <div class="item">
      <div class="header"><a href="marcas.php">Marcas</a></div>
      <div class="menu">
      <a href="nueva_marca.php" class="item">Agregar marca</a>
      <a class="item" href="marcas.php">Eliminar marca</a>
    </div>
      </div>
  <div class="item">
    <div class="header">Soporte</div>
    <div class="menu">
      <a class="item" href="contacto.php">Soporte de correo</a>
      <a class="item" href="../src/manual.pdf" download>Manual</a>
    </div>
  </div>
</div> 
</div>

