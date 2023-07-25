<?php
    class home
    {
        public function __construct()
        {
            $this->vista = new Contenido();
        }
    
        public function index()
        {
         $this->vista->Cargar('view/index');    
        }
    }
?>