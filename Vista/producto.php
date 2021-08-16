<!--Producto-->
<!--Container-->
<div class="container-fluid">
	<?php echo "<h2><span class='glyphicon glyphicon-hand-right'></span>  Categoria / " . $rutaCategoria[1] . "</h2>"; ?>
</div>
<div class="d-flex justify-content-between">


	<!--<h2>Productos de la categoria</h2>-->

	<div class="">
		<!--producto-->



		<!---->

		<?php


		//buscamos los productos por categoria
		$productoCategoria = ProductoControl::ctrBuscarProducto($idCat);

		if ($productoCategoria != null) {

			//var_dump($productoCategoria);

			echo "<div class='row' id='card-producto'> ";

			foreach ($productoCategoria as $key => $productosVal) {

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



				echo "<div class=''  id='card-carrito'>";


				echo "<a href='single.html'>";


				echo "<img class='img-card-producto' src=" . "Vista/productos/" . $productosVal['imagen'] . " alt='' />";

				echo "<div class =''>";
				echo "<span>Ver Detalle</span>";
				echo "</div>";
				echo "</a>";

				echo "<h4>" . $productosVal['descripcion'] . "</h4>";
				echo "<h5>Marca : " . $productosVal['marca'] . "</h5>";
				//echo "<h6>".$productosVal['detalle']."</h6>";
				echo "<p>";
				echo "<a class='' href='#'>";
				echo '<button type="submit" class="btn btn-default backColor agregarCarrito" idArticulo="'.$productosVal["idArticulo"].'" idcategoria="'.$productosVal["idcategoria"].'" descripcion="'.$productosVal["descripcion"].'" marca="'.$productosVal["marca"].'"
				detalle="'.$productosVal["detalle"].'"
				precioMinorista="'.$productosVal["precioMinorista"].'"
				descuentoMayorista="'.$productosVal["descuentoMayorista"].'"
				cantidadMinima="'.$productosVal["cantidadMinima"].'"
				oferta="'.$productosVal["oferta"].'"
				descuentoOferta="'.$productosVal["descuentoOferta"].'"
				stock="'.$productosVal["stock"].'" imagen="'.$productosVal["imagen"].'"
				>Agregar <span class="glyphicon glyphicon-shopping-cart"></button>';
				echo "<span class=' precio'><h3> $ " . $productosVal['precioMinorista'] . "</h3></span>";
				echo "</a>	";
				echo "</p>";
				echo "<h5> stock ( " . $productosVal['stock'] . " )</h5>";

				echo "</div>";

				echo "<br><hr>";
				//*
			}
		} else {

			echo "<div class='alert alert-warning'>";
			echo "<strong>Atencion!</strong> La categoria seleccionada no tiene Productos asignados !";
			echo "</div>";
		}

		//fin busqueda productos	

		?>

		<br>

	</div>
</div>

</div>


<!--Fin Container-->


<!--Fin Main-->