<?php
require_once 'connexion.php';

function getPswdByLogin($login) {
    $reponse = getDB()->prepare('SELECT Password FROM user WHERE login = :login');
    $reponse->execute([':login' => $login]);
    $pswd = $reponse;
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $pswd;
}


function setUser($login, $password, $role, $adresse, $nom, $prenom) {
    //C'est ici qu'on va faire l'update de l'utilisateur.
    $reponse = getDB()->prepare('INSERT INTO user (Login, Password, Role, adresse, Nom, Prenom) values(:log, :pswd, :ro, :adrss, :nam, :prenam)');
    
    $reponse->execute(['log'=> $login, 'pswd'=> $password,'ro'=>$role, 'adrss'=>$adresse, 'nam'=> $nom, 'prenam'=> $prenom]);
    $reponse->closeCursor(); // Termine le traitement de la requête
}


function updateUser($login, $password, $role, $adresse, $nom, $prenom) {
    //C'est ici qu'on va faire l'update de l'utilisateur.
    $reponse = getDB()->prepare('UPDATE USER SET password = :password, Role = :role, adresse = :adresse, Nom = :nom, Prenom = :prenom WHERE Login = :Login');
    $reponse->execute([':login' => $login, ':adresse' => $adresse, ':password' => $password, ':role' => $role, ':nom'=> $nom, '$prenom'=> $prenom]);
    $reponse->closeCursor(); // Termine le traitement de la requête
}

?>