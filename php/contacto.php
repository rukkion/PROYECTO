<?php
    include("Menu.php");
?>
<div class=" segment twelve wide column container">
<div class="ui segment twelve wide column ">
    <div>
        <h1>
        <i class="envelope icon"></i>       
        Contacto
        </h1>
    </div> 

<hr>

<form class="ui fluid form" method="POST" action="nueva_marca-manejo.php" autocomplete="off">
    <div class="ui two column grid center">
        
        <div class="twelve wide column">
            <div class="field">
                <h3>Correo electrónico</h3>
                <input type="email" name="email" id="email" placeholder="Correo electronico" required>
            </div>
            <div class="field">
                <h3>Asunto</h3>
                <input type="text" name="asunto" id="asunto" placeholder="Asunto" required>
            </div>
            <div class="field">
                <h3>Descripcion</h3>
                <textarea name="descripcion"></textarea>
            </div>
            <div class="field ">
                
                  <button class="ui button" type="reset">
                    Cancelar
                  </button>
                  <button type="submit" class="ui primary button" name="SUBMIT_CONTACTO">
                    Enviar
                    </button>
                  
            </div>
        </div>
    </div>
</form>

</div>
 
                    </div>
                </div>
            </div>      
        </div>
    </body>
</html>
