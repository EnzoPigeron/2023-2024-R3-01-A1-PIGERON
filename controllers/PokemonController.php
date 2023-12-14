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
        public function displayAddPokemon()
        {
            $AddPokemonView = new View('AddPokemon');
            $AddPokemonView->generer([]);
        }
    }
?>