<?php
    class Rutas
        {
        public static function Cargar($control,$accion){
         
           if (file_exists("control/".$control.".php")) {
           require_once "control/".$control.".php";
           
           $cnt = $control;
           $inst = new $cnt;
           
           
            if (method_exists($inst,$accion)) {
                $inst->$accion();
            } else {
                //en el servidor las rutas debes dejarlas /
             header("Location: /");
            }
        } else {
                //en el servidor las rutas debes dejarlas /
            header("Location: /");
        }
        
            
        }
    }
?>