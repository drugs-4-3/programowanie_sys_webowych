<?php

 $email = $_POST["email"];

 echo $email;

 $server = $_SERVER['SERVER_ADDR'];
 $client = $_SERVER['REMOTE_ADDR'];

echo "<br>". "Server: ". $server;
echo "<br>". "Klient: ". $client;

// $t1 = '\'si\'ema';
// $t2 = "Siema";


$string = "abchej";

$result = preg_replace('/abc/i', 'def', $string);


if (strcmp($t1, $t2)) {
  echo "<br>"."Te słowa nie są takie same"."<br>";
}

$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';



      if (preg_match($pattern, $email, $match)) {
        echo "<br>Prawidlowy mail<br>";
      } else {
        echo "<br>Nie prawidlowy mail";
                die("DIE Prawidłowy mail");
      }




      echo "<br>Dzialanie po die";

 ?>
