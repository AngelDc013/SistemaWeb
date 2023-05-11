<?php
require "conexion.php";// se requiere la conexion a la base de datos
class ModeloUsuario{

    static public function mdlIngresoUsuario($usuario){
        $stmt=Conexion::conectar()->prepare("select * from usuario where email_usuario='$usuario'"); //Se prepara la ejecucion
        $stmt->execute(); //Se ejecuta
        return $stmt->fetch(); //Hacemos que devuelva todo
        
        $stmt->close(); //Se cierra la conexion
        $stmt->null; // Se vacia el cache

    }

    static public function mdlInfoUsuarios(){
        $stmt=Conexion::conectar()->prepare("select * from usuario"); //Se prepara la ejecucion
        $stmt->execute(); //Se ejecuta
        return $stmt->fetchAll(); //Hacemos que devuelva todo
        
        $stmt->close(); //Se cierra la conexion
        $stmt->null; // Se vacia el cache


    }

    static public function mdlRegUsuario($data){
        
            $nomUsuario=$data["nomUsuario"];
            $emailUsuario= $data["emailUsuario"];
            $passUsuario=$data["passUsuario"];
            $imgUsuario=$data["imgUsuario"];
        date_default_timezone_set("America/La_Paz");
            $fecha=date("Y-m-d");


        $stmt=Conexion::conectar()->prepare("insert into usuario(nombre_usuario, email_usuario, pass_usuario, rol_usuario, foto_usuario, fecha_creacion, estado_usuario) values('$nomUsuario','$emailUsuario','$passUsuario','suscriptor','imgUsuario','$fecha',1)");//Se prepara la ejecucion

        if ($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        
        $stmt->close(); //Se cierra la conexion
        $stmt->null; // Se vacia el cache

    }
    static public function mdlInfoUsuario($id){
        $stmt=Conexion::conectar()->prepare("select * from usuario where id_usuario=$id"); //Se prepara la ejecucion
        $stmt->execute(); //Se ejecuta
        return $stmt->fetch(); //Hacemos que devuelva todo
        
        $stmt->close(); //Se cierra la conexion
        $stmt->null; // Se vacia el cache
    }
    static public function mdlEditUsuario($data){
        $idUsuario =$data["idUsuario"];

        $nomUsuario=$data["nomUsuario"];
        $rolUsuario= $data["rolUsuario"];
        $estadoUsuario= $data["estadoUsuario"];
        $passUsuario=$data["passUsuario"];
        $imgUsuario=$data["imgUsuario"];
        

        $stmt=Conexion::conectar()->prepare("update usuario set nombre_usuario='$nomUsuario', pass_usuario = '$passUsuario', rol_usuario='$rolUsuario', foto_usuario = '$imgUsuario', estado_usuario = '$estadoUsuario' where id_usuario = $idUsuario");//Se prepara la ejecucion

        if ($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        
        $stmt->close(); //Se cierra la conexion
        $stmt->null; // Se vacia el cache
    }
}
