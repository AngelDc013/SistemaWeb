<?php

class Conexion{
    static public function conectar(){ //Se conecta la base de datos
        $host="localhost";
        $db="softwareweb";
        $userDB="root";
        $passDB="";


        $link=new PDO("mysql:host=".$host.";"."dbname=".$db,$userDB,$passDB);
        $link->exec("set names utf8");
        return $link; //Se retorna la conexion
    }
}