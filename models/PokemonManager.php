<?php
    require_once 'models/Model.php';
    require_once 'models/Pokemon.php';

    /**
     * Classe PokemonManager
     */
    class PokemonManager extends Model {
        public function __construct() {
            parent::__construct();
        }    

        /**
         * Renvoie tous les pokemons 
         * @return array un tableau de pokemon
         */
        public function getAll() : array {
            $res = $this->execRequest('SELECT * FROM pokemon');
            $res = $res->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }

        /**
         * Renvoie un pokemon a partir de son id
         * @param int $idPokemon l'id du pokemon 
         * @return ?Pokemon renvoie un objet Pokemon
         */
        public function getById(int $idPokemon) : ?Pokemon {
            $res = $this->execRequest('SELECT * FROM pokemon WHERE idPokemon=?',array($idPokemon));
            $res = $res->fetch(PDO::FETCH_ASSOC);
            if ($res) {
                 $pokemon = new Pokemon($res['idPokemon'],$res['nomEspece'],$res['description'],$res['typeOne'],$res['typeTwo'],$res['urlImg']);
            } else {
                $pokemon = null;
            }
            return $pokemon;           
        }

        /**
         * Créé un pokemon
         * @param Pokemon $pokemon pokemon a créer
         * @return ?Pokemon renvoie un objet pokemon
         */
        public function createPokemon(Pokemon $pokemon) : ?Pokemon {
            try {
                $pokemon->setIdPokemon($this->execRequest('SELECT LAST_INSERT_ID();'));

                $stmt = $this->execRequest('INSERT INTO pokemon VALUES (:idPokemon, :nomEspece,:description,:typeOne,:typeTwo,:urlImg);',
                [$pokemon->getIdPokemon(),$pokemon->getNomEspece(),$pokemon->getDescription(),$pokemon->getTypeOne(),$pokemon->getTypeTwo(),$pokemon->getUrlImg()]);

                return $pokemon;
            }catch(Exception $e) {
                die('error ' .$e->getMessage());
            }
            
        }
    }
?>