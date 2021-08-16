<?php


class ProductoControl{

    //Mostrar Categorias//

   static public function ctrMostrarCategoria(){
        $tabla = "categoria";
        $repuesta = ProductoModelo::modelMostrarCategoria($tabla);
        return $repuesta;
    }

    //Buscar si existe el idCategoria en la tabla Categoria

    static public function ctrBuscarCategoria($idCat){
        $tabla = "categoria";
        
        $repuesta = ProductoModelo::modelBuscarCategoria($tabla,$idCat);
        return $repuesta;
    }

    //Buscar los Productos que tengan el idCategoria en tabla Producto

    static public function ctrBuscarProducto($idCat){
        $tabla = "producto";        
        $repuesta = ProductoModelo::modelBuscarProducto($tabla,$idCat);
        return $repuesta;
    }


    //Buscar los Productos que tengan oferta en tabla Producto

    static public function ctrBuscarOferta(){
        $tabla = "producto";        
        $repuesta = ProductoModelo::modelBuscarOferta($tabla);
        return $repuesta;
    }


    

}

?>