<?php
    /**
     * 
     */
    abstract class Route {
        /**
         * 
         */
        public function __construct() {
            
        }
        
        /**
         * 
         */
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

        private get($params = []) {

        }

        private post($params = []) {

        }
    }
?>