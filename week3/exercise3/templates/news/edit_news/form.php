<form id="edit-form" method="POST" action="actions/action_edit_news.php">
    <input name="id" type="number" hidden value="<?=$new['id']?>"/>
    
    <label>
        Title:
        <input name="title" type="text" value="<?=$new['title']?>"/>
    </label>

    <label for="introduction">
        Introduction:
    </label>

    <textarea id="introduction" name="introduction" rows="5">
        <?=$new['introduction']?>
    </textarea>

    <label for="fulltext">
        Full text:
    </label>
    
    <textarea id="fulltext" name="fulltext" rows="10">
        <?=$new['fulltext']?>
    </textarea>

    <input type="submit" value="Edit new"/>
</form>