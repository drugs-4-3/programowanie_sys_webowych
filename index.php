<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="cat, cats, funny, kot, koty, kotki, smieszne">
  <meta name="author" content="Michał Ściubidło, Piotr Neumann">
  <title>Śmieszne kotki</title>
  <link rel="stylesheet" href="style.css" type="text/css">


</head>


<body id="index">
  <nav>
    <ul>
      <li class="home"><a class="active" href="index.php">Strona główna</a></li>
      <li class="register"><a href="register.php">Rejestracja</a></li>
      <li class="blog"><a href="blog.html">Blog</a></li>
      <li class="więcej o sobie"><a href="additional_info.html">Więcej o sobie</a></li>
      <li class="menuFont"><a href="menu.html">Menu Font</a></li>
      <li class="loguj"><a href="login.php">Zaloguj</a></li>
      <?php
        if(isset($_SESSION['login']) && $_SESSION['login']==true) {
          echo "<li class='loguj'><a href='account.php'>Konto</a></li>";
        }
       ?>
    </ul>
  </nav>




  <div class="rounded">
    <h1>Witaj na stronie Śmieszne Kotki</h1>
  </div>
  <h4><em>&quot;Świat pełen jest zła, zimna i bólu. Na szczęście są śmieszne kotki&quot;</em> ~ nieznany pisarz</h4>
  <div class="mydiv">

  </div>
  <hr>
  <article>
    <h2>Słowem wstępu</h2>
    <section class="to">
      <h2>Troche o nas</h2>
      <details>
        <summary>
          <strong>O czym jest ta strona?</strong>
        </summary>
        <p>Ta strona jest o śmiesznych <mark>kotkach</mark>. Nie ukrywajmy - wszyscy je kochamy.</p>
      </details>
      <details>
        <summary>
          <strong>Dlaczego ją robimy?</strong>
        </summary>
        <p>Ponieważ chcemy zaliczyć przedmiot Programowanie Systemów Webowych. No i 4fun oczywiście.</p>
      </details>


      <details>
        <summary>
          <strong>Skąd w nas miłość do <mark>kotów?</mark></strong>
        </summary>
        <p>Powodów jest z pewnością kilka:</p>
        <ul>
          <li>Są mięciutkie i puchate</li>
          <li>Ładnie mruczą gdy się je drapie w odpowiednim miejscu</li>
          <li>Zachowują się jakby były żartem z ewolucji</li>
          <li>
            Potrafią:
            <ul>
              <li>Rozśmieszyć</li>
              <li>Pocieszyć</li>
              <li>Leczyć chore części ciała kładąc się na nich</li>
              <li>Zagrzać klawisze do klawiatury gdy chcemy zabrać się do pracy w sposób analogiczny do powyższego</li>
            </ul>
          </li>
        </ul>
      </details>


    </section>
  </article>

  <hr>
  <article>
    <h2>Lista śmiesznych kotów</h2>
    <section class="to">
      <h2>Jest troche skromna, ale będzie się powiększać...</h2>
      <ol>
        <li>
          <a href="img/kot-chleb.gif">
            <img src="img/kot-chleb.gif" alt="chlebokot">
          </a>
          <p>kotek z chlebem zamiast głowy</p>
          <a href="img/kot-chleb.gif" download>Pobierz!</a>
        </li>
        <li>
          <a href="img/kot-szok.jpg">
            <img src="img/kot-szok.jpg" alt="zszokowany kot" height="300" width="400">
          </a>
          <p>Tak wyglądam kiedy robie sobie selie</p>
          <a href="img/kot-szok.jpg" download>Pobierz</a>
        </li>
      </ol>
    </section>
  </article>

  <hr>
  <article>
    <h2>Formularz</h2>
    <section>
      <h4><a id="Formularz">Wypełnij formularz</a></h4>
      <form>
        <Label>Imie</Label>
        <input type="text">
        <Label>Nazwisko</Label>
        <input type="text">
        <br>
        <Label>Opcje</Label>
        <select>
          <option value="1"> Opcja 1</option>
          <option value="2"> Opcja 2</option>
          <option value="3"> Opcja 3</option>
        </select>
        <br>
        <Label>Opowiedz coś o sobie:</Label>
        <textarea name="Describe" maxlength="200"></textarea>
        <br>
        <input type="checkbox">czarny
        <input type="checkbox">bialy
        <input type="checkbox">czerwony
        <br>
        Plec<input type="radio" name="plec" value="male">Mężczyzna
        <input type="radio" name="plec" value="famale">Kobieta
        <br>
        <input type="submit" name="Wyślij" value="Wyślij">
        <input type="reset" name="reset" value="reset">
      </form>

    </section>
  </article>
  <hr>
  <article>
    <h2><a id="2"></a>O Kocie</h2>
    <section>
      <table class="table1">
        <tr>
          <th colspan="3">
            Kot domowy
          </th>
        </tr>

        <tr>
          <td colspan="3">
            Kot domowy (Felis catus, również Felis silvestris catus lub Felis (silvestris) domesticus) – udomowiony gatunek ssaka z rzędu drapieżnych z rodziny kotowatych. Koty zostały udomowione około 9500 lat temu i są obecnie najpopularniejszymi zwierzętami domowymi na świecie.
          </td>
        </tr>

        <tr>
          <td>
            <h3>Wiek Kota:</h3> Koty żyjące na wolności dożywają średnio do 8 lat, natomiast koty trzymane w domu osiągają wiek do 20 lat. Na długość życia wpływa szereg czynników, takich jak: płeć, styl życia czy zwyczaje. Najdłużej żyjącym kotem według Księgi rekordów Guinnessa była kotka imieniem Creme Puff (1967–2005), która przeżyła 38 lat i 3 dni.
          </td>
          <td>
            <h3>Historia:</h3>Przodkiem kota domowego jest kot nubijski – według poglądów większości współczesnych naukowców różnice pomiędzy kotem domowym i nubijskim są tak niewielkie, że należą one do tego samego podgatunku. Istnieją rozbieżności w kwestii daty udomowienia kota. Większość źródeł sugeruje lata 4000–3700 p.n.e., a miejscem, w którym miało do tego dojść, była Nubia
          </td>

          <td>
            Badania prowadzone przez naukowców z University of Illinois at Urbana-Champaign z użyciem nadajników radiowych pozwoliły stwierdzić jak koty mieszkające z ludźmi i zdziczałe zachowują się w terenie. Stwierdzono, że
            <table class="table4">
              <tr>
                <td>cecha</td> <td>kot mieszkający z ludźmi</td> <td> kot zdziczały</td>
              </tr>

              <tr>
                <td>część czasu poświęcona na wypoczynek</td> <td>80%</td> <td>62%</td>
              </tr>

              <tr>
                <td>część czasu poświęcona na małą aktywność (higiena)</td> <td>17%</td> <td>24%</td>
              </tr>

              <tr>
                <td>część czasu poświęcona na większą aktywność (polowanie)</td> <td>3%</td> <td>14%</td>
              </tr>

              <tr>
                <td>obszar wędrówek</td> <td>30,3 km²</td> <td>5,5 km²</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

    </section>
  </article>

  <hr>

  <div id="footer">
    <table class="table2">
      <tr>
        <td>
          <a href="https://www.youtube.com/watch?v=zcGOoDThC1E" target="blank">Film - Śmieszne koty 1</a>
        </td>
        <td>
          <a href="https://www.youtube.com/watch?v=fxlobb4QaoI" target="blank">Film - Śmieszne koty 2</a>
        </td>
        <td>
          <a href="https://www.youtube.com/watch?v=nGJ_-OpvolI" target="blank">Film - Śmieszne koty 3</a>
        </td>
        <td>
          <a href="https://www.youtube.com/watch?v=sqQVLR5ifns" target="blank">Film - Śmieszne koty 4</a>
        </td>
        <td>
          <a href="additional_info.html">Powiedz więcej o sobie</a>
        </td>
      </tr>
      <tr>
        <td colspan="5"><a href="mailto:jan_kowalski@example.pl">Wyślij wiadomość</a></td>
      </tr>
      <tr>
        <td colspan="5">Śmieszne koty! &copy; Wszelkie prawa zastrzeżone</td>
      </tr>

    </table>
  </div>


</body>
</html>
