<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Creez un compte :</title>
</head>
<body>
<form action="../controllers/register_controller.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="Prenom">Prenom :</label>
        <input type="text" id="prenom" name="user_prenom">
    </div>
    <div>
        <label for="adresse">adresse :</label>
        <input type="adresse" id="adresse" name="user_adresse">
    </div>
    <div>
        <label for="password">mot de passe : </label>
        <input type="password" id="password" name="user_password">
    </div>
    <div>
        <label for="Login">Login :</label>
        <input type="text" id="login" name="user_login">
    </div>
    <div class="button">
        <button type="submit">s'enregistrer</button>
    </div>
</form>
</body>
</html>