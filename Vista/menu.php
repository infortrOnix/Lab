<!--Ruta -->
<?php
//Carga de URL fija

$url = Url::UrlControl();


?>

<!--session-->

<!--Menu-->


<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">

  <div class="container-fluid">

    <!--Dafault Menu-->

    <ul class="navbar-nav navbar-left">

      <li class="nav-item active">
        <a class="nav-link active" href="index.php?pagina=main"><span class="glyphicon glyphicon-home"></span> Home</a>
      </li>

    </ul>

    <ul class="navbar-nav navbar-right">

      <!--cambios del nav con session-->
      <?php

      if (isset($_SESSION["validarSesion"])) {

        if ($_SESSION["validarSesion"] = "ok") {

          echo '              
                <li class="nav-item">
                  <a class="nav-link" href="index.php?pagina=perfil.php" "><span class="glyphicon glyphicon-user"></span> '. $_SESSION['nombre'] .' '. $_SESSION['apellido'] .'</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?pagina=salir"><span class="glyphicon glyphicon-log-out"></span> Salir</a>
                </li>             
              ';
        } else {

          echo '              
                <li class="nav-item">
                  <a class="nav-link" href="#myModalLogin" data-toggle="modal" id="btnLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#myModalRegistro" data-toggle="modal" id="btnRegistro"><span class="glyphicon glyphicon-user"></span> Registro</a>
                </li>              
              ';
        }
      } else {

        echo '              
            <li class="nav-item">
              <a class="nav-link" href="#myModalLogin" data-toggle="modal" id="btnLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#myModalRegistro" data-toggle="modal" id="btnRegistro"><span class="glyphicon glyphicon-user"></span> Registro</a>
            </li>              
          ';
      }
      ?>

    </ul>
    <!--**-->

  </div>
</nav>

<!--Fin Menu-->



<!--Barra - Categorias - Busqueda - Carrito-->
<div class="container-fluid barra">

  <div class="container">
    <div class="row" id="encabezado">
      <!--Logo-->
      <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logo">
        <a href="#">
          <img src="<?php echo $url; ?>vista/img/logo-universidad-La_Punta.jpg" class="img-responsive" alt="" width=120px>
        </a>
      </div>
      <!--Categoria / buscador-->
      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
        <!--boton Categoria-->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategoria">
          <p>Categoria
            <span class="pull-right">
              <i class="glyphicon glyphicon-menu-hamburger"></i>
            </span>
          </p>

        </div>
        <!--boton / buscador-->
        <form action="" method="post">
          <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">

            <input type="text" class="form-control" placeholder="Buscar..." name="buscar">
            <span class="input-group-btn">
              <a href="#">
                <button class="btn btn-default backColor" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </a>

            </span>

          </div>
        </form>

      </div>
      <!--Carrito-->
      <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
        <a href="index.php?pagina=carrito">
          <button class="btn btn-default pull-left backColor">
            <i class="glyphicon glyphicon-shopping-cart"></i>
          </button>
        </a>
        <p id="textoMiCarrito">
          <span class=""><span class="badge cantidadCarrito"></span></span>
          <br><span class="sumaCarrito"></span>
        </p>

      </div>

    </div>

    <!--Menu categorias-->
    <div class="col-xs-12 backColor" id="categoria">

      <!--traemos de la bd las categorias-->
      <?php

      $categorias = ProductoControl::ctrMostrarCategoria();

      foreach ($categorias as $key => $value) {

        echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                              
                                <h6>
                                  <a href="' . $value["idCategoria"] . '" class="">' . $value["nombre"] . '</a>
                                </h6>
                                <hr>
                           <ul>';
                    echo '</ul>
                              </div>';
      }

      ?>

    </div>
    <!--Fin traer categorias-->

  </div>
