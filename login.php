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
        <li class="register"><a href="register.html">Rejestracja</a></li>
        <li class="blog"><a href="blog.html">Blog</a></li>
        <li class="więcej o sobie"><a href="additional_info.html">Więcej o sobie</a></li>
        <li class="menuFont"><a href="menu.html">Menu Font</a></li>
        <li class="loguj"><a class="active" href="login.php">Zaloguj</a></li>
      </ul>
    </nav>
    <?php
      $lay_container1 = "login_container";
      $lay_container2 = "login_container1";
      $lay_container3 = "login_container2";
      $lay_field1 = "field_log";
      $lay_field2 = "field_log1";
      $lay_field3 = "field_log2";
      $lay_button1 = "button_submit";
      $lay_button2 = "button_submit1";
      $lay_button3 = "button_submit2";

      if(isset($_COOKIE["Container"])) {
          $value1 = $_COOKIE["Container"];
          $value2 = $_COOKIE["Field"];
          $value3 = $_COOKIE["Button"];
      } else {
          $value1 = "login_container";
          $value2 = "field_log";
          $value3 = "button_submit";
      }


      if (isset($_POST["layout1"])) {
        $value1 = $lay_container1;
        $value2 = $lay_field1;
        $value3 = $lay_button1;
        setcookie("Container", $value1,time() + (86400 * 30));
        setcookie("Field", $value2,time() + (86400 * 30));
        setcookie("Button", $value3,time() + (86400 * 30));
      }
      if (isset($_POST["layout2"])) {
        $value1 = $lay_container2;
        $value2 = $lay_field2;
        $value3 = $lay_button2;
        setcookie("Container", $value1,time() + (86400 * 30));
        setcookie("Field", $value2,time() + (86400 * 30));
        setcookie("Button", $value3,time() + (86400 * 30));
      }
      if (isset($_POST["layout3"])) {
        $value1 = $lay_container3;
        $value2 = $lay_field3;
        $value3 = $lay_button3;
        setcookie("Container", $value1,time() + (86400 * 30));
        setcookie("Field", $value2,time() + (86400 * 30));
        setcookie("Button", $value3,time() + (86400 * 30));
      }
     ?>

<div id="layout">
  <form class="" action="login.php" method="post">
    <input type="submit" name="layout1" value="Zmien wyglad" id="button_layout">
    <br>
    <input type="submit" name="layout2" value="Zmien wyglad" id="button_layout">
    <br>
    <input type="submit" name="layout3" value="Zmien wyglad" id="button_layout">
  </form>

</div>

<div id="<?=$value1?>">
  <form action="login.php" method="post">
    Login
    <input type="text" class="<?=$value2?>">
    <br>
    Hasło
    <input type="password" class="<?=$value2?>">
    <br>
    <input type="submit" name="" value="Zaloguj się" id="<?=$value3?>">

  </form>
</div>


  </body>
</html>
