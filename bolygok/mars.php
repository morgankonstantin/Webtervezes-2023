<!DOCTYPE html>
<html lang="hu">
<?php
    session_start();
?>
<head>
  <meta charset="UTF-8" />
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <title>A Naprendszer bolygói - Mars</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="../index.php">Naprendszerünk</a></li>
        <li><a href="merkur.php">Merkúr</a></li>
        <li><a href="venusz.php">Vénusz</a></li>
        <li><a href="fold.php">Föld</a></li>
        <li><a class="active" href="mars.php">Mars</a></li>
        <li><a href="jupiter.php">Jupiter</a></li>
        <li><a href="szaturnusz.php">Szaturnusz</a></li>
        <li><a href="uranusz.php">Uránusz</a></li>
        <li><a href="neptunusz.php">Neptunusz</a></li>
        <?php if (isset($_SESSION["user"])) { ?>
            <li class="right-menu"><a href="../kijelentkezes.php">Kijelentkezés</a></li>
            <li class="right-menu"><a href="../profil.php">Profilom</a></li>
            <li class="right-menu"><a href="../felhasznalok.php">Felhasználók</a></li>
        <?php } else { ?>
          <li class="right-menu"><a href="../belepes.php">Bejelentkezés</a></li>
          <li class="right-menu"><a href="../register.php">Regisztráció</a></li>
        <?php } ?>
      </ul>
    </nav>
  </header>
  <main>
    <h1><strong>Mars</strong></h1>
    <section class="attekintes">
      <h2>Áttekintés</h2>
      <img id="mars-img" class="bolygo-img" src="../img/mars1.png" alt="Mars Bolygó" />
      <p>
        A Mars a negyedik bolygó a Naptól számítva – egy poros, hideg,
        sivatagi világ nagyon vékony légkörrel. A Mars emellett dinamikus
        bolygó évszakokkal, sarki jégsapkákkal, kanyonokkal, kialudt
        vulkánokkal, és bizonyíték arra, hogy korábban még aktívabb volt.
      </p>
      <p>
        A Mars Naprendszerünk egyik legtöbbet feltárt teste, és ez az egyetlen
        bolygó, ahová rovereket küldtünk, hogy barangoljanak az idegen tájon.
      </p>
      <p>
        A NASA jelenleg két roverrel ( Curiosity és Perseverance ), egy
        leszállóval ( InSight ) és egy helikopterrel ( Ingenuity ) kutatja a
        Mars felszínét.
      </p>
    </section>
    <section class="tudnivalok">
      <h2>Amit érdemes tudni...</h2>
      <ul>
        <li>
          Ha a Nap olyan magas lenne, mint egy tipikus bejárati ajtó, a Föld
          akkora lenne, mint egy fillér, a Mars pedig körülbelül akkora, mint
          egy aszpirintabletta.
        </li>
        <li>
          A Mars a Napunk, egy csillag körül kering. A Mars a negyedik bolygó
          a Naptól, átlagosan 228 millió km (142 millió mérföld) vagy 1,52 AU
          távolságra.
        </li>
        <li>
          Egy nap a Marson valamivel több mint 24 órát vesz igénybe. A Mars
          687 földi nap alatt tesz meg egy teljes pályát a Nap körül (marsi
          idő szerint egy év).
        </li>
        <li>
          A Mars egy sziklás bolygó. Szilárd felületét vulkánok, becsapódások,
          szelek, kéregmozgás és kémiai reakciók változtatták meg.
        </li>
        <li>
          A Mars légköre vékony, amely főleg szén-dioxidból (CO 2 ), argonból
          (Ar), nitrogénből (N 2 ), valamint kis mennyiségű oxigénből és
          vízgőzből áll.
        </li>
        <li>A Marsnak két holdja van, a Phobos és a Deimos.</li>
        <li>A Mars körül nincsenek gyűrűk.</li>
        <li>
          Több küldetés is meglátogatta ezt a bolygót, átrepülőktől és
          keringőktől a felszínen lévő roverekig. Az első igazi Mars-misszió
          sikere a Mariner 4 volt 1965-ben.
        </li>
        <li>
          Jelenleg a Mars felszíne nem képes fenntartani az általunk ismert
          életet. A jelenlegi küldetések meghatározzák a Mars múltját és
          jövőbeli életképességét.
        </li>
        <li>
          A Mars Vörös Bolygó néven ismert, mivel a marsi talajban lévő
          vasásványok oxidálódnak vagy rozsdásodnak, amitől a talaj és a
          légkör vörösnek tűnik.
        </li>
      </ul>
    </section>
    <section>
      <h2>Pár fun fact</h2>
      <table>
        <thead>
          <tr>
            <th>Tulajdonság</th>
            <th>Mars</th>
            <th>Föld</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Távolsága a naptól (AU)</td>
            <td>1.52</td>
            <td>1.00</td>
          </tr>
          <tr>
            <td>Orbitális periódus (nap)</td>
            <td>687</td>
            <td>365.25</td>
          </tr>
          <tr>
            <td>Átmérő (km)</td>
            <td>6,779</td>
            <td>12,742</td>
          </tr>
          <tr>
            <td>Átlagos felszíni hőmérséklet (°C)</td>
            <td>-63</td>
            <td>14</td>
          </tr>
          <tr>
            <td>Holdjainak száma</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Légkör</td>
            <td>Szén-dioxid</td>
            <td>Atmoszféra ami főleg nitrogénból és oxigénből áll</td>
          </tr>
          <tr>
            <td>Mágneses mező</td>
            <td>Nagyon gyenge</td>
            <td>Erős és rendkívül kiterjedt</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>
  <footer>
    <p>Készítők: Konstantin Morgan</p>
    <p>
      email:
      <a href="mailto:Konstantin.Morgan@stud.u-szeged.hu">Konstantin.Morgan@stud.u-szeged.hu</a>
    </p>
    <p>Slezák Attila</p>
    <p>email: <a href="mailto:Slezak.Attila@stud.u-szeged.hu">Slezak.Attila@stud.u-szeged.hu</a></p>
  </footer>
</body>

</html>