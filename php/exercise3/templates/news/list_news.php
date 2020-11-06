<section id="news">
    <h2>In the news</h2>
    <?php
        foreach ($articles as $article) {
            $id = $article['id'];
            $title = $article['title'];
            $published_epoch = $article['published'];
            $tags_raw = $article['tags'];
            $author = $article['name'];
            $comments = $article['comments'];
            
            $published = date("d/m/Y H:i", substr($published_epoch, 0, 10));
            
            $tags_raw = explode(',', $tags_raw);
            
            $tags = "";
            
            foreach ($tags_raw as $tag) {
                $tags = $tags . "<a href=\"?tag=$tag\">#$tag</a>";
            }
            
            echo "
                <article class=\"new-item\">
                    <header>
                        <h1>
                            <a href=\"news_item.php?id=$id\">$title</a>
                        </h1>
                    </header>
                    <p>$title</p>
                    <footer>
                        <span class=\"author\">$author</span>
                        <span class=\"tags\">
                            $tags
                        </span>
                        <span class=\"date\">$published</span>
                        <a class=\"comments\" href=\"news_item.php?id=$id\">$comments</a>
                    </footer>
                </article>
            ";
        }
    ?>
</section>
