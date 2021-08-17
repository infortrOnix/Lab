<!--Producto-->
<!--Container-->

<div class="container">
  <h2>Productos</h2>
   <!--producto-->
	<div class="col-md-3 product-left"> 
	
	<!---->

	<?php

//buscamos los productos por categoria
$productoCategoria = ProductoControl::ctrBuscarProducto($idCat);

	if($productoCategoria != null){
			  

  //var_dump($productoCategoria);

		  foreach($productoCategoria as $key=>$productosVal){

			  //echo "ID Articulo:  ".$productosVal['idArticulo']."<br>";
			  //echo "ID Categoria:  ".$productosVal['idcategoria']."<br>";
			  //echo "Descripcion:  ".$productosVal['descripcion']."<br>";
			  //echo "Marca:  ".$productosVal['marca']."<br>";
			  //echo "Detalle:  ".$productosVal['detalle']."<br>";
			  //echo "Precio :$  ".$productosVal['precioMinorista']."<br>";
			  //echo "Descuento a Mayorista %:  ".$productosVal['descuentoMayorista']."<br>";
			  //echo "Pedido Minimo:  ".$productosVal['cantidadMinima']."<br>";
			 //echo "Esta en Oferta:  ".$productosVal['oferta']."<br>";
			  //echo "Descuento de Oferta %:  ".$productosVal['descuentoOferta']."<br>";
			  //echo "Stock:  ".$productosVal['stock']."<br>";
			  //echo "imagen :  ".$productosVal['imagen']."<br>";
			  //echo "<img src="."Vista/productos/".$productosVal['imagen']." alt='' />";


	//*


	
	echo "<div class='p-one simpleCart_shelfItem'  id='card-carrito'>";

		//*

		
		
		//*
			echo "<a href='single.html'>";

				
	
				
						echo "<img src="."Vista/productos/".$productosVal['imagen']." alt='' />";
							
					echo "<div class ='mask'>";
						echo "<span>Ver Detalle</span>";
					echo "</div>";
	  echo "</a>";

				echo "<h4>".$productosVal['descripcion']."</h4>";
				echo "<h5>".$productosVal['marca']."</h5>";
				echo "<h6>".$productosVal['detalle']."</h6>";
					echo "<p>";
						echo "<a class='item_add' href='#'>";
						echo "<button type='submit' class='btn btn-dark'>Agregar <span class='glyphicon glyphicon-shopping-cart'></button>";
							echo "<span class=' item_price'><h3> $ ".$productosVal['precioMinorista']."</h3></span>";
						echo "</a>	";
					echo "</p>";
				echo "<h5> stock ( ".$productosVal['stock']." )</h5>";

				echo "</div>";
				
				echo "<br><hr>";
				//*
							}

			
							}else{
				  				echo "Los Productos de la categoria ".$urlCat."  regresados son : Null  <br>";

					}

				//fin busqueda productos	

			?>
	
		<br>
		
	</div>
	
	
</div>

	
<!--Fin Container-->


<!--Fin Main-->

