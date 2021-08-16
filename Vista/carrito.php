<div class="container">
  <h2><span class="glyphicon glyphicon-hand-right"></span> Detalle del Carrito</h2>
  
  <hr>
</div>


<!--tabla carrito-->

<div class="container-fluid">

	<div class="container">

		<div class="panel panel-default">
			
			<!--head carrito-->

			<div class="panel-heading bg-dark cabeceraCarrito">
				
				<div class="col-md-4 col-sm-7 col-xs-12 text-center">
					
					<h3>
						<small>Producto</small>
					</h3>

				</div>

				<div class="col-md-2 col-sm-1 col-xs-0 text-center">
					
					<h3>
						<small>Detalle</small>
					</h3>

				</div>

				<div class="col-md-2 col-sm-1 col-xs-0 text-center">
					
					<h3>
						<small>Precio</small>
					</h3>

				</div>

				<div class="col-sm-2 col-xs-0 text-center">
					
					<h3>
						<small>Cantidad</small>
					</h3>

				</div>

				<div class="col-sm-2 col-xs-0 text-center">
					
					<h3>
						<small>Sub Total</small>
					</h3>

				</div>

			</div>

			<!--detalle carrito-->

			<div class="panel-body cuerpoCarrito">

				<!---- ver los productos en el carrito-->

				
				

			</div>

			<!--SUMA -->

			<div class="panel-body  sumaTotalCarrito">

				<div class="col-md-4 col-sm-6 col-xs-12 pull-right bg-dark">
					
					<div class="col-xs-6 totalCarrito">
						
						<h4>Total:</h4>

					</div>

					<div class="col-xs-6">

						<h4 class="sumaSubTotal">
							
							

						</h4>

					</div> 

				</div>

			</div>

			<!--pagar-->

			<div class="panel-heading cabeceraCheckout">

			<?php

				if(isset($_SESSION["validarSesion"])){

					if($_SESSION["validarSesion"] == "ok"){

						echo '<a id="btnCheckout" href="#modalCheckout" data-toggle="modal" idUsuario="'.$_SESSION["idUsuario"].'"><button class="btn btn-default backColor btn-lg pull-right">Pagar</button></a>';

					}


				}else{

					echo '<a href="#modalIngreso" data-toggle="modal"><button class="btn btn-default backColor btn-lg pull-right">Pagar</button></a>';
				}

			?>	

			</div>

		</div>

	</div>

</div>