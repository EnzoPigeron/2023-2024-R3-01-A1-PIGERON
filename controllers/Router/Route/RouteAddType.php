<?php
    require_once('controllers/Router/Route.php');

    /**
     * Route pour l'ajout d'un type
     */
    class RouteAddType extends Route {
        private PokemonController $controller;

        public function __construct($controller) {
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

        protected function getParam(array $array, string $paramName, bool $canBeEmpty=true)
        {
            if (isset($array[$paramName])) {
                if(!$canBeEmpty && empty($array[$paramName]))
                    throw new Exception("Paramètre '$paramName' vide");
                return $array[$paramName];
            } else
                throw new Exception("Paramètre '$paramName' absent");
        }

        private function get($params = []) {
            $this->controller->displayAddType();
        }

        private function post($params = []) {

        }
    }
?>