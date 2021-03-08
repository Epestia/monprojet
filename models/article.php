<?php
require_once 'connexion.php';

function getPricebyId($id) {
    $reponse = getDB()->prepare('SELECT Price FROM articles WHERE idArticle = :id');
    $reponse->execute([':id' => $id]);
    $price = $reponse;
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $price;
}


function setArticle($Auteur, $Description, $idArticle, $Maison_edition, $Price, $stock, $Titre) {
    //C'est ici qu'on va faire l'update de l'utilisateur.
    $reponse = getDB()->prepare('INSERT INTO articles ( Auteur, Description, idArticle, Maison_edition, Price, stock, Titre) values(:Aut, :Des, :idart, :me, :Prc, :stk, :Ti)');
    
    $reponse->execute([':Aut'=> $Auteur, ':Des'=>$Description,':idart'=>$idArticle, ':me'=>$Maison_edition, ':Prc'=>$Price, ':stk'=>$stock, ':Ti'=>$Titre ]);
    $reponse->closeCursor(); // Termine le traitement de la requête
}

function updateArticle ($Auteur, $Description, $idArticle, $Maison_edition, $Price, $stock, $Titre){
    //C'est ici qu'on va faire l'update de l'utilisateur.
    $reponse = getDB()->prepare('UPDATE articles SET Auteur = :auteur, Description = :description, Maison_edition = :maison_edition, Price = :price, stock = :stock, Titre = :titre WHERE idArticle = :id');
    $reponse->execute([':auteur'=>$Auteur, ':description'=>$Description, ':id'=>$idArticle, ':maison_edition'=>$Maison_edition, ':price'=>$Price, ':stock'=>$stock, ':titre'=>$Titre]);
    $reponse->closeCursor(); // Termine le traitement de la requête
}
function getArticlebyId($id) {
    $reponse = getDB()->prepare('SELECT * FROM articles WHERE idArticle = :id');
    $reponse->execute([':id' => $id]);
    $article = $reponse->fetch();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $article;
}
function deleteArticle($id){
    $reponse = getDB()->prepare ('DELETE FROM articles WHERE idArticle =:id');
    $reponse->execute([':id' => $id]);
    $reponse->closeCursor(); 
}
?>