<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Connectez-vous : </title>
</head>
<body>
<form action="../controllers/login_controller.php" method="post">
<div>
        <label for="Login">Login :</label>

        <input type="text" id="Login" name="user_login">
</div>
<div>
        <label for="password">mot de passe : </label>
        <input type="password" id="password" name="user_password">
<div class="button">
        <button type="submit">Connection</button>
</div>

</div>
</body>
</html>