<?php
  require_once('pass.php');
  session_start();

  if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == true) {
    header("Location: index.php");
  }

  $info = '';
  // if post form was sent
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // if sent login and password are correct
      if ($_POST['login_inpt'] === $correct_login && $_POST['password_inpt'] == $correct_password) {
          $_SESSION['authenticated'] = true;
          header("Location: index.php");
      }
      else {
        $info = 'Niepoprawny login i/lub hasło.';
        $_SESSION['authenticated'] = false;
      }
  }
  render_html($info);

  function render_html($info = '') {
    echo '
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Logowanie do strony</title>
      </head>
      <body>

        <h1>Logowannie:</h1>
        <form class="" action="login.php" method="POST">
          login: <br>
          <input type="text" name="login_inpt" value="" required><br>
          password: <br>
          <input type="password" name="password_inpt" value="" required><br>
          <br>
          <input type="submit" name="submit_inpt" value="Zaloguj"><br>

          <br>
          <br>
          '.$info.'
        </form>
      </body>
    </html>
    ';
  }
?>
