<?php
//Carga de URL fija

$url = Url::UrlControl();


?>
<div><br></div>
<!--Footer-->
<div class="jumbotron text-center" style="margin-bottom:0">

  <img src="<?php echo $url; ?>Vista/img/github-brands.svg" alt="Git-Hub" style="width: 40px;">
  <img src="<?php echo $url; ?>Vista/img/instagram-square-brands.svg" alt="Git-Hub" style="width: 40px;">
  <img src="<?php echo $url; ?>Vista/img/linkedin-brands.svg" alt="Git-Hub" style="width: 40px;">
  <img src="<?php echo $url; ?>Vista/img/twitter-brands.svg" alt="Git-Hub" style="width: 40px;">
  <br>
  <p>
  <h4><strong> Trabajo Final de Laboratorio de Programación II</strong></h4>
  </p>
  <p>
  <h6><strong> TUDS- ULP</strong></h6>
  </p>
  <p>
  <h6>Norberto Valentin Valdeón - La Toma - San Luis - 2021</h6>
  </p>
  <hr>
  
</div>
<!--Fin Footer-->
<!--Script Jquery para mostrar / ocultar categorias-->
<script src="<?php echo $url; ?>Vista/js/barra.js"></script>
<script src="<?php echo $url; ?>Vista/js/usuario.js"></script>

<script src="./vista/js/usuario.js"></script>
<script src="./vista/js/carrito.js"></script>

</body>

</html>