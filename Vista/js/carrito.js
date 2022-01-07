/*---------------------------------
mostrar la cuenta del carrito
-----------------------------------------*/

if(localStorage.getItem("cantidadCarrito") != null){

	$(".cantidadCarrito").html(localStorage.getItem("cantidadCarrito"));
	$(".sumaCarrito").html(localStorage.getItem("sumaCarrito"));

}else{

	$(".cantidadCarrito").html("0");
	$(".sumaCarrito").html("0");
}

/*-------------------------------------*/




/*----------------------------------- */
//  Agregar carrito a la vista
/*----------------------------------- */
//verificamos que el local store no este vacio y evitar suplantar los datos

if(localStorage.getItem("listaProductos")!=null){
    var listaCarrito = JSON.parse(localStorage.getItem("listaProductos")); //parseamos JSON a array
    var sumaCarr = 0;
    var cantItem=0;
    listaCarrito.forEach(funcionForEach);// renderizamos el array del carrito
    

    function funcionForEach(item,index){
        console.log("id : "+item.idArticulo+" descripcion : "+item.descripcion+" $ : "+item.precioMinorista," index: "+index);
      //  console.log("itema", item); //prueba de captura de datos del carrito
        sumaCarr += Number(item.precioMinorista);
        console.log("suma carr : ", sumaCarr);
        cantItem ++;
        console.log("Cantidad : ", cantItem);
        
        /* Sintaxis append --> (Jquery) $(selector).append(content,function(index,html)) <--*/
        /* Insertamos html desde el array Js */
        $(".cuerpoCarrito").append('<div clas="row itemCarrito">'+

			'<div class="col-sm-1 col-xs-12">'+
						
						'<br>'+

						'<center>'+
							
							'<button id="alfa" class="btn btn-default sacarItem backColor" idArticulo="'+item.idArticulo+'">'+
								
								'<i class="fa fa-times"></i>'+

							'</button>'+

						'</center>'+	

					'</div>'+

					'<div class="col-sm-1 col-xs-12">'+
						
						'<figure>'+
							
							'<img src="http://localhost/www/web/Lab/Vista/productos/'+item.imagen+'" class="img-thumbnail">'+
                            '<br>'+

						'<p class="tituloCarritoCompra text-left"><span>'+item.descripcion+'</span></p>'+
                            

						'</figure>'+

					'</div>'+

					'<div class="col-sm-2 col-xs-12">'+

						
                        '<br>'+

						'<p class="marcaCarritoCompra text-center"><span>Marca: '+item.marca+'</span></p>'+

					'</div>'+

					'<div class="col-md-2 col-sm-1 col-xs-12">'+

						'<br>'+

						'<p class="detalleCarritoCompra text-center"><span>'+item.detalle+'</span></p>'+

					'</div>'+

                    '<div class="col-md-2 col-sm-1 col-xs-12">'+

						'<br>'+

						'<p class="precioCarritoCompra text-center">$<span>'+item.precioMinorista+'</span></p>'+

					'</div>'+


					'<div class="col-md-2 col-sm-3 col-xs-8">'+

						'<br>'+

						'<div class="col-xs-8">'+

							'<center>'+
							
								'<input type="number" class="form-control cantidadItem" min="1" value="'+item.cantidad+'"precioMinorista="'+item.precioMinorista+'"idArticulo="'+item.idArticulo+'"item="'+index+'">'+

							'</center>'+

						'</div>'+

					'</div>'+

					'<div class="col-md-2 col-sm-1 col-xs-4 text-center">'+
						
						'<br>'+

						'<p>'+
							
							'<strong>$ <span>'+(Number(item.cantidad)*Number(item.precioMinorista))+'</span></strong>'+

						'</p>'+

					'</div>'+
					
				'</div>'+

				'<div class="clearfix"></div>'+

				'<hr></hr>');


                /*desactivar readonly */

                //$(".cantidadItem").attr("readonly","true");
    }
}else{

   // listaCarrito=[];
    $(".cantidadCarrito").html("0");
	$(".sumaCarrito").html("0");
    $(".cuerpoCarrito").html('<div class="alert alert-primary">No tienes productos en el carrito !</div>');
}


/*----------------------------------- */
//  Agregar carrito al local storage
/*----------------------------------- */
 
