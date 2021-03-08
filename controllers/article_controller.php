<?php
    require '../models/article.php';
    echo $_POST['auteur'];
    echo $_POST['Description'];
    echo $_POST['idarticle'];
    echo $_POST['maison_dedition'];
    echo $_POST['Price'];
    echo $_POST['Stock'];
    echo $_POST['Titre'];
    if (!empty($_POST['auteur']) && !empty( $_POST['Description']) && !empty($_POST['idarticle']) && !empty($_POST['maison_dedition']) && !empty($_POST['Price']) && !empty ($_POST['Stock']) && !empty ($_POST['Titre'])){
        $donne = getArticlebyId($_POST['idarticle']);
        if (!empty($donne))
        {
            updateArticle($_POST['auteur'], $_POST['Description'], $_POST['idarticle'], $_POST['maison_dedition'], $_POST['Price'], $_POST['Stock'], $_POST['Titre']);
        }
        else {
    
            setArticle($_POST['auteur'], $_POST['Description'], $_POST['idarticle'], $_POST['maison_dedition'], $_POST['Price'], $_POST['Stock'], $_POST['Titre']);
        }
    }
    else{
        echo 'pas ok';
    }
        
    
        ?>
