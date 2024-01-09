<?php
    require_once "views/View.php";
    require_once 'models/PokemonManager.php';

    /**
     * 
     */
    class PokemonController {
        /**
         * 
         */
        public function displayAddPokemon(?string $message = null) {
            $AddPokemonView = new View('AddPokemon');
            $AddPokemonView->generer(["message" => $message]);
        }

        /**
         * 
         */
        public function displayAddType() {
            $AddTypeView = new View('AddType');
            $AddTypeView->generer([]);
        }
    }
?>