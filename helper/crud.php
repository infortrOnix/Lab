<?php

class UsuarioModelo{

    public $conexion;

    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conect();
    }

    public function insertarUsuario(string $nombre, string $apellido, int $telefono, string $email){
        $sql = "INSERT INTO usuario(nombre, apellido, telefono, email) VALUES (?, ?, ?, ?)";
        $insert = $this->conexion->prepare($sql);
        $arrData = array($nombre, $apellido, $telefono, $email);
        $resInsert = $insert->execute($arrData);
        $idInsert = $this->conexion->lasstInsertId();
        return $idInsert;

    }

    public function getUsuario(){

            $sql = "SELECT * FROM usuario";
            $execute = $this->conexion->query($sql);
            $request = $execute->fechtall(PDO::FETCH_ASSOC);
            return $request;
    }

    public function updateUsuario(int $id, string $nombre, string $apellido, int $telefono, string $email){
        $sql = "UPDATE usuario SET nombre=?, apellido=?, telefono=?, email=? WHERE id=$id";
        $arrData = array($nombre, $apellido, $telefono, $email);

        $update = $this->conexion->prepare($sql);
        $resExecute = $update->$execute($arrData);
        return $resExecute;
    }


    public function getUsuario(int $id){

        $sql = "SELECT * FROM usuario WHERE id = $id";

        $arrWhere = array($id);
        $query = $this->conexion->prepare($sql);
        $query->$execute($arrWhere);
        $request = $query->fetch(PDO::FETCH_ASSOC);
        return $request;

    }

    public function delUser(int $id){

        $sql = "DELETE FROM usuario WHERE id=?";
        $arrWhere = array($id);
        $delete = $this->conexion->prepare($sql);
        $del = $delete->execute($arrWhere);
        return $del;
    }

}
?>