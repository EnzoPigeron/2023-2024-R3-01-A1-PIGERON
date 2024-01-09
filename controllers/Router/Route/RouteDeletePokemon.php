<?php
    require_once('controllers/Router/Route.php');
    
    /**
     * Route pour la suppression d'un pokemon
     */
    class RouteDeletePokemon extends Route{

        private MainController $controller;

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
            $this->controller->delete();
        }

        private function post($params = [])
        {
            $this->controller->delete();
        }

    }
?>