$(".agregarCarrito").click(function(){
    
    //Todas los datos que vienen en el btn "agregarCarrito" los almacenamos en las variables correspondiente
    var idArticulo = $(this).attr("idArticulo");
    var idcategoria = $(this).attr("idcategoria");
    var descripcion = $(this).attr("descripcion");
    var marca = $(this).attr("marca");
    var detalle = $(this).attr("detalle");
    var precioMinorista = $(this).attr("precioMinorista");
    var descuentoMayorista = $(this).attr("descuentoMayorista");
    var cantidadMinima = $(this).attr("cantidadMinima");
    var oferta = $(this).attr("oferta");
    var descuentoOferta = $(this).attr("descuentoOferta");
    var stock = $(this).attr("stock");
    var imagen = $(this).attr("imagen");

   //console.log("idArticulo", idArticulo);
   //console.log("idcategoria", idcategoria);
   console.log("descripcion", descripcion);
   //console.log("marca", marca);
   //console.log("detalle", detalle);
   console.log("precioMinorista", precioMinorista);
   //console.log("descuentoMayorista", descuentoMayorista);
   //console.log("cantidadMinima", cantidadMinima);
   //console.log("oferta", oferta);
   //console.log("descuentoOferta", descuentoOferta);
   //console.log("stock", stock);
   //console.log("imagen", imagen);
  
    /*----------------------------------- */
    //  Almacenar en local storage
    /*----------------------------------- */


    // si la Key : "listaProducto esta vacio -> creamos el array para almacenar el articulo elegido" "listaCarrito[]"
    if(localStorage.getItem("listaProductos")==null){
        listaCarrito=[];
    }else{

        //si ya tenemos articulos en el carrito de local storage, los agregamos al array recien creado "listaCarrito[]"
        listaCarrito.concat(localStorage.getItem("listaProductos"));
    }

    //ahora agregamos el articulo al array "listaCarrito[]" para despues crear la key con los values en localStorage

    listaCarrito.push({"idArticulo":idArticulo,
    "idcategoria":idcategoria,
    "descripcion":descripcion,
    "marca":marca,
    "detalle":detalle,
    "precioMinorista":precioMinorista,
    "descuentoMayorista":descuentoMayorista,
    "cantidadMinima":cantidadMinima,
    "oferta":oferta,
    "descuentoOferta":descuentoOferta,
    "stock":stock,
    "imagen":imagen,
    "cantidad":"1"});
    
    //alamcenamos el array en localStorage "listaProductos" antes se parshea a JSON para poder almacenarlo en ls

    localStorage.setItem("listaProductos", JSON.stringify(listaCarrito)); //el array listaCarrito[] lo hacemos un Json para almacenarlo en el local Storage


    /* actualizamos la cuenta de la barra*/

    var cantidadCarrito = Number($(".cantidadCarrito").html())+1;
    var sumaCarrito = Number($(".sumaCarrito").html())+ Number(precioMinorista);
    alert("suma carrito : ", sumaCarrito);

    $(".cantidadCarrito").html(cantidadCarrito);
    $(".sumaCarrito").html(sumaCarrito);

    localStorage.setItem("cantidadCarrito", cantidadCarrito);
    localStorage.setItem("sumaCarrito", sumaCarrito);

    /*----------------------- */
    
})


$(".sacarItem").click(function(){

    function getId(btn){
            alert(btn.id);
            }
    getId(this);

    $(this).parent().parent().parent().remove();// sacamos el item de la vista
    

    //  nombreVariable = $( .nombreClase nombreClaseElemento)
    //se almacena todo lo capturado en un array
    var idArticulo = $(".alfa");
    //var element =$(".button").html();
    var precioMinorista = $(this).attr(".cuerpoCarrito .precioCarritoCompra");
    
    
   
    
    console.log("idArcticulo : ", idArticulo);
    console.log("$ : ", precioMinorista);
        
        listaCarrito=[]; //vaciamos el array para solo volver a poner los item que realmente quedaron sin el eliminado

    //* modificamos local storage la key cantidadCarrito cuando eliminamos un producto del carrito
    var cantidadCarrito = Number($(".cantidadCarrito").html())-1;
    var sumaCarrito = Number($(".sumaCarrito").html())-Number(precioMinorista);

   // modificamos el html con los nuevos valores
    $(".cantidadCarrito").html(cantidadCarrito);
   // $(".sumaCarrito").html(sumaCarrito);

    localStorage.setItem("cantidadCarrito", cantidadCarrito);
    localStorage.setItem("sumaCarrito", sumaCarrito);

  //  listaCarrito = [];

    if(idArticulo.lenght !=0){

        for(var i = 0; i < idArticulo.lenght; i++){
            
            //alamcenamos en variables los elementos del html que no seran eliminados

            var idArticuloArray = $(idArticulo[i]).attr("idArticulo");
            var imagenArray = $(imagen[i]).attr("src");
			var descripcionArray = $(descripcion[i]).html();
            var detalleArray = $(detalle[i]).html();
			var precioArray = $(precioMinorista[i]).html();
			var cantidadArray = $(cantidad[i]).val();

            //creamos el array para pasar lo elemtos que quedan en el carrito
            listaCarrito.push({"idArticulo":idArticuloArray,
                                "descripcion":descripcionArray,
                                "detalle":detalleArray,
                                "precioMinorista":precioArray,
                                "imagen":imagenArray,
                                "cantidad":cantidadArray});
        }
        
        //almacenamos ahora el array previo parcheo a JSON en el LocalStorage

        localStorage.setItem("listaProductos", JSON.stringify(listaCarrito));

      //  sumaSubtotales();
		cantidadCarrito(listaCarrito.length);

    }else{

        localStorage.removeItem("listaProductos"); // se limpia el localstorage

		localStorage.setItem("cantidadCarrito","0"); // se pone en cero el valor de la key en LS
		
		localStorage.setItem("sumaCarrito","0"); // se pone en cero el valor de la key en LS

		$(".cantidadCarrito").html("0"); // cambiamos el html con el valor actual
		$(".sumaCarrito").html("0");

		$(".cuerpoCarrito").html('<div class="alert alert-secondary">No tienes producto en el carrito.</div>');
		$(".sumaTotalCarrito").hide();
		$(".cabeceraCheckout").hide();
     
    }


})

