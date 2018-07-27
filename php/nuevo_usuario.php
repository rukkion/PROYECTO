<?php
    include("Menu.php");
?>

<div class="ui segment twelve wide column ">
    <div>
        <h1>
        <i class="user plus icon"></i>       
        Nuevo usuario
        </h1>
    </div> 

<hr>

<form class="ui fluid form" method="POST" action="nuevo_usuario-manejo.php" autocomplete="off">
    <div class="ui two column grid">
        <div class="four wide column">
            <div class="ui center aligned segment">
                <h2>Imagen de perfil</h2>
                <img class="ui medium circular image" src="../img/desconocido.png" alt="img-perfil">
                <br>
                <button class="ui labeled icon button">
                    <i class="cloud upload icon"></i>
                    Subir imagen
                </button>
            </div>
        </div>
        <div class="twelve wide column">
            <div class="field">
                <h3>Nombre usuario </h3>
                <input type="text" name="usuario" id="usuario" required>
            </div>
            <div class="field">
                <h3>Contraseña </h3>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="field">
                <h3>Confirmar contraseña </h3>
                <input type="password" name="rpassword" id="rpassword" required>
            </div>
            <div class="field">
                <h3>Tipo de usuario </h3>
                <select class="ui dropdown" name="tipo">
                    <option selected value="0">Usuario</option>
                    <option value="1">Administrador</option>
                </select>
            </div>
            <div class="field">
                <h3>Correo electrónico</h3>
                <input type="email" name="correo" id="correo" required>
            </div>
            <div class="field ">
                
                  <button class="ui button" type="reset">
                    Cancelar
                  </button>
                  <button type="submit" class="ui primary button" name="SUBMIT_USUARIO">
                    Crear nuevo usuario
                    </button>
                  
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
