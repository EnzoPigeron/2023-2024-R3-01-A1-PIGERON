<?php
    /**
     * Classe abstraite qui sert de model
     */
    abstract class Model {
        private PDO $db;

        public function __construct() {
            $this->getDB();
        }
        
        /**
         * Exécute la requête SQL
         * @param string $sql requête
         * @param array $params les paramètres de la requête
         * @return PDOStatement|false si échec de la fonction, elle renvoie faux
         */
        protected function execRequest(string $sql, array $params = null) : PDOStatement|false {
            $statement = $this->db->prepare($sql);
            if ($params == null) {
                $statement->execute();
            } else {
                $statement->execute($params);
            }           
            return $statement;
        }

        /**
         * Obtenir la base de données
         * @return PDO renvoie l'objet PDO
         */
        private function getDB() : PDO {
            if (!isset($this->db)) {
                $this->db = new PDO("mysql:host=localhost;dbname=pokedex;charset=utf8", "root", "");
            }
            return $this->db;
        }

    }
?>  