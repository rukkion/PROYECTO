<?php
    include("Menu.php");
?>

<div class="ui segment twelve wide column ">
    <div>
        <h1>
        <i class="trademark icon"></i>       
        Nueva Marca
        </h1>
    </div> 

<hr>

<form class="ui fluid form" method="POST" action="nueva_marca-manejo.php" autocomplete="off">
    <div class="ui two column grid center">
        
        <div class="twelve wide column">
            <div class="field">
                <h3>Nombre de la marca </h3>
                <input type="text" name="marca" id="marca" placeholder="MARCA" required>
            </div>
            <div class="field ">
                
                  <button class="ui button" type="reset">
                    Cancelar
                  </button>
                  <button type="submit" class="ui primary button" name="SUBMIT_MARCA">
                    Crear nueva marca
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
