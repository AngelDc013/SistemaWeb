<?php
$ruta=parse_url($_SERVER['REQUEST_URI']);//Para visualizar la ruta de requerimiento, para esto muchas veces se utiliza laravel pero aqui realizamos una consulta para obtener un arreglo con el link al ultimo y nos aprovechamos de eso
if(isset($ruta["query"])){
    if ($ruta["query"]=="ctrRegUsuario" || $ruta["query"]=="ctrEditUsuario"  ){
        $metodo=$ruta["query"];
        echo $metodo;
        $usuario=new ControladorUsuario();
        $usuario->$metodo();
    }
}

class ControladorUsuario{

    static public function ctrIngresoUsuario(){
        if (isset($_POST["emailUsuario"])){
            $usuario = $_POST["emailUsuario"];
            $contraseña = $_POST["contraseña"];

            $respuesta= ModeloUsuario::mdlIngresoUsuario($usuario);
            if ($respuesta!=false && password_verify($contraseña, $respuesta["pass_usuario"] )&& $respuesta["estado_usuario"]==1){

                $_SESSION["ingreso"]="ok";
                $_SESSION["nombreUsuario"]=$respuesta["nombre_usuario"];
                $_SESSION["fotoUsuario"]=$respuesta["foto_usuario"];
                $_SESSION["rolUsuario"]=$respuesta["rol_usuario"];
               

            
                echo '<script>
                window.location="panelAdmin"
                </script>';
            }else{
                echo ("<p class ='text-danger'> Error de acceso, intente de nuevo </p>");


            
        }
    
    }
}



    static public function ctrInfoUsuarios(){
        $respuesta=ModeloUsuario::mdlInfoUsuarios();//Solicita al modelo la consuta de la base de datos
        return $respuesta;

    }
   
    static public function ctrRegUsuario(){
        require_once "../modelo/usuarioModelo.php";//Para realizar una consulta a la base de datos
         //Encriptar password
        $password=password_hash($_POST["passUsuario"],PASSWORD_DEFAULT);

     
         //Recuperar Imagen
         $imagen=$_FILES["imgUsuario"];// recibe el nombre y archivo

         $nomImagen=$imagen["name"]; 
         $archImagen=$imagen["tmp_name"];
        //move_uploaded_file nos pide el archivo y donde se colocara 
         move_uploaded_file($archImagen, "../assest/dist/img/Usuario/".$nomImagen);



        $data=array(
            "nomUsuario"=>$_POST["nomUsuario"],
            "emailUsuario"=>$_POST["emailUsuario"],
            "passUsuario"=>$password,
            "imgUsuario"=>$nomImagen

        );//Sacamos los datos introducidos de ayax

        $respuesta=ModeloUsuario::mdlRegUsuario($data);
        echo $respuesta;

    }

    static public function ctrInfoUsuario($id){
        $respuesta=ModeloUsuario::mdlInfoUsuario($id);//Solicita al modelo la consuta de la base de datos
        return $respuesta;

    }
    static public function ctrEditUsuario(){
        require_once "../modelo/usuarioModelo.php";//Para realizar una consulta a la base de datos
         //Encriptar password

         if ($_POST["passUsuario"] == $_POST["passUsuario3"]){
            $password =$_POST["passUsuario"];
         }else{
            $password=password_hash($_POST["passUsuario"],PASSWORD_DEFAULT);
         }

         if ($_FILES["imgUsuario"] ["name"]== ""){
            $nomImagen =$_POST["imgUsuarioActual"];
         }else{
            //Recuperar Imagen
            $imagen=$_FILES["imgUsuario"];// recibe el nombre y archivo

            $nomImagen=$imagen["name"]; 
            $archImagen=$imagen["tmp_name"];
            //move_uploaded_file nos pide el archivo y donde se colocara 
            move_uploaded_file($archImagen, "../assest/dist/img/Usuario/".$nomImagen);
         }

        $data=array(
            "idUsuario"=>$_POST["idUsuario"],
            "nomUsuario"=>$_POST["nomUsuario"],
            "rolUsuario"=>$_POST["rolUsuario"],
            "estadoUsuario"=>$_POST["estadoUsuario"],
            "passUsuario"=>$password,
            "imgUsuario"=>$nomImagen

        );//Sacamos los datos introducidos de ayax

        $respuesta=ModeloUsuario::mdlEditUsuario($data);
        echo $respuesta;


    }
    
}
