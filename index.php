<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8" />
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <title>A Naprendszerünk</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <ul>
        <li><a class="active" href="index.php">Naprendszerünk</a></li>
        <li><a href="bolygok/merkur.php">Merkúr</a></li>
        <li><a href="bolygok/venusz.php">Vénusz</a></li>
        <li><a href="bolygok/fold.php">Föld</a></li>
        <li><a href="bolygok/mars.php">Mars</a></li>
        <li><a href="bolygok/jupiter.php">Jupiter</a></li>
        <li><a href="bolygok/szaturnusz.php">Szaturnusz</a></li>
        <li><a href="bolygok/uranusz.php">Uránusz</a></li>
        <li><a href="bolygok/neptunusz.php">Neptunusz</a></li>
        <?php if (isset($_SESSION["user"])) { ?>
          <li id="belepes"><a href="profil.php">Profilom</a></li>
          <li id="nav-regisztracio"><a href="kijelentkezes.php">Kijelentkezés</a></li>
        <?php } else { ?>
          <li id="belepes"><a href="belepes.php">Bejelentkezés</a></li>
          <li id="nav-regisztracio"><a href="register.php">Regisztráció</a></li>
        <?php } ?>
      </ul>
    </nav>
  </header>
  <main>
    <h1 class="naprendszer-cim"><strong>Naprendszerünk</strong></h1>
    <section class="attekintes">
      <h2>Áttekintés</h2>
      <img class="bolygo-img" src="img/themilkyway.png" alt="Tejútrendszer" />
      <p>
        Az univerzumban sok a miénkhez hasonló bolygórendszer található,
        amelyekben bolygók keringenek egy fogadócsillag körül.
        Bolygórendszerünket „naprendszernek” nevezik, mert a „szoláris” szót a
        csillagunkkal kapcsolatos dolgok leírására használjuk, a Nap latin
        „solis” szava után.
      </p>
      <p>
        Bolygórendszerünk a Tejút-galaxis külső spirális karjában található.
      </p>
      <p>
        Naprendszerünk csillagunkból, a Napból és mindenből áll, amelyet a
        gravitáció köt össze – a Merkúr, a Vénusz, a Föld, a Mars, a Jupiter,
        a Szaturnusz, az Uránusz és a Neptunusz bolygókból; törpebolygók, mint
        például a Plútó; több tucat hold; és milliónyi aszteroida, üstökös és
        meteoroid. Saját Naprendszerünkön túl több ezer bolygórendszert
        fedeztünk fel, amelyek a Tejútrendszerben más csillagok körül
        keringenek.
      </p>
      <p>Aláfestő zene a Naprendszerünk tanulmányozásához:</p>
      <audio controls>
        <source src="media/spacesound-7547.mp3" type="audio/mpeg" />
        Your browser does not support the audio element.
      </audio>
    </section>
    <section class="tudnivalok">
      <h2>Amit érdemes tudni...</h2>
      <ul>
        <li>
          Naprendszerünk egy csillagból, nyolc bolygóból és számtalan kisebb
          testből áll, mint például törpebolygók, aszteroidák és üstökösök.
        </li>
        <li>
          Naprendszerünk a Tejútrendszer középpontja körül kering körülbelül
          515 000 mérföld/órás (828 000 km/h) sebességgel. A galaxis négy
          spirálkarjának egyikében vagyunk.
        </li>
        <li>
          Naprendszerünknek körülbelül 230 millió évbe telik, hogy egy pályát
          megtegyünk a galaktikus középpont körül.
        </li>
        <li>
          A galaxisoknak három általános típusa van: elliptikus, spirális és
          szabálytalan. A Tejút egy spirálgalaxis.
        </li>
        <li>
          Naprendszerünk az űr régiója. Nincs hangulata. De sok világot
          tartalmaz – köztük a Földet is – sokféle légkörrel.
        </li>
        <li>
          Naprendszerünk bolygói – sőt egyes aszteroidák is – több mint 200
          holdat tartanak a pályájukon.
        </li>
        <li>
          A négy óriásbolygónak – és legalább egy aszteroidának – gyűrűi
          vannak. Egyik sem olyan látványos, mint a Szaturnusz gyönyörű
          gyűrűi.
        </li>
        <li>
          Több mint 300 robot űrszonda kutatott fel a Föld pályáján túli
          célpontokat, köztük 24 amerikai űrhajós, akik a Földről a Holdra
          utaztak.
        </li>
        <li>
          Naprendszerünk az egyetlen, amelyről ismert, hogy támogatja az
          életet. Eddig csak a földi életről tudunk, de mindenhol többet
          keresünk, ahol csak lehet.
        </li>
        <li>
          A NASA Voyager 1 és Voyager 2 az egyetlen űrszonda, amely elhagyta
          naprendszerünket. Három másik űrszonda – a Pioneer 10, a Pioneer 11
          és a New Horizons – végül eléri a csillagközi űrt.
        </li>
      </ul>
    </section>
    <section>
      <h2>Pár fun fact</h2>
      <table class="galaxis-tablazat">
        <thead>
          <tr>
            <th>Bolygó</th>
            <th>Átmérő</th>
            <th>Átlagos távolság a Napról</th>
            <th>Orbit periódus</th>
            <th>Rotációs periódus</th>
            <th>Átlagos hőmérséklet</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Merkúr</td>
            <td>4 880 km</td>
            <td>57 910 000 km</td>
            <td>88 földi nap</td>
            <td>58 földi nap</td>
            <td>166 °C</td>
          </tr>
          <tr>
            <td>Vénusz</td>
            <td>12 104 km</td>
            <td>108 200 000 km</td>
            <td>225 földi nap</td>
            <td>243 földi nap</td>
            <td>464 °C</td>
          </tr>
          <tr>
            <td>Föld</td>
            <td>12 742 km</td>
            <td>149 600 000 km</td>
            <td>365 földi nap</td>
            <td>24 földi óra</td>
            <td>15 °C</td>
          </tr>
          <tr>
            <td>Mars</td>
            <td>6 779 km</td>
            <td>227 940 000 km</td>
            <td>687 földi nap</td>
            <td>24,6 földi óra</td>
            <td>-63 °C</td>
          </tr>
          <tr>
            <td>Jupiter</td>
            <td>139 822 km</td>
            <td>778 330 000 km</td>
            <td>4 333 földi nap</td>
            <td>10 földi óra</td>
            <td>-145 °C</td>
          </tr>
          <tr>
            <td>Szaturnusz</td>
            <td>116 460 km</td>
            <td>1 426 670 000 km</td>
            <td>10 759 földi nap</td>
            <td>11 földi óra</td>
            <td>-178 °C</td>
          </tr>
          <tr>
            <td>Uranusz</td>
            <td>50 724 km</td>
            <td>2 870 990 000 km</td>
            <td>30 687 földi nap</td>
            <td>17 földi óra</td>
            <td>-216 °C</td>
          </tr>
          <tr>
            <td>Neptunusz</td>
            <td>49 244 km</td>
            <td>4 498 250 000 km</td>
            <td>60 190 földi nap</td>
            <td>16,1 földi óra</td>
            <td>-214 °C</td>
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
    <p>
      email: <a href="mailto:h880402@stud.u-szeged.hu">h880402@stud.u-szeged.hu</a>
    </p>
  </footer>
</body>

</html>