</div>
<!--Fin Barra-->
<div class="container">
  <?php
  //verificacion de ID categoria seleccionado de la barra

  $urlCat = array();

  if (isset($_GET["idCategoria"])) {

    //  echo $_GET["idCategoria"];

    $urlCat = $_GET["idCategoria"];

    $idCat = $urlCat;
    $rutaCategoria = ProductoControl::ctrBuscarCategoria($idCat);
    // echo "La Categoria buscada es : ".$urlCat."<br>";
    if ($rutaCategoria != null) {
      //echo "<h6>Categoria / ".$rutaCategoria[1]."</h6>";  
    } else {
      echo "<div class='alert alert-warning'>";
      echo "<h6><strong>Cuidado!</strong> La Categoria seleccionada no es valida. </h6>";
      echo "</div>";
    }


    //verificamos que el id enviado no devuelva nulo, en caso de no existir en la BD    
    if ($rutaCategoria != null) {
      if ($urlCat == $rutaCategoria[0]) {

        //buscamos los productos por categoria

        //fin busqueda productos

        include "./vista/producto.php";
      } else {

        include "./vista/error404.php";
      }
    } else {
      include "./vista/error404.php";
    }
  } else {
    //include "./vista/slide.php";
  }
  //
  ?>
</div>

<!--Ventanas Modales-->
<!--Modal Login inicio-->

<!-- The Modal -->
<div class="modal" id="myModalLogin">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header modalForm backColor">
        <h4 class="modal-title">Ingresar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div class="d-flex justify-content-center">
          <form action="" class="text-center" method="POST">

            <div class="form-group">
              <label for="email">Email:</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-envelope"></i>
                </span>

                <input type="email" class="form-control" id="email" placeholder="Ingresa tu email" name="email" required>
              </div>

            </div>

            <div class="form-group">
              <label for="pwd">Contraseña:</label>

              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-asterisk"></i>
                </span>

                <input type="password" class="form-control" id="password" placeholder="Ingresa tu password" name="password" required>
              </div>

            </div>

            <?php

            $registro = UsuarioControl::ctrBuscarUsuario();
            if ($registro == "ok") {

              //vaciamos las varible POST del Storage para evitar la reinsercion cuando se refresque la pagina

              echo "<div class='alert alert-success'>Usuario Logueado con Exito!</div>";
              echo '<script>
                    if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                    }
                    </script>';
            } else {

              //vaciamos las varible POST del Storage para evitar la reinsercion cuando se refresque la pagina

              echo '<script>
                            if ( window.history.replaceState ) {
                      window.history.replaceState( null, null, window.location.href );
                      }
                    </script>';

              echo "<div class='alert alert-danger'>Completa para Iniciar!</div>";
            }

            ?>

            <button type="submit" class="btn btn-default btn-block backColor btnLogin">Login</button>
          </form>
        </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer bg-dark">

      </div>

    </div>
  </div>
</div>
<!--Modal Login fin-->


<!--Modal Registro-->

<!-- The Modal -->
<div class="modal modalForm" id="myModalRegistro">
  <div class="modal-dialog">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header modalTitulo backColor">

        <h3 class="modal-title">Registrarme</h3>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <!--form-->

        <div class="d-flex justify-content-center">

          <!--usamos la funcion registroUsuario() en JS para validar el form-->
          <form action="" class="text-center" method="post" onsubmit="return registroUsuario()">

            <div class="form-group">
              <label for="email">E-Mail</label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="apellido">Apellido</label>
              <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>


            <div class="form-group">
              <label for="ciudad">Ciudad</label>
              <input type="text" name="ciudad" id="ciudad" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="provincia">Provincia</label>
              <input type="text" name="provincia" id="provincia" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="cp">Código Postal</label>
              <input type="text" name="cp" id="cp" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="domicilio">Domicilio</label>
              <input type="text" name="domicilio" id="domicilio" class="form-control" required>
            </div>


            <div class="form-group">
              <label for="idTipoUser">Rol</label>
              <input type="text" name="idTipoUser" id="idTipoUser" class="form-control" required>
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
            } else {

              //vaciamos las varible POST del Storage para evitar la reinsercion cuando se refresque la pagina

              echo '<script>
        if ( window.history.replaceState ) {
              window.history.replaceState( null, null, window.location.href );
        }
      </script>';

              echo "<div class='alert alert-danger'>Completa para registrate!</div>";
            }


            ?>


            <input type="submit" class="btn btn-default btn-block backColor" value="Enviar">

          </form>

        </div>

        <!--fin form-->

      </div>

      <!-- Modal footer -->
      <div class="modal-footer bg-dark text-center">
        <h5>
          <p>Completa el formulario para que puedas registrate ! </p>
        </h5>
        <h5>
          <p>Ya tienes cuenta ? |<strong> <a href="#myModalLogin" data-dismiss="modal" data-toggle="modal">Ingresar</a></strong></p>
        </h5>
      </div>

    </div>
  </div>
</div>
<!--Modal Registro fin-->