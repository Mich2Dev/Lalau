<?php
    class Contenido
    {
        public function recursosP($recurso){
            require_once $recurso.".php";
        }
        public function Cargar($modulo){
            
            require_once "public_view/header.php";
            require_once $modulo.".php";
            require_once "public_view/footer.php";
        }
    }
?>