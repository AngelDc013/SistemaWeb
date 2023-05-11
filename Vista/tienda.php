<!--Estilos-->
<link rel="stylesheet" href="assest/dist/css/style.css">
<link rel="stylesheet" href="assest/dist/css/styleImagenes.css">
<link rel="stylesheet" href="assest/dist/css/estiloFotter.css">

<!--preloader-->
<div class="preloader flex-column justify-content-center align-items-center">
<img src="assest/dist/img/loading.gif" alt="" height="300" width="300">

</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>


<header>

    <div class="header">
      <!--Logo-->
    <div class="header_midil">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-4">
                     </div>
                     <div class="col-md-4">
                        <a class="logo" href="#"><img src="assest/dist/img/logo2.png" alt="#"/></a>
                     </div>
                     <div class="col-md-4">

                     </div>
                  </div>
               </div>
            </div>
 <!--Navar- Barra de navegacion-->
    <div class="header_bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <nav class="navigation navbar navbar-expand-md navbar-dark" style="background-color:  #183661;"> 
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                             
                                 <li class="nav-item active">
                                    <a class="nav-link" href="#">Inicio</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Sobre Nosotros</a>
                                 </li>
                                 <li class="">
                                    <a class="nav-link" href="#">Productos</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Agencias</a>
                                 </li>
                                 <?php
                                 if (isset ($_SESSION["ingreso"]) && ($_SESSION["ingreso"]=="ok")){
                                    ?>
                                    <li class="nav-item">
                                    <a class="nav-link" href="login">Salir</a>
                                    <li><p class="text-mute" >  <?php echo $_SESSION["nombreUsuario"]; ?> </p></li>
                                 </li>
                                    
                                    <?php
                                 }else{
                                    ?>

                                    <li class="nav-item">
                                    <a class="nav-link" href="login">Ingresar</a>
                                 </li>
                                 <?php

                                 }
                                 ?>
                             
                                 
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <div class="search">
                           <form action="#">
                              <input class="form_sea" type="text" placeholder="Buscar" name="search">
                              <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


    </div>

</header>

<section class="banner_main">
    <!--1ra Parte Fondo-->
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> BEBALI</span> <br>¿YA PROBASTE NUESTROS <br> NUEVOS HELADOS?</h1>
                     <p>Tenemos una gran variedad de <br> productos para todas las personas. </p>
                     <a class="read_more" href="#">Comprar Ahora</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img">
                     <figure><img src="assest/dist/img/helados.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>

 </section>
        <!--2da Parte Fondo 6 imagenes-->

      <div class="six_box">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="assest/dist/img/helados4.png" alt="#"/></i>
                     <span>Helados</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="assest/dist/img/fresco2.png" alt="#"/></i>
                     <span>Bebidas</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="assest/dist/img/torta3.png" alt="#"/></i>
                     <span>Lacteos</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="assest/dist/img/torta3.png" alt="#"/></i>
                     <span>Tortas</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="assest/dist/img/masitas4.png"alt="#"/></i>
                     <span>Masitas</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="assest/dist/img/galletas5.png" alt="#"/></i>
                     <span>Galletas</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
        <!-- Rent A Car Start -->
<section class="banner_main1">
    <div class="container-fluid ">
        <div class="container pb-3">
           
            <h1 class="text-center mb-5">PRODUCTOS MAS VENDIDOS</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4">
                        <img class="img-fluid mb-2" src="assest/dist/img/negrito2.png" alt="">
                        <h4 class="text-uppercase mb-4">Cono Wir</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <!-- <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>-->
                        </div>
                        <a class="btn btn-primary px-3" href="">VER</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-2" src="assest/dist/img/negrito3.png" alt="">
                        <h4 class="text-uppercase mb-4">Zambo</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <!-- <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>-->
                        </div>
                        <a class="btn btn-primary px-3" href="">VER</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-2" src="assest/dist/img/torta4.png" alt="">
                        <h4 class="text-uppercase mb-4">Torta Helada</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <!-- <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>-->
                        </div>
                        <a class="btn btn-primary px-3" href="">VER</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-2" src="assest/dist/img/gemlo5.png" alt="">
                        <h4 class="text-uppercase mb-4">Gemelos</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <!-- <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>-->
                        </div>
                        <a class="btn btn-primary px-3" href="">VER</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-2" src="assest/dist/img/alfajor6.png" alt="">
                        <h4 class="text-uppercase mb-4">Alfajores de Maicena</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <!-- <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>-->
                        </div>
                        <a class="btn btn-primary px-3" href="">VER</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-2" src="assest/dist/img/yogur7.png" alt="">
                        <h4 class="text-uppercase mb-4">Yogurt de Coco</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <!-- <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>-->
                        </div>
                        <a class="btn btn-primary px-3" href="">VER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    
  <footer class="pie-pagina" >
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="assest/dist/img/logo2.png" alt="Logo de SLee Dw">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Fundada en el año 2002</p>
            <p>Sucursales disponibles en la ciudad de El Alto y La Paz</p>
        </div>
        <div class="box">
            <h2>CONTACTANOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-whatsapp"></a>
                <a href="#" class="fa fa-twitter"></a>
                <!--<a href="#" class="fa fa-youtube"></a>-->
            </div>
        
    </div>

 


    
<!-- jQuery -->
<script src="assest/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- AdminLTE App -->
<script src="assest/dist/js/adminlte.js"></script>