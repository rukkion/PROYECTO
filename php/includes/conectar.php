<?php
    DEFINE ("SERVIDOR","localhost");
    DEFINE ("USUARIO","root");
    DEFINE ("CONTRASENA","");
    DEFINE ("BASEDEDATOS","cachorrosllc");

    $conexion=mysqli_connect(SERVIDOR,USUARIO,CONTRASENA,BASEDEDATOS);

    if($conexion==false){
        die("FALLO LA CONEXION: ".mysqli_connect_error());
    }
    return true;
?>