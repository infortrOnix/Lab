<?php
 require_once "./modelo/Conexion.php";
class ProductoModelo{

    //muestra la categorias para el menu

    static public function modelMostrarCategoria($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt -> fetchAll();

        $stmt->close;
    }

    //busca el idCategoria en la tabla categoria

    static public function modelBuscarCategoria($tabla,$idCat){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idCategoria = $idCat");
       
        $stmt -> execute();
        return $stmt -> fetch();

        $stmt->close;
    }

    //busca el Producto que tenga el idCategoria en la tabla Producto

    static public function modelBuscarProducto($tabla,$idCat){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idCategoria = $idCat");
       
        $stmt -> execute();
        return $stmt -> fetchAll();

        $stmt->close;
    }


    //busca el Producto que tenga el valor "oferta" en "1" en la tabla Producto

    static public function modelBuscarOferta($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE oferta = 1");
       
        $stmt -> execute();
        return $stmt -> fetchAll();

        $stmt->close;
    }

    //busca el Producto que tenga el valor busqueda en descripcion en la tabla Producto

    

}


?>