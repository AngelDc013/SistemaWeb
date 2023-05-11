<?php
$ruta=parse_url($_SERVER['REQUEST_URI']);//Para visualizar la ruta de requerimiento, para esto muchas veces se utiliza laravel pero aqui realizamos una consulta para obtener un arreglo con el link al ultimo y nos aprovechamos de eso
if(isset($ruta["query"])){
    if ($ruta["query"]=="ctrRegProducto" || $ruta["query"]=="ctrEditProducto"  ){
        $metodo=$ruta["query"];
        echo $metodo;
        $Producto=new ControladorProducto();
        $Producto->$metodo();
    }
}

class ControladorProducto{

    static public function ctrIngresoProducto(){
        if (isset($_POST["emailProducto"])){
            $Producto = $_POST["emailProducto"];
            $contraseña = $_POST["contraseña"];

            $respuesta= ModeloProducto::mdlIngresoProducto($Producto);
            if ($respuesta!=false && password_verify($contraseña, $respuesta["pass_Producto"] )&& $respuesta["estado_Producto"]==1){

                $_SESSION["ingreso"]="ok";
                $_SESSION["nombreProducto"]=$respuesta["nombre_Producto"];
                $_SESSION["fotoProducto"]=$respuesta["foto_Producto"];
                $_SESSION["rolProducto"]=$respuesta["rol_Producto"];
               

            
                echo '<script>
                window.location="panelAdmin"
                </script>';
            }else{
                echo ("<p class ='text-danger'> Error de acceso, intente de nuevo </p>");


            
        }
    
    }
}



    static public function ctrInfoProductos(){
        $respuesta=ModeloProducto::mdlInfoProductos();//Solicita al modelo la consuta de la base de datos
        return $respuesta;

    }
   
    static public function ctrRegProducto(){
        require_once "../modelo/ProductoModelo.php";//Para realizar una consulta a la base de datos
         //Encriptar password
        $password=password_hash($_POST["passProducto"],PASSWORD_DEFAULT);

     
         //Recuperar Imagen
         $imagen=$_FILES["imgProducto"];// recibe el nombre y archivo

         $nomImagen=$imagen["name"]; 
         $archImagen=$imagen["tmp_name"];
        //move_uploaded_file nos pide el archivo y donde se colocara 
         move_uploaded_file($archImagen, "../assest/dist/img/Producto/".$nomImagen);



        $data=array(
            "nomProducto"=>$_POST["nomProducto"],
            "emailProducto"=>$_POST["emailProducto"],
            "passProducto"=>$password,
            "imgProducto"=>$nomImagen

        );//Sacamos los datos introducidos de ayax

        $respuesta=ModeloProducto::mdlRegProducto($data);
        echo $respuesta;

    }

    static public function ctrInfoProducto($id){
        $respuesta=ModeloProducto::mdlInfoProducto($id);//Solicita al modelo la consuta de la base de datos
        return $respuesta;

    }
    static public function ctrEditProducto(){
        require_once "../modelo/ProductoModelo.php";//Para realizar una consulta a la base de datos
         //Encriptar password

         if ($_POST["passProducto"] == $_POST["passProducto3"]){
            $password =$_POST["passProducto"];
         }else{
            $password=password_hash($_POST["passProducto"],PASSWORD_DEFAULT);
         }

         if ($_FILES["imgProducto"] ["name"]== ""){
            $nomImagen =$_POST["imgProductoActual"];
         }else{
            //Recuperar Imagen
            $imagen=$_FILES["imgProducto"];// recibe el nombre y archivo

            $nomImagen=$imagen["name"]; 
            $archImagen=$imagen["tmp_name"];
            //move_uploaded_file nos pide el archivo y donde se colocara 
            move_uploaded_file($archImagen, "../assest/dist/img/Producto/".$nomImagen);
         }

        $data=array(
            "idProducto"=>$_POST["idProducto"],
            "nomProducto"=>$_POST["nomProducto"],
            "rolProducto"=>$_POST["rolProducto"],
            "estadoProducto"=>$_POST["estadoProducto"],
            "passProducto"=>$password,
            "imgProducto"=>$nomImagen

        );//Sacamos los datos introducidos de ayax

        $respuesta=ModeloProducto::mdlEditProducto($data);
        echo $respuesta;


    }
    
}
