<div class="container">
  <h2><span class="glyphicon glyphicon-hand-right"></span> Registro</h2>
  <hr>
</div>
<div class="d-flex justify-content-center">


  <form action="" method="post" class="p-5 bg-light text-center">

    <div class="form-group">
      <label for="email">E-Mail</label>
      <input type="email" name="email" class="form-control ">
    </div>

    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" class="form-control">
    </div>

    <div class="form-group">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" class="form-control">
    </div>

    <div class="form-group">
      <label for="idTipoUser">Rol</label>
      <input type="text" name="idTipoUser" class="form-control">
    </div>


    <?php


    $registro = UsuarioControl::ctrInsertarUsuario();
    if ($registro == "ok") {

      //vaciamos las varible POST del Storage para evitar la reinsercion cuando se refresque la pagina

      echo '<script>
                  if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                  }
                </script>';
      echo "<div class='alert alert-success'>Usuario Registrado con Exito!</div>";
      echo "Resultado del registro :" . $registro;
    } else {
      echo "<div class='alert alert-danger'>No pudo completarce el registro!</div>";
      echo "Resultado del registro :" . $registro . "<br>";
    }

    ?>
    <button type="submit" class="btn btn-default backColor">Enviar</button>
  </form>






</div>
<div><br><br></div>