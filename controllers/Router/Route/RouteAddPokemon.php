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
            try 
            {
                $data = [
                    "nomEspece" => parent::getParam($params, "nomEspece",true),
                    "description" => parent::getParam($params, "description", true),
                    "typeOne" => parent::getParam($params, "typeOne", true),
                    "typeTwo" => parent::getParam($params, "typeTwo", true),
                    "urlImg" => parent::getParam($params, "urlImg", true)
                ];
            } catch (Exception $e)
            {
                $this->controller->displayAddPokemon($e->getMessage());
            }
            
            $this->controller->addPokemon($data);
        }
    }
?>