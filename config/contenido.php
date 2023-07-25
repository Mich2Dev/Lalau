<?php
    class Contenido
    {
        public function Cargar($modulo){
            
            require_once "view/header.php";
            require_once $modulo.".php";
        }
    }
?>