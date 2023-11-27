<?php
    /**
     * Classe abstraite qui sert de model
     */
    abstract class Model {
        private PDO $db;
        
        /**
         * Exécute la requête SQL
         * @param string $sql requête
         * @param array $params les paramètres de la requête
         * @return PDOStatement|false si échec de la fonction, elle renvoie faux
         */
        protected function execRequest(string $sql, array $params = null) : PDOStatement|false {
            $statement = $this->db->prepare($sql);
            if ($params == null) {
                $statement = $statement->execute();
            } else {
                $statement = $statement->execute($params);
            }           
            return $statement;
        }

        /**
         * Obtenir la base de données
         * @return PDO renvoie l'objet PDO
         */
        private function getDB() : PDO {
            if ($this->db === null) {
                $this->db = new PDO("mysql:host=localhost;dbname=sae3_soupape;charset=utf8", "root", "");
            }
            return $this->db;
        }

    }
?>  