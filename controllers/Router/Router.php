<?php
    require_once 'controllers/MainController.php';
    require_once 'controllers/PokemonController.php';
    require_once 'controllers/Router/Route/RouteIndex.php';

    /**
     * 
     */
    class Routeur {
        private array $routeList; 
        private array $ctrlList;
        private string $action_key;

        /**
         * 
         */
        public function __construct($name_of_action_key = "action")
        {
            $this->createControllerList();
            $this->createRouteList();
        }

        private function createControllerList()
        {
            $this->ctrlList = ["main" => new MainController(),
                                "pokemon" => new PokemonController()];
        }

        private function createRouteList()
        {
            $this->routeList = ["index" => new RouteIndex($this->ctrlList["main"]),
                                "addPokemon" => new RouteAddPokemon($this->ctrlList["pokemon"])];
        }

        /**
         * 
         */
        public function routing($get,$post)
        {
            if (isset($get["action"])) {
                $this->routeList[$get["action"]]->action();
            }
            else if (isset($post["action"])) {
                $this->routeList[$post["action"]]->action();
            }
            else {
                $this->routeList["index"]->action();
            }
        }
    }
?>