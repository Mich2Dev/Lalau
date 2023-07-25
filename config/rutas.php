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
                
             header("Location: /Lalau");
            }
        } else {
           
            header("Location: /Lalau");
        }
        
            
        }
    }
?>