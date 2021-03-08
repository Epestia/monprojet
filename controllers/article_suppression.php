<?php
    require '../models/article.php';
    echo $_POST['Suppr'];
    if(!empty($_POST['Suppr'])){
        deleteArticle($_POST['Suppr']);
    }
?>