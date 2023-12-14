<?php
    require_once 'controllers/MainController.php';
    require_once 'controllers/PokemonController.php';
    require_once 'controllers/Router/Route/RouteIndex.php';
    require_once 'controllers/Router/Route/RouteAddPokemon.php';
    require_once 'controllers/Router/Route/RouteAddType.php';
    require_once 'controllers/Router/Route/RouteSearch.php';

    /**
     * 
     */
    class Router {
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
                                "add-pokemon" => new RouteAddPokemon($this->ctrlList["pokemon"]),
                                "add-type-pokemon" => new RouteAddType($this->ctrlList["pokemon"]),
                                "search" => new RouteSearch($this->ctrlList["main"])];
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