<?php
    include("Menu.php");
?>

<div class="ui segment thirteen wide column ">
    <div>
        <h1>
        <i class="teal large user icon"></i>       
        Editar usuario
        </h1>
    </div> 


<hr>
<form class="ui fluid form" method="post" action="editar_usuario-manejo.php" autocomplete="off">
    <div class="ui two column grid">
        <div class="four wide column">
            <div class="ui center aligned segment">
                <h2>Imagen de perfil</h2>
                <img class="ui medium circular image" src="profile.jpg">
                <br>
                <button class="ui labeled icon button">
                    <i class="cloud upload icon"></i>
                    Subir imagen
                </button>
            </div>
        </div>
        <div class="thisteen wide column">
            <div class="field">
                <h3>Nombre usuario </h3>
                <?php
                    echo '<input type="text" name="usuario" id="usuario" value="'.$_GET["nombre"].'">';
                ?>
                
            </div>
            <div class="field">
                <h3>Nueva contraseña </h3>
                <input type="password" name="password" id="password">
            </div>
            <div class="field">
                <h3>Confirmar contraseña </h3>
                <input type="password" name="rpassword" id="rpassword">
            </div>
            <div class="field">
                <h3>Tipo de usuario </h3>
                <select class="ui dropdown">
                    <option value="">Seleccionar</option>
                    <?php
                        if($_GET["tipo"]==="Administrador"){
                            echo '<option value="1">Usuario</option>';
                            echo '<option value="0" selected>Administrador</option>';
                        }elseif($_GET["tipo"]==="Usuario"){
                            echo '<option value="1" selected>Usuario</option>';
                            echo '<option value="0">Administrador</option>';
                        }
                    ?>

                </select>
            </div>
            <div class="field">
                <h3>Correo electrónico</h3>
                <?php
                    echo '<input type="email" name="correo" id="correo" value="'.$_GET["correo"].'">';
                ?>
            </div>
            <div class="field ">
                
                  <button class="ui button" type="reset">
                    Cancelar
                  </button>
                  <button class="ui teal  button" type="submit">
                    Guardar
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
