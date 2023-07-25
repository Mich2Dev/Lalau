<?php
    require_once "config/rutas.php";

    if (isset($_GET["control"]) || isset($_GET["accion"])) 
    {
        $control = $_GET["control"];
        $accion = $_GET["accion"];
    }
     else 
    {
        $control = "init";
        $accion = "index";
    }
    
    Rutas::Cargar($control,$accion);
?>