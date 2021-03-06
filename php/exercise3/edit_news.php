<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header('Location: list_news.php');
    }
    
    include_once('database/connection.php');
    include_once('database/news.php');

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $new = getNew($_GET['id']);
    }

    include('templates/common/header.php');
    include('templates/news/edit_news.php');
    include('templates/common/footer.php');
