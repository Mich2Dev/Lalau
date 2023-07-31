<?php
    class Contenido
    {
        public function recursosP($recurso){

        }
        public function Cargar($modulo){
            
            require_once "public_view/header.php";
            require_once $modulo.".php";
            require_once "public_view/footer.php";
        }
    }
?>