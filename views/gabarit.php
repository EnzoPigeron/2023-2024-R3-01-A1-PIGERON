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
        <a href="index.php">Accueil</a>
        <a href="index.php?action=add-pokemon">Ajouter un pokemon</a>
        <a href="index.php?action=add-type-pokemon">Ajouter un type</a>
        <a href="index.php?action=search">Recherher</a>
    </nav>
</header>
<!-- #contenu -->
<main id="contenu">
    <?= $contenu ?>
</main>
<footer>

</footer>
</body>

</html>