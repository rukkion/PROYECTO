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
  <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
  <link rel="stylesheet" href="css/login.css">
 
  <script src="Semantic-UI-CSS-master/jquery.min.js"></script>
  <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
  <script src="Semantic-UI-CSS-master/components/form.js"></script>
  <script src="Semantic-UI-CSS-master/components/transition.js"></script>
  <script src="js/login.js"></script>

</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui  inverted image header">
      <img src="img/pitbull.svg" class="image">
      <div class="content">
        Cachorros Industria LLC
      </div>
    </h2>
    <form class="ui large form" method="post" id="formulario_login" action="php/checklogin.php">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="envelope icon"></i>
            <input type="text" name="email" placeholder="Correo electrónico" autocomplete="off">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Contraseña">
          </div>
        </div>
        <input type="submit" class="ui fluid large teal submit button" value="Iniciar sesión">
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
