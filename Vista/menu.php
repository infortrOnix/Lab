<?php
//Carga de URL fija

$url = Url::UrlControl();


?>
<!--Menu-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    


    <ul class="nav navbar-nav navbar-left">

        <?php if(isset($_GET['pagina'])):?>


          <?php if($_GET['pagina']=="main"):?>
            
            <li class="active">
              <a class="nav-link" href="index.php?pagina=main"><span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <?php else:?>
              <li class="nav-item">
              <a class="nav-link " href="index.php?pagina=main"><span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
          <?php endif ?>

          <?php if($_GET['pagina']=="carrito"):?>
            
            <li class="active ">
              <a class="nav-link" href="index.php?pagina=carrito"><span class="glyphicon glyphicon-shopping-cart"></span>  Carrito</a>
            </li>
            <?php else:?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=carrito"><span class="glyphicon glyphicon-shopping-cart"></span>  Carrito</a>
              </li>
          <?php endif ?>

    </ul>      

<!--Control de active en el menu-->
    <ul class="nav navbar-nav navbar-right">
      
          <?php if($_GET['pagina']=="login"):?>
            
            <li class="active">
              <a class="nav-link active" href="index.php?pagina=login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
            <?php else:?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
              </li>
          <?php endif ?>
    
          <?php if($_GET['pagina']=="registro"):?>
            
            <li class="active ">
              <a class="nav-link active" href="index.php?pagina=registro"><span class="glyphicon glyphicon-user"></span>  Registro</a>
            </li>
            <?php else:?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=registro"><span class="glyphicon glyphicon-user"></span>  Registro</a>
              </li>
          <?php endif ?>

      
      </ul>

              <!--Dafault Menu-->
        
        <ul class="nav navbar-nav navbar">      
          <?php else: ?>
            <li class="active">
              <a class="nav-link active" href="index.php?pagina=main"><span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?pagina=carrito"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a>
            </li> 
          
          
          </ul>

          <ul class="nav navbar-nav navbar-right">

              <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=registro"><span class="glyphicon glyphicon-user"></span> Registro</a>
              </li>
          
          </ul>    


        <?php endif ?>
    
      </ul>



  </div>
</nav>

 
<!--Fin Menu-->

<!--Barra - Categorias - Busqueda - Carrito-->
<div class="container-fluid barra" >

    <div class="container">
        <div class="row" id="encabezado">
            <!--Logo-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logo">
                <a href="#">
                    <img src="<?php echo $url; ?>vista/img/logo.png" class="img-responsive" alt="" width=25px>
                </a>
            </div>
            <!--Categoria / buscador-->
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" >
                <!--boton Categoria-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor"id="btnCategoria">
                    <p>Categoria
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-menu-hamburger"></i>
                        </span>
                    </p>

                </div>
             <!--boton / buscador-->
                <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
            
                  <input type="search" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                      <a href="#">
                        <button class="btn btn-default backColor" type="submit">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                      </a>

                    </span>
        
                </div>
            </div>
            <!--Carrito-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
              <a href="">
                <button class="btn btn-default pull-left backColor">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                </button>
              </a>
              <p> Mi Carrito <span class="cantidadCarrito"></span><br>$ <span class="sumaCarrito"></span></p>
          
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
                                  
                                  <a href="'.$value["idCategoria"].'" class="pixelCategorias">'.$value["nombre"].'</a>
                                  

                                </h6>
      
                                <hr>

                                <ul>';

                               // $item = "id_categoria";
                  
                               // $valor = $value["id"];
                  
                               // $subcategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
                                
                               // foreach ($subcategorias as $key => $value) {
                                    
                                  //  echo '<li><a href="class="pixelSubCategorias"></a></li>';
                                 // }	
                                  
                                echo '</ul>
                  
                              </div>';
                          }
                  
                        ?>	

            </div>
            <!--Fin traer categorias-->
                        
    </div>
</div>
<!--Fin Barra-->

<?php
//verificacion de ID categoria seleccionado de la barra
            
	$urlCat = array();

		if(isset($_GET["idCategoria"])){

            echo $_GET["idCategoria"];

			$urlCat = $_GET["idCategoria"];

      $idCat = $urlCat;
      $rutaCategoria = ProductoControl::ctrBuscarCategoria($idCat);
      echo "La Categoria buscada es : ".$urlCat."<br>";
      if($rutaCategoria != null){
        echo "La Categoria regresada es : ".$rutaCategoria[0]."<br>";  
      }else{
        echo "La Categoria regresada es : Null <br>";
      }
      

  //verificamos que el id enviado no devuelva nulo, en caso de no existir en la BD    
      if($rutaCategoria != null){
			  if($urlCat == $rutaCategoria[0]){
        
          //buscamos los productos por categoria
          
          //fin busqueda productos

				  include "./vista/producto.php";

			  }else{

				  include "./vista/error404.php";

			  }

      }else{
        include "./vista/error404.php";
      }

    }
//
?>