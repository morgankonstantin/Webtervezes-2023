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
  <title>A Naprendszer bolygói - Föld</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="../index.php">Naprendszerünk</a></li>
        <li><a href="merkur.php">Merkúr</a></li>
        <li><a href="venusz.php">Vénusz</a></li>
        <li><a class="active" href="fold.php">Föld</a></li>
        <li><a href="mars.php">Mars</a></li>
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
    <h1><strong>Föld</strong></h1>
    <section class="attekintes">
      <h2>Áttekintés</h2>
      <img class="bolygo-img" src="../img/fold.jpg" alt="Föld Bolygó" />
      <p>
        Szülőbolygónk a harmadik bolygó a Naptól számítva, és eddig az
        egyetlen olyan hely, ahol élőlények laknak.
      </p>
      <p>
        Míg a Föld csak az ötödik legnagyobb bolygó a Naprendszerben, ez az
        egyetlen olyan világ a naprendszerünkben, amelynek felszínén folyékony
        víz található. A közeli Vénusznál valamivel nagyobb, a Föld a
        legnagyobb a Naphoz legközelebb eső négy bolygó közül, amelyek
        mindegyike kőből és fémből készült.
      </p>
      <p>
        A Föld név legalább 1000 éves. A Föld kivételével minden bolygót görög
        és római istenekről és istennőkről neveztek el. A Föld név azonban
        germán szó, ami egyszerűen „földet” jelent.
      </p>
    </section>
    <section class="tudnivalok">
      <h2>Amit érdemes tudni...</h2>
      <ul>
        <li>
          Ha a Nap olyan magas lenne, mint egy tipikus bejárati ajtó, a Föld
          akkora lenne, mint egy nikkel.
        </li>
        <li>
          A Föld a Napunk, egy csillag körül kering. A Föld a harmadik bolygó
          a Naptól körülbelül 93 millió mérföldre (150 millió km).
        </li>
        <li>
          Egy nap a Földön 24 óra. A Föld körülbelül 365 nap alatt tesz meg
          egy teljes pályát a Nap körül (földi idő szerint egy év).
        </li>
        <li>
          A Föld egy sziklás bolygó, amelynek szilárd és dinamikus felszíne
          hegyekből, kanyonokból, síkságokból és egyebekből áll. Bolygónk nagy
          részét víz borítja.
        </li>
        <li>
          A Föld légkörének 78 százaléka nitrogén, 21 százalék oxigén és 1
          százalék egyéb összetevő – ez a tökéletes egyensúly a légzéshez és
          az élethez.
        </li>
        <li>A Földnek egy holdja van.</li>
        <li>A Földnek nincsenek gyűrűi.</li>
        <li>
          Sok keringő űrszonda felülről vizsgálja a Földet, mint egész
          rendszert – megfigyelve a légkört, az óceánt, a gleccsereket és a
          szilárd földet.
        </li>
        <li>
          A Föld tökéletes hely az általunk ismert élet számára.
        </li>
        <li>
          Légkörünk megvéd minket a beérkező meteoroidoktól, amelyek többsége felbomlik a légkörben, mielőtt a felszínre csapódhatna
        </li>
      </ul>
    </section>
    <section>
      <h2>Pár fun fact</h2>
      <table>
        <thead>
          <tr>
            <th>Tulajdonság</th>
            <th>Plútó</th>
            <th>Föld</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Távolsága a naptól (AU)</td>
            <td>39.48</td>
            <td>1.00</td>
          </tr>
          <tr>
            <td>Orbitális periódus (nap)</td>
            <td>90560 = 247.94 földi év</td>
            <td>365.25</td>
          </tr>
          <tr>
            <td>Átmérő (km)</td>
            <td>2,377</td>
            <td>12,742</td>
          </tr>
          <tr>
            <td>Átlagos felszíni hőmérséklet (°C)</td>
            <td>-229</td>
            <td>14</td>
          </tr>
          <tr>
            <td>Holdjainak száma</td>
            <td>5 ismert</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Légkör</td>
            <td>Nitrogén, metán</td>
            <td>Atmoszféra ami főleg nitrogénból és oxigénből áll</td>
          </tr>
          <tr>
            <td>Mágneses mező</td>
            <td>Nincs</td>
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
    <p>
      email: <a href="mailto:h880402@stud.u-szeged.hu">h880402@stud.u-szeged.hu</a>
    </p>
  </footer>
</body>

</html>