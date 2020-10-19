<?php 

    class HomeController{
        public function index()
        {
            try{
                //echo 'Home';
            $colectPostagens = Postagem::selecionaTodos();

            var_dump($colectPostagens);

            } catch(Exception $e) {
                echo $e->getMessage();
            }
            

            

        }
    }