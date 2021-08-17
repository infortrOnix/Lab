<?php
//Carga de URL fija

$url = Url::UrlControl();


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ferreteria La Pinza</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!--<link rel="stylesheet" href="./Vista/css/header.css">-->





  <!--css Bootstrap-->
  <link rel="stylesheet" href="<?php echo $url; ?>Vista/css/plugins/bootstrap.min.css">
  <!--css FontAwesome-->
  <link rel="stylesheet" href="<?php echo $url; ?>Vista/css/plugins/font-awesome.min.css">
    <!--css plantilla-->
  <link rel="stylesheet" href="<?php echo $url; ?>Vista/css/plantilla.css">

  <link rel="stylesheet" href="<?php echo $url; ?>Vista/js/plugins/jquery.min.js">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



  
</head>
<body>
    

<!--Header-->

<div class="jumbotron text-center" style="margin-bottom:0">
<h1><img src="<?php echo $url; ?>vista/img/logo-gris.png" alt="">  
La Pinza</h1>
  <h3><p>Ferreteria on - Line!</p> </h3>
</div>

<!--Fin Header-->