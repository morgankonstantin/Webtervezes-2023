<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8" />
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <title>A Naprendszer bolygói - Merkúr</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="../index.php">Naprendszerünk</a></li>
        <li><a class="active" href="merkur.php">Merkúr</a></li>
        <li><a href="venusz.php">Vénusz</a></li>
        <li><a href="fold.php">Föld</a></li>
        <li><a href="mars.php">Mars</a></li>
        <li><a href="jupiter.php">Jupiter</a></li>
        <li><a href="szaturnusz.php">Szaturnusz</a></li>
        <li><a href="uranusz.php">Uránusz</a></li>
        <li><a href="neptunusz.php">Neptunusz</a></li>
        <?php if (isset($_SESSION["user"])) { ?>
          <li id="belepes"><a href="../profil.php">Profilom</a></li>
          <li id="nav-regisztracio"><a href="../kijelentkezes.php">Kijelentkezés</a></li>
        <?php } else { ?>
          <li id="belepes"><a href="../belepes.php">Bejelentkezés</a></li>
          <li id="nav-regisztracio"><a href="../register.php">Regisztráció</a></li>
        <?php } ?>
      </ul>
    </nav>
  </header>
  <main>
    <h1><strong>Merkúr</strong></h1>
    <section class="attekintes">
      <h2>Áttekintés</h2>
      <img id="merkur-img" class="bolygo-img" src="../img/merkur.jpg" alt="Merkúr Bolygó" />
      <p>
        Naprendszerünk legkisebb és a Naphoz legközelebb eső bolygója, a
        Merkúr csak valamivel nagyobb, mint a Föld Holdja.
      </p>
      <p>
        A Merkúr felszínéről a Nap több mint háromszor akkorának tűnne, mint a
        Földről nézve, a napfény pedig hétszer fényesebb lenne. Annak
        ellenére, hogy közel van a Naphoz, a Merkúr nem a legforróbb bolygó a
        Naprendszerünkben – ez a cím a közeli Vénuszhoz tartozik, köszönhetően
        sűrű légkörének.
      </p>
      <p>
        A Merkúr elliptikus – tojás alakú – pályája és lassú forgása miatt úgy
        tűnik, hogy a Nap a bolygó felszínének bizonyos részeiről rövid időre
        felkel, lenyugszik, majd ismét felkel. Ugyanez történik fordítva
        naplementekor
      </p>
    </section>
    <section class="tudnivalok">
      <h2>Amit érdemes tudni...</h2>
      <ul>
        <li>
          A Merkúr Naprendszerünk legkisebb bolygója – csak valamivel nagyobb,
          mint a Föld Holdja.
        </li>
        <li>A Merkúr az a bolygó, amely a legközelebb kering a Naphoz.</li>
        <li>
          A Merkúr Naprendszerünk leggyorsabb bolygója – közel 47 kilométer/s
          sebességgel halad át az űrben. Minél közelebb van egy bolygó a
          Naphoz, annál gyorsabban halad. Mivel a Merkúr a leggyorsabb bolygó,
          és a legrövidebb a Nap körüli távolsága, ezért a Naprendszerünk
          összes bolygója közül neki van a legrövidebb éve – 88 nap.
        </li>
        <li>
          A Merkúr egy sziklás bolygó, más néven földi bolygó. A Merkúrnak
          szilárd, kráteres felülete van, hasonlóan a Föld holdjához.
        </li>
        <li>
          A Merkúr vékony légköre vagy exoszférája főleg oxigénből (O2),
          nátriumból (Na), hidrogénből (H2), héliumból (He) és káliumból (K)
          áll.
        </li>
        <li>A Merkúrnak nincsenek holdjai.</li>
        <li>A Merkúr körül nincsenek gyűrűk.</li>
        <li>
          Nem valószínű, hogy az általunk ismert élet a Merkúron túlélhetne a
          napsugárzás és a szélsőséges hőmérséklet miatt.
        </li>
        <li>
          A Merkúr felszínén, a Naphoz legközelebb eső közelében állva
          csillagunk több mint háromszor nagyobbnak tűnik, mint a Földön.
        </li>
        <li>
          A NASA két küldetése tárta fel a Merkúrt: a Mariner 10 repült el
          először a Merkúr mellett, és a MESSENGER volt az első, aki
          keringett. Az ESA BepiColombo a Merkúr felé tart
        </li>
      </ul>
    </section>
    <section>
      <h2>Pár fun fact</h2>
      <table>
        <thead>
          <tr>
            <th>Tulajdonság</th>
            <th>Merkúr</th>
            <th>Föld</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Távolsága a naptól (AU)</td>
            <td>0.39</td>
            <td>1.00</td>
          </tr>
          <tr>
            <td>Orbitális periódus (nap)</td>
            <td>88</td>
            <td>365.25</td>
          </tr>
          <tr>
            <td>Átmérő (km)</td>
            <td>4,880</td>
            <td>12,742</td>
          </tr>
          <tr>
            <td>Átlagos felszíni hőmérséklet (°C)</td>
            <td>167</td>
            <td>14</td>
          </tr>
          <tr>
            <td>Holdjainak száma</td>
            <td>0</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Légkör</td>
            <td>Vékony exoszférája főleg héliumból és hidrogénből áll</td>
            <td>Atmoszféra ami főleg nitrogénból és oxigénből áll</td>
          </tr>
          <tr>
            <td>Mágneses mező</td>
            <td>Gyenge, részben kiterjedt</td>
            <td>Erős és rendkívül kiterjedt</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>
  <footer>
    <p>Készítők: Konstantin Morgan</p>
    <p>email: <a href="mailto:Konstantin.Morgan@stud.u-szeged.hu">Konstantin.Morgan@stud.u-szeged.hu</a></p>
    <p>Slezák Attila</p>
    <p>email: <a href="mailto:h880402@stud.u-szeged.hu">h880402@stud.u-szeged.hu</a></p>
  </footer>
</body>

</html>