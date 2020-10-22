<?php
    session_start();
    include_once('database/connection.php');
    include_once('database/news.php');
    include_once('database/comments.php');

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $article = getNew($_GET['id']);

        $comments = getComments($_GET['id']);
        $comments_string = '';
    }

    include('templates/common/header.php');
    include('templates/news/news_item.php');
    include('templates/common/footer.php');
?>

