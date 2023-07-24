<?php
    if (isset($_GET["control"]) && isset($_GET["accion"])) {
        $control = $_GET["control"];
        $accion = $_GET["accion"];
    } else {
        $control = "init";
        $accion = "index";
    }
?>