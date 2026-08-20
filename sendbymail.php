<?php
    $destino="cifue.vale@gmail.com";
    $asunto="Enviado desde elponisalvaje.webcindario.com";
    
    $nombre=$_POST["first"];
    $correo=$_POST["email"];
    $asunto=$_POST["message"];

    $contenido="Nombre:".$nombre."\nCorreo:".$correo."\nMensaje:".$asunto;

    if(mail($destino,$asunto,$contenido)) {
        echo "correo enviado";
    }else{
        echo "No enviado, intente mas tarde.";    
    }
?>
<a onclick="javascript:mywindow.close();" href="https://elponisalvaje.webcindario.com">Regresar</a>