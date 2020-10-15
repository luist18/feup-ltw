<?php
    $db = new PDO('sqlite:news.db');
    
    $statement = $db->prepare('SELECT * FROM news');
    $statement->execute();

    $articles = $statement->fetchAll();

    foreach($articles as $article) {
        echo '<h1>'. $article['title'] .'</h1>';
        echo '<p>' . $article['introduction'].'</p>';
    }
?>