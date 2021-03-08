<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>
<form action="../controllers/article_controller.php" method="post">
    <div>
        <label for="titre">Titre:</label>
        <input type="text" id="Titre" name="Titre">
    </div>
    <div>
        <label for="idarticle">Id_article:</label>
        <input type="number" id="idarticle" name="idarticle">
    </div>
    <div>
        <label for="auteur">Auteur</label>
        <input type="text" id="auteur" name="auteur">
    </div>
    <div>
        <label for="maison_dedition:">Maison_d'edition: </label>
        <input type="text " id="maison_dedition: " name="maison_dedition">
    </div>
    <div>
        <label for="Description">Description :</label>
        <input type="text " id="Description" name="Description"></input>
    </div>
    <div>
        <label for="Stock">Stock :</label>
        <input  type="text " id="Stock" name="Stock"></input>
    </div>
    <div>
        <label for="Price">Price :</label>
        <input  type="number" id="Price" name="Price"></input>
    </div>
    <div class="button">
        <button type="submit">Ajouter un Article</button>
    </div>
 </form>
<form action="../controllers/article_suppression.php" method="post">
<div class="button">
        <button type="submit">Supprimer</button>
        <input  type="text " id="Suppr" name="Suppr"></input>
</div>   
</form>
</body>
</html>