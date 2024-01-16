<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un pokemon</title>
</head>
<body>
    <?php if(isset($message)) echo($message); ?>
    
    <form action="index.php?action=add-pokemon" method="post">
        <fieldset> <legend>Ajouter un pokemon </legend>
            <div>
                <label for="Name">Nom </label>
                <input type="text" name="Name" required>
            </div>
            <div>
                <label for="Description">Description </label>
                <input type="text" name="Description" required>
            </div>
            <div>
                <label for="Type1">Type 1 </label>
                <select name="Type1" required>
                    <option>Feu</option>
					<option>Eau</option>
					<option>Plante</option> 
                </select>   
            </div>
            <div>
                <label for="Type2">Type 2 </label>
                <select name="Type2">
                    <option>Feu</option>
					<option>Eau</option>
					<option>Plante</option> 
                </select>   
            </div>
            <div>
                <label for="Img">Url de l'image </label>
                <input type="text" name="Img">
            </div>
        </fieldset>
        <button type="submit">Valider</button>
    </form>    
</body>
</html>