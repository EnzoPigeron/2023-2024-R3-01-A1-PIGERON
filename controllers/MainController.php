<?php
    require_once 'views/View.php';

    /**
     * 
     */
    class MainController {
        /**
         * Générer la vue
         */
        public function Index() : void {
            $indexView = new View('Index');
            $indexView->generer(['nomDresseur' => "Red"]);
        }
    }
?>