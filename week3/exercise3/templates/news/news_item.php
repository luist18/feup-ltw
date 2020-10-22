<section id="news">
    <?php
        if (isset($comments) && $comments != null) {
            foreach ($comments as $comment) {
                $published = date("d/m/Y H:i", substr($comment['published'], 0, 10));
                $comments_string = $comments_string . "
                    <article class=\"comment\">
                        <span class=\"user\">{$comment['name']}</span>
                        <span class=\"date\">$published<span>
                        <p>
                            {$comment['text']}
                        </p>
                    </article>
                ";
            }
        }

        if (!isset($article) || $article == null) {
            echo "Could not found a new with that id...";
        } else {
            if (isset($_SESSION['username'])) {
                echo "
                    <a href=\"edit_news.php?id={$_GET['id']}\">Edit</a>
                ";
            }
            echo "
                <article class=\"news-item\">
                    <header>
                        <h1>
                            <a href=\"#\">{$article['title']}</a>
                        </h1>
                    </header>
                    <p>
                        {$article['fulltext']}
                    </p>
                </article>
            ";
            
            echo "
                <section id=\"comments\">
                    <h1>" . count($comments) . (count($comments) != 1 ? " comments" : " comment") . "</h1>" .
                        $comments_string
                    . "
                </section>
            ";
        }
    ?>
</section>