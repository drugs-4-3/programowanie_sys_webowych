<?php
  session_start();
  if(isset($_SESSION['login']) && $_SESSION['login']==true) {
    echo "WITAJ". '<br><a href ="logout.php">siema</a></p>';
    echo "<br>".$_SESSION['id'];

  } else {
    header('Location: login.php');
  }
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
        <li class="loguj"><a href="login.php">Zaloguj</a></li>
        <?php
          echo "<li class='loguj'><a class='active' href='account.php'>Konto</a></li>";
         ?>
      </ul>
    </nav>


  </body>
</html>
