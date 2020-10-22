<section id="login">
    <h2>Login</h2>
    <form method="POST" action="actions/action_login.php">
        <label>
          Username: <input type="text" name="username">
        </label>
        <label>
          Password: <input type="password" name="password">
        </label>
        <input type="submit" value="Login">
    </form>
    <?php
      if (isset($_SESSION['login_ok']) && !$_SESSION['login_ok']) {
          ?>
      <span class="error">User does not exists or password is wrong...</span>
      <?php
      }
      ?>
</section>