<?php
    /**
     * Classe abstraite qui sert de model
     */
    abstract class Model {
        private PDO $db;

        /**
         * Initialise le model
         */
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
                $this->db = new PDO("mysql:host=localhost;dbname=grp-488_s3_progweb;charset=utf8", "grp-488", "f5sbazoh");
            }
            return $this->db;
        }

    }
?>  