<?php
//Carga de URL fija

$url = Url::UrlControl();


?>
<!--Footer-->
<div class="jumbotron text-center" style="margin-bottom:0">
    
  <img src="<?php echo $url; ?>Vista/img/github-brands.svg" alt="Git-Hub" style="width: 40px;">
  <img src="<?php echo $url; ?>Vista/img/instagram-square-brands.svg" alt="Git-Hub" style="width: 40px;">
  <img src="<?php echo $url; ?>Vista/img/linkedin-brands.svg" alt="Git-Hub" style="width: 40px;">
  <img src="<?php echo $url; ?>Vista/img/twitter-brands.svg" alt="Git-Hub" style="width: 40px;">
  <br>
  <p>La Toma - San Luis - 2021</p>
</div>
<!--Fin Footer-->
<!--Script Jquery para mostrar / ocultar categorias-->
<script src="<?php echo $url; ?>Vista/js/barra.js"></script>

</body>
</html>