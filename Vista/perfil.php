<?php
//validamos la session

if(!isset($_SESSION["validarSesion"])){
    echo '<script>window.location = localStorage.getItem("rutaActual");</script>';
       
}

exit();
?>

