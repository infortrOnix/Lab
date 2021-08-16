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

  <!--css Bootstrap 4-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!--Iconos font awesome-->
  <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->

  <!--css Bootstrap 5-->
  <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

  <!--css Bootstrap-->
  <!-- <link rel="stylesheet" href="<?php echo $url; ?>Vista/css/plugins/bootstrap.min.css"> -->
  <!--css FontAwesome-->
  <link rel="stylesheet" href="<?php echo $url; ?>Vista/css/plugins/font-awesome.min.css">
  <!--css plantilla-->
  <link rel="stylesheet" href="<?php echo $url; ?>Vista/css/plantilla.css">
  <link rel="stylesheet" href="<?php echo $url; ?>Vista/css/slide.css">


  <!--  <link rel="stylesheet" href="<?php echo $url; ?>Vista/js/plugins/jquery.min.js">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>


  <!--Header-->

  <div class="jumbotron text-center" style="margin-bottom:0">
    <h1><img src="<?php echo $url; ?>vista/img/logo-gris.png" alt="">
      La Pinza</h1>
    <h3>
      <p>Ferreteria on - Line!</p>
    </h3>
  </div>

  <!--Fin Header-->