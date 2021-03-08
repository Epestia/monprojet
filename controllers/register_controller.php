<?php
require '../models/user.php';

if (!empty($_POST['user_name']) && !empty($_POST['user_prenom']) && !empty($_POST['user_adresse']) && !empty($_POST['user_password']) && !empty($_POST['user_login'])){
setUser($_POST['user_login'], $_POST['user_password'], 0, $_POST['user_adresse'], $_POST['user_name'], $_POST['user_prenom']);
echo $_POST['user_name'];
}
else{
    echo 'pas ok';
}


?>
