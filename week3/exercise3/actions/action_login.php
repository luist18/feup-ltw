<?php
    session_start();
    include_once('../database/connection.php');
    include_once('../database/users.php');

    if (userExists($_POST['username'], $_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['login_ok'] = true;
    } else {
        $_SESSION['login_ok'] = false;
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
