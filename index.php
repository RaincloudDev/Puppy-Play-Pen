
<?php
    require "head.php";
    require "header.php";
    echo "<form method=\"post\" action=\"gameplay/login-action.php\" name=\"signin-form\">
    <div class=\"form-element\">
      <label>Username</label>
      <input type=\"text\" name=\"username\" pattern=\"[a-zA-Z0-9]+\" required />
    </div>
    <div class=\"form-element\">
      <label>Password</label>
      <input type=\"password\" name=\"password\" required />
    </div>
    <button type=\"submit\" name=\"login\" value=\"login\">Log In</button>
  </form>";
    require "footer.php";
    ?>


    