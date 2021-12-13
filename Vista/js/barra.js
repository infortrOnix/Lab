/*
Barra de Categorias
*/
//le asignamos al boton de la barra categoria la funcion que muestra las categitua
$("#btnCategoria").click(function(){

	if(window.matchMedia("(max-width:767px)").matches){

		$("#btnCategoria").after($("#categoria").slideToggle("fast")) //la barra se despliega debajo del boton categoria

	}else{

		$("#encabezado").after($("#categoria").slideToggle("fast")) // la barra se despliega debajo de encabezado
		
	}

		
})
