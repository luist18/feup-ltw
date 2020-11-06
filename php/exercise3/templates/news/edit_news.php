<section id="edit-news">
    <h2>Edit new</h2>
    <?php
        if (!isset($new) || $new == null) {
            echo "
                <span class=\"error\">
                    Could not find a new with that ID...
                <span>
            ";
        } else {
            echo "
                <div class=\"wrapper\">
                    <a class=\"new-page-link\" href=\"news_item.php?id={$new['id']}\">New page link</a>
                    <form method=\"POST\" action=\"actions/action_delete_news.php\">
                        <input name=\"id\" type=\"number\" hidden value=\"{$new['id']}\" />
                        <input type=\"submit\" class=\"remove-new-link\" value=\"Remove new\"/>
                    </form>
                </div>
            ";

            include('edit_news/form.php');
        }
    ?>
</section>