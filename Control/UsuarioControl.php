<?php

//inicializamos la variable de session
session_start();

class UsuarioControl
{

    static public function ctrInsertarUsuario()
    {

        if (isset($_POST['nombre'])) {

            //validamos


            /* if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',$_POST['nombre']) && 
                    preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',$_POST['apellido'])&&
                    preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST['email']) &&
                    preg_match('/^[a-zA-Z0-9]+$/',$_POST['password'])){*/


            if (
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nombre']) &&
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['apellido'])
            ) {




                //continuamos a la carga                

                $tabla = "usuario";

                //encripatamos pass
                $password = $_POST['password']; //ingresa el pass

                $salt = bin2hex(random_bytes(32)); //genera un random de 32 bit y lo parshea a exadecimal
                $saltedPass = $password . $salt; //concatena ambas cadenas

                $hashedPass = hash('sha256', $saltedPass); //hashea con sha256 la cadena anterior

                //echo $hashedPass;

                //fin ecncriptado

                $datos = array(
                    "email" => $_POST['email'],
                    "password" => $hashedPass,
                    "salt" => $salt,
                    "nombre" => $_POST['nombre'],
                    "apellido" => $_POST['apellido'],
                    "idTipoUser" => $_POST['idTipoUser'],
                    "ciudad" => $_POST['ciudad'],
                    "provincia" => $_POST['provincia'],
                    "cp" => $_POST['cp'],
                    "domicilio" => $_POST['domicilio']
                );

                $repuesta = UsuarioModelo::modelInsertarUsuario($tabla, $datos);

                if ($repuesta=="ok"){
                    echo '<script>alert("Ok! Usuario Registrado ")</script>';
                }
                
            } else {
                echo '<script>alert("Error! a ingresado caracteres invalidos")</script>';
            }
        }
    }


    //buscar usuario
    static public function ctrBuscarUsuario(){

        if(isset($_POST['email'])){

            //preparamos el pass
           
            $password = $_POST['password']; //ingresa el pass

            $tabla = "usuario";
            $item ="email";
            
            $valor = $_POST["email"];

            

            $repuesta = UsuarioModelo::modelBuscarUsuario($tabla, $item, $valor);

            $salt =$repuesta['salt'];
            //armamos el pass hasheado
            $saltedPass = $password . $salt; //concatena ambas cadenas

            $hashedPass = hash('sha256', $saltedPass); //hashea con sha256 la cadena anterior

            if($repuesta['email']== $_POST['email'] && $repuesta['password']==$hashedPass){

                
                $_SESSION["validarSesion"] = "ok";
                $_SESSION["idUsuario"] = $repuesta["idUsuario"];
                $_SESSION["nombre"] = $repuesta["nombre"] ;
                $_SESSION["apellido"] = $repuesta["apellido"];
                $_SESSION["email"] = $repuesta["email"];
                $_SESSION["idTipoUser"] = $repuesta["idTipoUser"];

                echo '<script>
                        window.location = localStorage.getItem("rutaActual");
                    </script>';


            }else{
                //no coincide el pass o el correo
                echo '<script>
                alert("Error! email o contraseña no son validos ! ");
                window.location = localStorage.getItem("rutaActual");
                </script>';

            }



        }
    }
}
