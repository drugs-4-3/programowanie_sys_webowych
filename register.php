<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="keywords" content="cat, cats, funny, kot, koty, kotki, smieszne">
  <meta name="author" content="Michał Ściubidło, Piotr Neumann">
  <title>Rejestracja</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <script type="text/javascript" src="timer.js">

  </script>

  <style>
    .register_form
    {
      color: red;
    }

    h2 {
      color: green;
    }

  </style>

</head>

<body id="register" onload="timer();">
  <nav>
    <ul>
      <li class="home"><a href="index.html">Strona główna</a></li>
      <li class="register"><a class="active" href="register.html">Rejestracja</a></li>
      <li class="blog"><a href="blog.html">Blog</a></li>
      <li class="Więcej o sobie"><a href="additional_info.html">Więcej o sobie</a></li>
      <li class="menuFont"><a href="menu.html">Menu Font</a></li>
    </ul>
  </nav>


  <section>
    <h2 style="font-size: 40px" onload="write();">Rejestracja</h2>

    <form class="register_form" action="register.php" method="post" autocomplete="on">

      <label for="first_name">Imie</label><br>
      <input type="text" id="first_name" name="first_name" value="" autofocus>
      <br>
      <label for="number">Numerek</label><br>
      <input type="number" name="number" id="number" value="" autofocus>
      <br>

      <input type="submit" name="register" value="Zarejestruj się!">
    </form>
  </section>

  <div id="time">

  </div>

</body>
</html>



<?php

// stale:
define ('FOO', 'VERY_IMPORTANT_CONSTANT');

$first_name = null;
$number = null;

if (isset($_POST['first_name'])) {
  $first_name = $_POST['first_name'];
}
if (isset($_POST['number'])) {
  $number = $_POST['number'];
}

if (!is_null($first_name)) {
  var_dump($first_name);
}
echo '<br>';

if (!is_null($number)) {
  var_dump($number);
}
echo '<br>';

// konwertuje na inne typy, juz nie sa nullami wiec var_dump wypluje na powierzchnie
$number = (int) $number;
$first_name = intval($first_name);

if (!is_null($first_name)) {
  var_dump($first_name);
}
echo '<br>';
if (!is_null($number)) {
  var_dump($number);
}
echo '<br>';
echo FOO;

echo '<br>';
$number = $number + 3 * 4;
if ($number != 12) {
  echo $number;
}


$arr = array();
$arr[] = 'zero';
$arr[2] = 'dwa';
$arr['trzy'] = 'trzy';
$arr[] = 'cztery';

echo '<br>';
echo '<pre>';
var_dump($arr);
echo '</pre>';


for ($i = 5; $i < 10; $i++) {
  $arr[$i] = (string)$i;
}

echo '<br>';
echo '<pre>';
var_dump($arr);
echo '</pre>';

echo '<br>';
echo count($arr);
echo '<br>';
echo '<br>';

echo 'foreach<br>';
foreach ($arr as $ind => $val) {
  echo "arr[$ind] = $val";
  echo '<br>';
}


// current sie psuje przy indeksowaniu asocjacyjnym - nie wiadomo co jest next.
echo '<br>';
echo 'resetting';
echo '<br>';
echo current($arr);
echo '<br>';
next($arr);
var_dump(current($arr));
echo current($arr);
echo '<br>';
reset($arr);
echo current($arr);
echo '<br>';
