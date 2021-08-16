<?php
 require_once "./modelo/Conexion.php";
class UsuarioModelo{

    

    //Insertar usuario en la tabla Usuario

    static public function modelInsertarUsuario($tabla,$datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(email, password, salt, nombre, apellido, idTipoUser, ciudad, provincia, cp, domicilio)
                                                VALUES (:email, :password, :salt, :nombre, :apellido, :idTipoUser, :ciudad, :provincia, :cp, :domicilio)");


        //usamos bindParam para asociar los parametros con los valores usados en execute 
        $stmt->bindParam(":email",$datos["email"], PDO::PARAM_STR); //string
        $stmt->bindParam(":password",$datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":salt",$datos["salt"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido",$datos["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":idTipoUser",$datos["idTipoUser"], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad",$datos["ciudad"], PDO::PARAM_STR);
        $stmt->bindParam(":provincia",$datos["provincia"], PDO::PARAM_STR);
        $stmt->bindParam(":cp",$datos["cp"], PDO::PARAM_STR);
        $stmt->bindParam(":domicilio",$datos["domicilio"], PDO::PARAM_STR);
        
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
       
        $stmt->close;
        $stmt = null;
    }

    //buscar usuario
    static public function modelBuscarUsuario($tabla,$item, $valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt-> close();

		$stmt = null;



    }
   


}
