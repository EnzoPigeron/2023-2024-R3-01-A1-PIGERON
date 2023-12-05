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

        <table>
            <tr>
                <th>ID</th>
                <th>Pokemon</th> 
                <th>Description</th>
                <th>Type(s)</th>
                <th>Image</th>
                <th>Option</th>
            </tr>
            <?php
            foreach ($listPokemon as $pokemon) {
                echo ("
                    <tr>
                        <td>$pokemon[idPokemon]</td>
                        <td>$pokemon[nomEspece]</td>
                        <td>$pokemon[description]</td>
                        <td>$pokemon[typeOne] $pokemon[typeTwo]</td>
                        <td><img src=$pokemon[urlImg] alt=$pokemon[nomEspece]></td>
                        <td><button type=\"button\">Modifier</button> <button type=\"button\">Supprimer</button></td>
                    </tr>
                ");
            }
            ?>            
        </table>
    </main>
    <footer>
    
    </footer>
    </body>
    
</html>   
