<?php

    function getComments($id)
    {
        global $db;
        
        $stmt = $db->prepare('SELECT * FROM comments JOIN users USING (username) WHERE news_id = ?');
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

    function deleteComments($news_id)
    {
        global $db;

        $stmt = $db->prepare('DELETE FROM comments WHERE news_id = ?');
        return $stmt->execute(array($news_id));
    }
