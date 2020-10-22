<?php
    session_start();
    include_once('../database/connection.php');
    include_once('../database/news.php');

    if (!isset($_SESSION['username'])) {
        header('Location: list_news.php');
    }

    if (!isset($_POST['id'])
        || !isset($_POST['title'])
        || !isset($_POST['introduction'])
        || !isset($_POST['fulltext'])) {
        header('Location: '.'error');
    }

    if (updateNew($_POST['id'], $_POST['title'], $_POST['introduction'], $_POST['fulltext'])) {
        header("Location: ../news_item.php?id={$_POST['id']}");
    }
