 <!-- Cargamos variables de sesion para todas las vistas -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assest/plugins/fontawesome-free/css/all.min.css">

  <!-- Icono -->
  <link rel="icon" href="assest/dist/img/img.png">

  <!-- Theme style -->
  <link rel="stylesheet" href="assest/dist/css/adminlte.css">
  
<!-- DataTables -->
<link rel="stylesheet" href="assest/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assest/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assest/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
<!-- Ds Streapper -->
<link rel="stylesheet" href="assest/plugins/bs-stepper/css/bs-stepper.css">

<!-- SweetAlert2 -->
<script src="assest/plugins/sweetalert2/sweetalert2.min.js"></script>
</head>


<?php

if (isset($_GET["ruta"])){
  if($_GET["ruta"]=="tienda"){
    include "vista/tienda.php";
    //include "vista/".$_GET["ruta"].".php";
  }else if($_GET["ruta"]=="salir"){
    session_destroy();
    include "vista/tienda.php";
    
  }else{ 
    if($_GET["ruta"]=="login"){
      
    include "vista/".$_GET["ruta"].".php";
    }else if (isset ($_SESSION["ingreso"]) && ($_SESSION["ingreso"]=="ok")){
      if($_GET["ruta"]=="panelAdmin"||$_GET["ruta"]=="VUsuario"||$_GET["ruta"]=="VProductos"){
        include "MenuCostado.php";
        include "vista/".$_GET["ruta"].".php";
        include "footer.php";
  }
}
}}else {
    include "tienda.php";
}
?>


</body>
</html>
