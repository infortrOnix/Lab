<div class="container">
<<<<<<< HEAD
  <h2>Registro</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tu email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Contraseña:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Ingresa tu password" name="pswd">
    </div>
    <div class="form-group">
      <label for="email">Apellido:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tu apellido" name="email">
    </div>
    <div class="form-group">
      <label for="email">Nombres:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tu nombre" name="email">
    </div>
    <div class="form-group">
      <label for="email">Ciudad:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tu ciudad" name="email">
    </div>
    <div class="form-group">
      <label for="email">CP:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tu codigo postal" name="email">
    </div>
    <div class="form-group">
      <label for="email">Localidad:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tu localidad" name="email">
    </div>
    <div class="form-group">
      <label for="email">Domicilio:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tu calle y numero" name="email">
    </div>
    
    <button type="submit" class="btn btn-dark">Registrarme</button>
  </form>
</div>
=======
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
>>>>>>> 6305b238a78752d15b151fce5c530816229c8942
