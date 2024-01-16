<?php
    require_once "views/View.php";
    require_once 'models/pokemon.php';
    require_once 'models/PokemonManager.php';

    /**
     * Controlleur des pokemon
     */
    class PokemonController {
        /**
         * Affiche la vue d'ajout de pokemon
         * @param ?string $message message a afficher s'il existe
         */
        public function displayAddPokemon(?string $message = null) : void {
            $AddPokemonView = new View('AddPokemon');
            $AddPokemonView->generer(["message" => $message]);
        }

        /**
         * Affiche la vue d'ajout de type
         */
        public function displayAddType() {
            $AddTypeView = new View('AddType');
            $AddTypeView->generer([]);
        }

        /**
         * Ajoute un pokemon
         * @param array $pokemon un pokemon avec toutes ses infos
         */
        public function addPokemon(array $pokemon) {
            $manager = new PokemonManager();

            $newPokemon = $manager->createPokemon(new Pokemon($pokemon/*null, $pokemon['nomEspece'], $pokemon['description'], $pokemon['typeOne'], $pokemon['typeTwo'], $pokemon['urlImg']*/));  

            $message = "Echec ajout pokemon";
            if (isset($newPokemon)) $message = "Pokemon ajouté";

            $listPokemon = $manager->getAll();

            $indexView = new View('Index');
            $indexView->generer(['nomDresseur' => "Red",'listPokemon' => $listPokemon, 'message' => $message]);
        }
    }
?>