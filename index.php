 
<?php

//Base de datos
require_once "./Modelo/Url.php";
require_once "./Modelo/ProductoModelo.php";
require_once "./Modelo/UsuarioModelo.php";

require_once "./Control/ProductoControl.php";
require_once "./Control/UsuarioControl.php";

//

# include_once "./Vista/header.php";
# include_once "./Vista/menu.php";
#include_once "./Vista/footer.php";
//Carga de URL fija

$url = Url::UrlControl();

//Header

require_once "./Control/PlantillaControl.php";
$header = new PlantillaControl();
$header->headerControl();

//fin Header

//Menu
require_once "./Control/PlantillaControl.php";
$menu = new PlantillaControl();
$menu->menuControl();

//fin Menu      

//control de secciones a mostrar en el main

if (isset($_GET['pagina'])) {
    if (
        $_GET['pagina'] == 'login' ||
        $_GET['pagina'] == 'registro' ||
        $_GET['pagina'] == 'salir'||
        $_GET['pagina'] == 'perfil'||
        $_GET['pagina'] == 'carrito' ||
        $_GET['pagina'] == 'main'
    )
        include "./vista/" . $_GET["pagina"] . ".php";
} else {
    include "./Vista/main.php";
}

//fin de control de seccion a mostrar

//footer
require_once "./Control/PlantillaControl.php";
$footer = new PlantillaControl();
$footer->footerControl();
//fin footer    

?>