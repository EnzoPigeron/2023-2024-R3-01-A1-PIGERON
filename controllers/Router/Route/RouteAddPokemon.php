<?php
    require_once 'controllers/Router/Route.php';
    
    /**
     * Route pour l'ajout d'un pokemon
     */
    class RouteAddPokemon extends Route{

        private PokemonController $controller;

        public function __construct($controller)
        {
            parent::__construct();
            $this->controller = $controller;
        }

        public function action($params = [], $method='GET') {
            if($method == 'GET') {
                $this->get($params);
            }
            else if ($method == 'POST') {
                $this->post($params);
            }        
        }

        private function get($params = [])
        {
            $this->controller->displayAddPokemon();
        }

        private function post($params = [])
        {
            
        }

    }
?>