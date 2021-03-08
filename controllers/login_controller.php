<?php
    require '../models/user.php';
    if(getPswdByLogin($_POST['user_login']) == $_POST['password']){
        echo "vous etes connecté";
    }
    else{
        echo "la connection a échoué";
    }
?>