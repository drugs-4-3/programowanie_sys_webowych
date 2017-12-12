<?php
  session_start();

  function walidacjaLoginu($log) {
    if ((strlen($log)<3) || (strlen($log)>10)){
      $walidacjaOk=false;
      $_SESSION['e_error']="Login musi posiadać od 3 do 10 znaków!";
      return false;
    } else {
      require "connect.php";
      $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
      if ($polaczenie->connect_errno!=0)
      {
        echo "ERROR";
        $polaczenie->close();
        return false;
      } else {
            $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE login='$log'");
            $ile_takich_maili = $rezultat->num_rows;
            if($ile_takich_maili>0){
              $wszystko_OK=false;
              $_SESSION['e_error']="Istnieje już konto przypisane do tego loginu";
              $polaczenie->close();
              return false;
            }
        }
      }

      if (ctype_alnum($log)==false){
        $walidacjaOk=false;
        $_SESSION['e_error']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
        return false;
      }
      return true;
  }

  function walidacjaHasla($has, $has1) {
    if ($has!=$has1){
      $walidacjaOk=false;
      $_SESSION['e_error']="Hasla nie sa takie same";
      return false;
    }
    return true;
  }

  function walidacjaEmaila($mail) {
    if (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
      $walidacjaOk=false;
      $_SESSION['e_error'] = "Email nie właściwy";
      return false;
    }
    else {
      require "connect.php";
      $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
      if ($polaczenie->connect_errno!=0)
      {
        echo "ERROR";
        return false;
        $polaczenie->close();
      } else {
            $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$mail'");
            $ile_takich_maili = $rezultat->num_rows;
            if($ile_takich_maili>0){
              $wszystko_OK=false;
              $_SESSION['e_error']="Istnieje już konto przypisane do tego adresu e-mail!";
              $polaczenie->close();
              return false;
            }
      }
    }
    return true;
  }

  function walidacjaImienia($imie) {
    if ((strlen($imie)<3) || (strlen($imie)>10)){
      $walidacjaOk=false;
      $_SESSION['e_error']="Imie musi posiadać od 3 do 10 znaków!";
      return false;
    }
    return true;
  }

  function walidacja($log,$has, $has1, $mail, $imie) {
    if (walidacjaLoginu($log) && walidacjaHasla($has, $has1) && walidacjaEmaila($mail) && walidacjaImienia($imie)) {
      return true;
    } else {
      return false;
    }
  }

  function insertDB($log,$has, $mail, $imie) {
    require "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0)
    {
      echo "ERROR dodawania do bazy";
    } else {
      $sql = "INSERT INTO uzytkownicy (login,haslo,email,imie) VALUES
      ('$log','$has','$mail','$imie')";

      if ($polaczenie->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $polaczenie->error;
      }
    }
  }

  function updateDB($log,$has, $mail, $imie, $id) {
    require "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0){
      echo "ERROR modyfikacji bazy";
    } else {
      $sql = "UPDATE uzytkownicy SET login='$log', haslo='$has', email='$mail', imie='$imie'
      WHERE Id='$id'";

      if ($polaczenie->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $polaczenie->error;
      }
    }
  }


?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="keywords" content="cat, cats, funny, kot, koty, kotki, smieszne">
  <meta name="author" content="Michał Ściubidło, Piotr Neumann">
  <title>Rejestracja</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="style_login1.css" type="text/css">
  <script type="text/javascript" src="timer.js">

  </script>

  <style>

  </style>

</head>

<body id="register" onload="timer();">
  <nav>
    <ul>
      <li class="home"><a href="index.php">Strona główna</a></li>
      <li class="register"><a class="active" href="register.php">Rejestracja</a></li>
      <li class="blog"><a href="blog.html">Blog</a></li>
      <li class="Więcej o sobie"><a href="additional_info.html">Więcej o sobie</a></li>
      <li class="menuFont"><a href="menu.html">Menu Font</a></li>
      <li class="loguj"><a href="login.php">Zaloguj</a></li>
      <?php
        if(isset($_SESSION['login']) && $_SESSION['login']==true) {
          echo "<li class='loguj'><a href='account.php'>Konto</a></li>";
          $isLogged = "Zmien dane";

          require "connect.php";

          $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

          if ($polaczenie->connect_errno!=0) {
            echo "ERROR";
          } else {
            echo "<br> ID".$_SESSION['id'];
            $id = $_SESSION['id'];
            $zapytanie = "SELECT * FROM uzytkownicy WHERE Id ='$id'";

            $result = $polaczenie->query($zapytanie);
            $row = $result->fetch_assoc();

            $login = $row["login"];
            $haslo = $row["haslo"];
            $email = $row["email"];
            $imie = $row["imie"];
            echo $login;
            if (isset($_POST['reg_login'])) {
              $walidacjaOk = true;
          		$_SESSION['e_error']="Zmiana przebiegla pomyslnie";
              $regLogin = $_POST['reg_login'];
              $regHaslo = $_POST['reg_haslo'];
              $regHaslo1 = $_POST['reg_haslo1'];
              $regEmail = $_POST['reg_email'];
              $regImie = $_POST['reg_imie'];
              if(!walidacja($regLogin, $regHaslo, $regHaslo1, $regEmail, $regImie)){
                $walidacjaOk = false;
              } else {
                updateDB($regLogin, $regHaslo, $regEmail, $regImie, $id);
              }
              echo $_SESSION['e_error'];
            }
          }

        } else {
          $login = "";
          $haslo = "";
          $email = "";
          $imie = "";
          $isLogged = "Zarejestruj się";

          if (isset($_POST['reg_login'])) {
            $walidacjaOk = true;
        		$_SESSION['e_error']="Rejestracja przebiegla pomyslnie mozesz sie zalogowac";

            $regLogin = $_POST['reg_login'];
            $regHaslo = $_POST['reg_haslo'];
            $regHaslo1 = $_POST['reg_haslo1'];
            $regEmail = $_POST['reg_email'];
            $regImie = $_POST['reg_imie'];

            if(!walidacja($regLogin, $regHaslo, $regHaslo1, $regEmail, $regImie)){
              $walidacjaOk = false;
            } else {
              insertDB($regLogin, $regHaslo, $regEmail, $regImie);
            }
            echo $_SESSION['e_error'];
          }
        }
       ?>
    </ul>
  </nav>

  <div id="login_container">
    <form action="register.php" method="post">
      Login
      <input type="text" class="field_log" value="<?php echo $login?>" name="reg_login">
      <br>
      Hasło
      <input type="password" class="field_log" value="<?php echo $haslo?>" name="reg_haslo">
      <br>
      Powtórz hasło
      <input type="password" class="field_log" value="<?php echo $haslo?>" name="reg_haslo1">
      <br>
      email
      <input type="email" class="field_log" value="<?php echo $email?>" name="reg_email">
      Imię
      <input type="text" class="field_log" value="<?php echo $imie?>" name="reg_imie">
      <br>
      <br>
      <input type="submit" name="" value="<?php echo $isLogged?>" id="button_submit">

    </form>
  </div>
<?php
  if(isset($walidacjaOk)) {
  echo $_SESSION['e_error'];
 }
?>

</body>
</html>
