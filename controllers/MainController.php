<?php
    require_once 'views/View.php';
    require_once 'models/PokemonManager.php';

    /**
     * 
     */
    class MainController {
        /**
         * Générer la vue
         */
        public function Index() : void {
            $pokemon = new PokemonManager();

            $listPokemon = $pokemon->getAll(); 
            $first = $pokemon->getById(1);
            $other = $pokemon->getById(123);

            $indexView = new View('Index');
            $indexView->generer(["nomDresseur" => "Red","listPokemon" => $listPokemon,"first" => $first,"other" => $other]);
        }

        /**
         * 
         */
        public function search() {
            $searchView = new View('search');
            $pokemon = new PokemonManager();
            $listPokemon = $pokemon->getAll();
            $searchView->generer(["listPokemon" => $listPokemon]);
        }

        /**
         * 
         */
        public function delete(){
            $pokemon = new PokemonManager();
            $listPokemon = $pokemon->getAll();
            $indexView = new View('index');
            $indexView->generer(["nomDresseur" => "Red","listPokemon" => $listPokemon, "message" => "Pokemon supprimé"]);
        }
    }
?>