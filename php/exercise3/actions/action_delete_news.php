<?php
    session_start();
    include_once('../database/connection.php');
    include_once('../database/news.php');

    if (!isset($_SESSION['username'])) {
        header('Location: ../list_news.php');
    }

    if (!isset($_POST['id'])) {
        header('Location: ../error.php');
    }

    if (deleteNew($_POST['id'])) {
        header('Location: ../list_news.php');
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
