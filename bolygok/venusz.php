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
  <title>A Naprendszer bolygói - Vénusz</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="../index.php">Naprendszerünk</a></li>
        <li><a href="merkur.php">Merkúr</a></li>
        <li><a class="active" href="venusz.php">Vénusz</a></li>
        <li><a href="fold.php">Föld</a></li>
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
    <h1><strong>Vénusz</strong></h1>
    <section class="attekintes">
      <h2>Áttekintés</h2>
      <img class="bolygo-img" src="../img/venus.jpg" alt="Vénusz Bolygó" />
      <p>
        A Vénusz a Naptól számított második bolygó, és a Föld legközelebbi
        bolygószomszédja. Ez egyike a négy belső, földi (vagy sziklás)
        bolygónak, és gyakran nevezik a Föld ikerbolygójának, mert hasonló a
        mérete és a sűrűsége. Ezek azonban nem egypetéjű ikrek – gyökeres
        különbségek vannak a két világ között.
      </p>
      <p>
        A Vénusz vastag, mérgező atmoszférája szén-dioxiddal van teli, és
        állandóan vastag, sárgás kénsavfelhőkbe burkolják, amelyek megfogják a
        hőt, és elszabadult üvegházhatást okoznak. Naprendszerünk legforróbb
        bolygója, bár a Merkúr közelebb van a Naphoz. A Vénusz felszíni
        hőmérséklete körülbelül 900 Fahrenheit-fok (475 Celsius-fok) – elég
        meleg ahhoz, hogy megolvadjon az ólom. A felület rozsdás színű, és
        intenzíven ropogós hegyek és több ezer nagy vulkán borítja. A tudósok
        elképzelhetőnek tartják, hogy egyes vulkánok még mindig aktívak.
      </p>
      <p>
        A Vénusz felszínén zúzós légnyomás uralkodik – a Földének több mint
        90-szerese –, amely hasonló ahhoz a nyomáshoz, amely egy mérfölddel az
        óceán alatt a Földön tapasztalható.
      </p>
    </section>
    <section class="tudnivalok">
      <h2>Amit érdemes tudni...</h2>
      <ul>
        <li>
          A Vénuszt gyakran "Föld ikerpárjának" nevezik, mert méretük és
          szerkezetük hasonló, de a Vénusz rendkívüli felületi hővel és sűrű,
          mérgező légkörrel rendelkezik. Ha a Nap olyan magas lenne, mint egy
          tipikus bejárati ajtó, akkor a Föld és a Vénusz körülbelül egy
          nikkel nagyságú lenne.
        </li>
        <li>
          A Vénusz a második legközelebbi bolygó a Naphoz, mintegy 67 millió
          mérföldnyire (108 millió kilométer) kering.
        </li>
        <li>
          A Vénusz nagyon lassan forog a tengelye körül – egy nap a Vénuszon
          243 földi napig tart. A bolygó azonban gyorsabban kering a Nap
          körül, mint a Föld, így egy év a Vénuszon csak körülbelül 225 földi
          napot vesz igénybe, így egy vénuszi nap hosszabb, mint az éve!
        </li>
        <li>
          A Vénusz szilárd felszíne kupolaszerű vulkánokkal, hasadékokkal és
          hegyekkel borított, kiterjedt vulkáni síkságokkal és hatalmas,
          gerinces fennsíkokkal.
        </li>
        <li>
          A Vénusz átlagos felszíne kevesebb mint egymilliárd éves, és
          valószínűleg 150 millió éves is lehet – ami geológiai szempontból
          viszonylag fiatal. Ez egy nagy rejtély a tudósok számára – nem
          tudják pontosan, mi történt, ami miatt a Vénusz teljesen újjáéledt.
        </li>
        <li>
          A Vénusz vastag atmoszférája megfogja a hőt, és elszabadult
          üvegházhatást okoz – így Naprendszerünk legforróbb bolygója,
          amelynek felszíni hőmérséklete elég meleg ahhoz, hogy az ólom
          megolvadjon. Az üvegházhatás miatt a Vénusz nagyjából 390 °C-kal
          melegebb, mint az üvegházhatás nélkül.
        </li>
        <li>
          A Vénuszt állandóan vastag, mérgező kénsav felhők borítják, amelyek
          45-70 kilométeres magasságban indulnak. A felhők rohadt
          tojásszagúak!
        </li>
        <li>
          A Vénusz volt az első bolygó, amelyet űrhajó fedezett fel, és az
          űrkutatás történetének korai szakaszában intenzíven tanulmányozták.
          A Vénusz volt az első bolygó, amelynek felszínét a Földről űrszonda
          érte el. Az erős hőség azt jelenti, hogy a leszállók csak néhány
          órát éltek túl.
        </li>
        <li>
          A Vénusz az általunk ismert életnek valószínűtlen helye, de egyes
          tudósok azt feltételezik, hogy a mikrobák magasan a felhők között is
          előfordulhatnak, ahol hűvösebb és a nyomás hasonló a Föld
          felszínéhez. A foszfint, a mikrobiális élet lehetséges indikátorát
          figyelték meg a felhőkben.
        </li>
        <li>
          A Vénusz visszafelé forog a tengelye körül a Naprendszerünk legtöbb
          bolygójához képest. Ez azt jelenti, hogy a Nap nyugaton kel fel és
          keleten nyugszik, ellentétben azzal, amit a Földön látunk.
        </li>
      </ul>
    </section>
    <section>
      <h2>Pár fun fact</h2>
      <table>
        <thead>
          <tr>
            <th>Tulajdonság</th>
            <th>Vénusz</th>
            <th>Föld</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Távolsága a naptól (AU)</td>
            <td>0.72</td>
            <td>1.00</td>
          </tr>
          <tr>
            <td>Orbitális periódus (nap)</td>
            <td>225</td>
            <td>365.25</td>
          </tr>
          <tr>
            <td>Átmérő (km)</td>
            <td>12,104</td>
            <td>12,742</td>
          </tr>
          <tr>
            <td>Átlagos felszíni hőmérséklet (°C)</td>
            <td>462</td>
            <td>14</td>
          </tr>
          <tr>
            <td>Holdjainak száma</td>
            <td>0</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Légkör</td>
            <td>Atmoszféra ami főleg szén-dioxidból áll</td>
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
    <p>
      email:
      <a href="mailto:Konstantin.Morgan@stud.u-szeged.hu">Konstantin.Morgan@stud.u-szeged.hu</a>
    </p>
    <p>Slezák Attila</p>
    <p>
      email: <a href="mailto:Slezak.Attila@stud.u-szeged.hu">Slezak.Attila@stud.u-szeged.hu</a>
    </p>
  </footer>
</body>

</html>