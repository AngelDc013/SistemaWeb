<?php
//require "conexion.php";// se requiere la conexion a la base de datos
class ModeloProducto{

   

    static public function mdlInfoProductos(){
        $stmt=Conexion::conectar()->prepare("select * from producto"); //Se prepara la ejecucion
        $stmt->execute(); //Se ejecuta
        return $stmt->fetchAll(); //Hacemos que devuelva todo
        
        $stmt->close(); //Se cierra la conexion
        $stmt->null; // Se vacia el cache


    }

    static public function mdlRegProducto($data){
        
            $nomProducto=$data["nomProducto"];
            $emailProducto= $data["emailProducto"];
            $passProducto=$data["passProducto"];
            $imgProducto=$data["imgProducto"];
        date_default_timezone_set("America/La_Paz");
            $fecha=date("Y-m-d");


        $stmt=Conexion::conectar()->prepare("insert into Producto(nombre_Producto, email_Producto, pass_Producto, rol_Producto, foto_Producto, fecha_creacion, estado_Producto) values('$nomProducto','$emailProducto','$passProducto','suscriptor','imgProducto','$fecha',1)");//Se prepara la ejecucion

        if ($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        
        $stmt->close(); //Se cierra la conexion
        $stmt->null; // Se vacia el cache

    }
    static public function mdlInfoProducto($id){
        $stmt=Conexion::conectar()->prepare("select * from Producto where id_Producto=$id"); //Se prepara la ejecucion
        $stmt->execute(); //Se ejecuta
        return $stmt->fetch(); //Hacemos que devuelva todo
        
        $stmt->close(); //Se cierra la conexion
        $stmt->null; // Se vacia el cache
    }
    static public function mdlEditProducto($data){
        $idProducto =$data["idProducto"];

        $nomProducto=$data["nomProducto"];
        $rolProducto= $data["rolProducto"];
        $estadoProducto= $data["estadoProducto"];
        $passProducto=$data["passProducto"];
        $imgProducto=$data["imgProducto"];
        

        $stmt=Conexion::conectar()->prepare("update Producto set nombre_Producto='$nomProducto', pass_Producto = '$passProducto', rol_Producto='$rolProducto', foto_Producto = '$imgProducto', estado_Producto = '$estadoProducto' where id_Producto = $idProducto");//Se prepara la ejecucion

        if ($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        
        $stmt->close(); //Se cierra la conexion
        $stmt->null; // Se vacia el cache
    }
}
