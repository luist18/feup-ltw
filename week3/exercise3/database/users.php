<?php

    function userExists($user, $password)
    {
        global $db;

        $stmt = $db->prepare('SELECT username, password FROM users WHERE username = ?');
        if (!$stmt->execute(array($user))) {
            return false;
        }

        $user = $stmt->fetch();

        if ($user == null) {
            return false;
        }

        return $user['password'] == sha1($password);
    }
