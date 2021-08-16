/*captura de ruta local storage para usar cuando necesitamos regresar*/

var rutaActual = location.href;
$(".btnLogin").click(function(){
    localStorage.setItem("rutaActual", rutaActual);
})





/* Validad registro de usuarios */

function registroUsuario(){

/* Validar nombre */

    var nombre =$("#nombre").val();

        if (nombre !== ""){
            var expresion = /^[a-zA-ZñÑáÁéÉíÍóÓúÚ]*$/;
            if(!expresion.test(nombre)){
                $("#nombre").parent().before('<div class="alert alert-warning"><strong>ATENCION</strong>No se permiten número ni caracteres especiales</div>')
            return false;    
            }

        }else{
            $("#nombre").parent().before('<div class="alert alert-warning"><strong>ATENCION</strong>Debe completar el campo nombre  </div>')
            return false;
        }

/* Validar apellido */

var apellido =$("#apellido").val();

if (apellido !== ""){
    var expresion = /^[a-zA-ZñÑáÁéÉíÍóÓúÚ]*$/;
    if(!expresion.test(apellido)){
        $("#apellido").parent().before('<div class="alert alert-warning"><strong>ATENCION</strong>No se permiten número ni caracteres especiales</div>')
    return false;    
    }

}else{
    $("#apellido").parent().before('<div class="alert alert-warning"><strong>ATENCION</strong>Debe completar el campo nombre  </div>')
    return false;
}
/* Validar mail */



/*
var email = $("#email").val();

	if(email != ""){

		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if(!expresion.test(email)){

			$("#email").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> Escriba correctamente el correo electrónico</div>')

			return false;

		}
        /*
		if(validarEmailRepetido){

			$("#email").parent().before('<div class="alert alert-danger"><strong>ERROR:</strong> El correo electrónico ya existe en la base de datos, por favor ingrese otro diferente</div>')

			return false;

		}
        

	}else{

		$("#email").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
	}
    */



    return true;
}