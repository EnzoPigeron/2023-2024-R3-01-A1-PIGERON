<?php
    /**
     * Classe Pokemon
     */
    class Pokemon {
        private ?int $idPokemon;
        private string $nomEspece;
        private ?string $description;
        private string $typeOne;
        private ?string $typeTwo;
        private ?string $urlImg;

        
        public function __construct(?int $idPokemon, string $nomEspece, ?string $description, string $typeOne, ?string $typeTwo, ?string $urlImg) {
            $this->idPokemon = $idPokemon;
            $this->nomEspece = $nomEspece;
            $this->description = $description;
            $this->typeOne = $typeOne;
            $this->typeTwo = $typeTwo;
            $this->urlImg = $urlImg;
        }
        
        /**
         * Set l'id du pokemon
         * @param ?int $idPokemon id du pokemon
         * @return void
         */
        public function setIdPokemon(?int $idPokemon) : void {
            $this->idPokemon = $idPokemon;
        }

        /**
         * Get l'id du pokemon
         * @return ?int renvoie l'id du pokemon
         */
        public function getIdPokemon() : ?int {
            return $this->idPokemon;
        }

        /**
         * Set le nom de l'espèce du pokemon
         * @param string $idPokemon nom de l'espèce du pokemon
         * @return void
         */
        public function setNomEspece(string $nomEspece) : void {
            $this->nomEspece = $nomEspece;
        }

        /**
         * Get le nom de l'espèce du pokemon
         * @return string renvoie l'id du pokemon
         */
        public function getNomEspece() : string {
            return $this->nomEspece;
        }

        /**
         * Set la description du pokemon
         * @param ?string $description la description du pokemon
         * @return void
         */
        public function setDescription(?string $description) : void {
            $this->description = $description;
        }

        /**
         * Get la description du pokemon
         * @return ?string renvoie la description du pokemon
         */
        public function getDescription() : ?string {
            return $this->description;
        }

        /**
         * Set le premier type du pokemon
         * @param string $typeOne le premier du pokemon
         * @return void
         */
        public function setTypeOne(string $typeOne) : void {
            $this->typeOne = $typeOne;
        }

        /**
         * Get le premier type du pokemon
         * @return string renvoie le premier type du pokemon
         */
        public function getTypeOne() : string {
            return $this->typeOne;
        }

        /**
         * Set le second type du pokemon
         * @param ?string $typeTwo le second du pokemon
         * @return void
         */
        public function setTypeTwo(?string $typeTwo) : void {
            $this->typeTwo = $typeTwo;
        }

        /**
         * Get le second type du pokemon
         * @return ?string renvoie le second type du pokemon
         */
        public function getTypeTwo() : ?string {
            return $this->typeTwo;
        }

        /**
         * Set l'url de l'image du pokemon
         * @param ?string $typeTwo l'url de l'image du pokemon
         * @return void
         */
        public function setUrlImg(?string $urlImg) : void {
            $this->urlImg = $urlImg;
        }

        /**
         * Get l'url de l'image du pokemon
         * @return ?string renvoie l'url de l'image du pokemon
         */
        public function getUrlImg() : ?string {
            return $this->urlImg;
        }
    }
?>