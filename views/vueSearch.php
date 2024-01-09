<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche</title>
</head>
<body>
    <form>
        <fieldset> <legend>Rechercher </legend>
            <div>
                <label for="Search">Recherche </label>
                <input type="text" name="Search" required>
            </div>
            <div>
                <label for="Champ">Champ de recherche</label>
                <select name="Champ" required>
                    <option>Nom</option>
					<option>Description</option>
					<option>Type(s)</option> 
                </select>   
            </div>
        </fieldset>
        <button type="submit">Rechercher</button>
    </form>  
</body>
</html>