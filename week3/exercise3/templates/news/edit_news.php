<?php
    if (!isset($_SESSION['username'])) {
        header('Location: list_news.php');
    }
?>

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
                </div>
            ";

            include('edit_news/form.php');
        }
    ?>
</section>