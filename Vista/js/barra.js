/*
Barra de Categorias
*/

$("#btnCategoria").click(function(){

	if(window.matchMedia("(max-width:767px)").matches){

		$("#btnCategoria").after($("#categoria").slideToggle("fast"))

	}else{

		$("#encabezado").after($("#categoria").slideToggle("fast"))
		
	}

		
})
