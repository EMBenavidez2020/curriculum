<?php
$nombre=$_POST['nombre']
$correo=$_POST['correo']
$asunto=$_POST['asunto']
$mensaje=$_POST['mensaje']
echo $nombre "mensaje:<br/>" $mensaje;

if (mail('benavidez_em@hotmail.com.ar',$asunto,$mensaje)){
    echo "mail enviado";
}else{
    echo "Error al enviar mail";
}
?>