<?php
    session_start();
    include_once('../database/connection.php');
    include_once('../database/news.php');

    if (!isset($_SESSION['username'])) {
        header('Location: ../list_news.php');
    }

    print_r($_POST);

    if (!isset($_POST['title']) ||
        !isset($_POST['tags']) ||
        !isset($_POST['introduction']) ||
        !isset($_POST['fulltext']) ||
        empty($_POST['title']) ||
        empty($_POST['tags']) ||
        empty($_POST['introduction']) ||
        empty($_POST['fulltext'])) {
        header('Location: ../error.php');
    }

    $date = time();
    $username = $_SESSION['username'];
    $tags = implode(",", $_POST['tags']);

    if (addNew($_POST['title'], $date, $tags, $username, $_POST['introduction'], $_POST['fulltext'])) {
        header('Location: ../list_news.php');
    } else {
        header('Location: ../error.php');
    }
