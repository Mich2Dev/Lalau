<?php
    class home
    {
        public function __construct()
        {
            $this->vista = new Contenido();
        }
    
        public function index()
        {
         $this->vista->Cargar('public_view/index');  
           
        }
        public function products()
        {
            $this->vista->Cargar('public_view/content_public/products');    
        }


        public function login()
        {
            $this->vista->recursosP('public_view/content_public/login');
        }
       
    }
?>