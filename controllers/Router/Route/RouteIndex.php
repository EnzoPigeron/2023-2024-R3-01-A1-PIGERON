<?php
    require_once('controllers/Router/Route.php');
    
    /**
     * 
     */
    class RouteIndex extends Route{

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
            $this->controller->Index();
        }

        private function post($params = [])
        {
            $this->controller->Index();
        }

    }
?>