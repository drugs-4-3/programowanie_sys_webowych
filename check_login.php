<?php
  session_start();
  require_once "connect.php";

  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

  if ($polaczenie->connect_errno!=0) {
    echo "ERROR";
  } else {

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $zapytanie = "SELECT * FROM Uzytkownicy WHERE login = '$login' AND haslo = '$haslo'";


    //echo "dziala".$login." ".$haslo;

    //echo "<br>".$zapytanie;

    $result = $polaczenie->query($zapytanie);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['login'] = true;
      $_SESSION['id'] = $row["Id"];

      echo "<br>". $row["login"];

      $result->free_result();

      header('Location: account.php');
    } else {
        echo "0 results";
    }


  }

?>
