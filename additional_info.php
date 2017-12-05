<?php

require_once('check_login.php');

echo '
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Dodatkowe informacje o użytkowniku:</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="js/my_functions.js"></script>
    <script type="text/javascript" src="js/function1.js"></script>
    <script type="text/javascript" src="js/function2.js"></script>
    <script type="text/javascript" src="js/function3.js"></script>
  </head>


  <body id="additional_info" onload="timer(); myFunctionHello();">
    <nav>
      <ul>
        <li class="home"><a href="index.php">Strona główna</a></li>
        <li class="register"><a href="register.html">Rejestracja</a></li>
        <li class="blog"><a href="blog.html">Blog</a></li>
        <li class="Więcej o sobie"><a class="active" href="additional_info.html">Więcej o sobie</a></li>
        <li class="menuFont"><a href="menu.html">Menu Font</a></li>
        <li><a href="logout.php">Wyloguj</a></li>
      </ul>
    </nav>

    <button type="button" class="buttons" onclick="myFunction();">Hello World</button>

    <button type="button" class="buttons" onclick="myFunctionPrompt();">Prompt</button>

    <button type="button" class="buttons" onclick="myFunctionAlert();">Alert</button>

    <button type="button" class="buttons" onclick="myFunctionListener();">Listener</button>

    <button type="button" id="btn" class="buttons">buttonListener</button>

    <div id="time"></div>
    <div id="miesiac"></div>
    <div id="hello"></div>
    <div id="zakres">
      <div id="buttons">
        <form class="zakres_wartosci">
          <input type="button" value="Wypełnij" class="buttons" onclick="myFunctionRandom();">
          <input type="text" value="" id="pole1">
          <input type="text" value="" id="pole2">
          <input type="button" value="Sprawdz" class="buttons" onclick="myFunctionZakres();">
        </form>
        <div id="wynik">Wynik: </div>
        <div id="parseI">sd</div>
        <div id="parseF">sd</div>
      </div>
    </div>
    <button type="button" class="buttons" onclick="domZad1();">createElement</button>
    <div id="container">
      <ol id="myList">
        <li>Herbata</li>
        <li>Ziemia</li>
        <li>Kawa</li>
        <li>Sok</li>
      </ol>
    </div>
    <div id="name"></div>
    <button type="button" class="buttons" onclick="addImage();">addImage</button>
    <div id="images">
      <img src="img\kot-chleb.gif" alt="kot_chleb" width="200px" height="200px">
    </div>
    <div id="numberImg"></div>
    <div id="numberLinks"></div>
    <div id="colorbg">
      <form>
        <input type="color" name="favcolor" value="#ff0000" id="colorValue">
      </form>
      <select id="selectFont" onchange="chFont(this);">
        <option>Georgia</option>
        <option>Palatino Linotype</option>
        <option>Book Antiqua</option>
        <option>Times New Roman</option>
        <option>Arial</option>
        <option>Helvetica</option>
        <option>Arial Black</option>
      </select>
    </div>
    <button type="button" class="buttons" onclick="chColor();">Zmien kolor</button>
  </body>
</html>

';
