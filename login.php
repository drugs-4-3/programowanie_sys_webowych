<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logowanie</title>

    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="style_login1.css" type="text/css">
  </head>
  <body id="web_login">

    <nav>
      <ul>
        <li class="home"><a href="index.php">Strona główna</a></li>
        <li class="register"><a href="register.php">Rejestracja</a></li>
        <li class="blog"><a href="blog.html">Blog</a></li>
        <li class="więcej o sobie"><a href="additional_info.html">Więcej o sobie</a></li>
        <li class="menuFont"><a href="menu.html">Menu Font</a></li>
        <li class="loguj"><a class="active" href="login.php">Zaloguj</a></li>
        <?php
          if(isset($_SESSION['login']) && $_SESSION['login']==true) {
            echo "<li class='loguj'><a href='account.php'>Konto</a></li>";
          }
         ?>
      </ul>
    </nav>

<div id="login_container">
  <form action="check_login.php" method="post">
    Login
    <input type="text" class="field_log" name="login">
    <br>
    Hasło
    <input type="password" class="field_log" name="haslo">
    <br>
    <input type="submit" name="" value="Zaloguj się" id="button_submit">

  </form>
</div>


  </body>
</html>
