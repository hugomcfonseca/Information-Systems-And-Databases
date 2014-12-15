    <!-- login form -->
{if $s_user}
    <div id="login">
      <div class="title">{$s_user} ({$s_tipo})</div>
      <form action="../principal/logout_action.php" method="post">
      <input type="submit" value="Logout" />
      </form>
    </div>
{else}
    <div id="login">
      <div class="title">Login</div>
      <form action="../principal/login_action.php" method="post">
        <label for="email">Username:</label>
        <input type="text" size="10" name="email" id="email"/>
        <label for="pass">Password:</label>
        <input type="password" size="10" name="pass" id="pass"/>
        <input type="submit" value="Login" />
      </form>
    </div>
{/if}
