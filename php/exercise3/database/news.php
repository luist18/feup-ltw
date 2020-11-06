<?php

    include_once('comments.php');

    function getAllNews()
    {
        global $db;

        $stmt = $db->prepare('SELECT news.*, users.name, COUNT(comments.id) AS comments FROM news
            JOIN users USING (username)
            LEFT JOIN comments ON comments.news_id = news.id
            GROUP BY news.id, users.username
            ORDER BY published DESC');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getNew($id)
    {
        global $db;
        
        $stmt = $db->prepare('SELECT * FROM news JOIN users USING (username) WHERE id = ?');
        $stmt->execute(array($id));
        return $stmt->fetch();
    }

    function updateNew($id, $title, $introduction, $fulltext)
    {
        global $db;

        $stmt = $db->prepare('UPDATE news SET title = ?, introduction = ?, fulltext = ? WHERE id = ?');
        return $stmt->execute(array($title, $introduction, $fulltext, $id));
    }

    function deleteNew($id)
    {
        global $db;

        $stmt = $db->prepare('DELETE FROM news WHERE id = ?');
        return $stmt->execute(array($id)) && deleteComments($id);
    }

    function addNew($title, $published, $tags, $username, $introduction, $fulltext)
    {
        global $db;

        $stmt = $db->prepare('INSERT INTO news VALUES (NULL, ?, ?, ?, ?, ?, ?)');
        return $stmt->execute(array($title, $published, $tags, $username, $introduction, $fulltext));
    }
