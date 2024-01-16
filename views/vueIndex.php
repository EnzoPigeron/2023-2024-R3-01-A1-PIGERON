<?php
    require_once 'View.php';
?>

<!doctype html>
    <html lang="fr">
    
<head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $titre ?></title>
</head>   
<body>
    <!-- #contenu -->
    <main id="contenu">
        <?php if(isset($message)) echo($message); ?>

        <h1>Pokédex de <?= $nomDresseur ?></h1>

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
                        <td><button type=\"button\" href=\"index.php?action=edit-pokemon&idPokemon=$pokemon[idPokemon]\">Modifier</button> <button type=\"button\" href=\"index.php?action=del-pokemon&idPokemon=$pokemon[idPokemon]\">Supprimer</button></td>
                    </tr>
                ");
            }
            ?>            
        </table>
    </main>
</body>    
</html>   
