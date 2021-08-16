<?php

class PlantillaControl {


    public function headerControl(){

        include_once "./Vista/header.php";

    }

    public function menuControl(){

        include_once "./Vista/menu.php";

    }

    public function mainControl(){

        include_once "./Vista/main.php";

    }

    public function footerControl(){

        include_once "./Vista/footer.php";

    }

}

?>