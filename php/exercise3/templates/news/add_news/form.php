<form id="edit-form" method="post" action="actions/action_add_news.php">
    <label>
        Title:
        <input name="title" type="text"/>
    </label>

    <fieldset>
        <legend>Tags:</legend>
        <label>
          <input type="checkbox" name="tags[]" value="nature">Nature
        </label>
        <label>
          <input type="checkbox" name="tags[]" value="life">Life
        </label>
        <label>
          <input type="checkbox" name="tags[]" value="cinema">Cinema
        </label>
        <label>
          <input type="checkbox" name="tags[]" value="tech">Tech
        </label>
      </fieldset>

    <label for="introduction">
        Introduction:
    </label>

    <textarea id="introduction" name="introduction" rows="5"></textarea>

    <label for="fulltext">
        Full text:
    </label>
    
    <textarea id="fulltext" name="fulltext" rows="10"></textarea>

    <input type="submit" value="Add new"/>
</form>