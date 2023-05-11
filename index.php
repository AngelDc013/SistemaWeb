<?php

/*CONTROLADORES*/
require_once "Controlador/usuarioControlador.php";
require_once "Controlador/productoControlador.php";

/*MODELOS*/
require_once "Modelo/usuarioModelo.php";
require_once "Modelo/productoModelo.php";

require_once "Controlador/plantillaControlador.php";
/*Intanciamos la clase para hacer uso de los metos de plantilla controlador*/
$plantilla= new ControladorPlantilla();
$plantilla->ctrPlantilla();

