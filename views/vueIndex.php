<?php
    require_once 'View.php';
?>

<!doctype html>
    <html lang="fr">
    
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="public/css/main.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $titre ?></title>
    </head>
    
    <body>
    <header>
        <!-- Menu -->
        <nav>
    
        </nav>
    </header>
    <!-- #contenu -->
    <main id="contenu">
        <h1>Pokédex de <?= $nomDresseur ?></h1>

        <p><?php var_dump($listPokemon); ?></p>

        <p><?php var_dump($first); ?></p>

        <p><?php var_dump($other); ?></p>
    </main>
    <footer>
    
    </footer>
    </body>
    
    </html>   
