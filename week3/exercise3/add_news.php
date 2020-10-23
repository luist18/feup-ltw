<?php
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header('Location: list_news.php');
    }
    
    include_once('database/connection.php');
    include_once('database/news.php');

    include('templates/common/header.php');
    include('templates/news/add_news.php');
    include('templates/common/footer.php');
