<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <title>A Naprendszer bolygói - Jupiter</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="../index.php">Naprendszerünk</a></li>
        <li><a href="merkur.php">Merkúr</a></li>
        <li><a href="venusz.php">Vénusz</a></li>
        <li><a href="fold.php">Föld</a></li>
        <li><a href="mars.php">Mars</a></li>
        <li><a class="active" href="jupiter.php">Jupiter</a></li>
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
    <h1>Jupiter</h1>
    <section class="attekintes">
      <h2>Áttekintés</h2>
      <img class="bolygo-img" src="../img/jupiter.jpg" alt="Jupiter Bolygó" />
      <p>
        A Jupiternek hosszú történelme van a tudományos meglepetések terén – egészen 1610-ig
        visszanyúlóan, amikor is Galileo Galilei megtalálta az első holdakat a Földön túl.
        Ez a felfedezés megváltoztatta a világmindenség látásmódját.
      </p>
      <p>
        A Naptól számított ötödik helyen a Jupiter messze a legnagyobb bolygó a Naprendszerben –
        több mint kétszer olyan tömegű, mint az összes többi bolygó együttvéve.
      </p>
      <p>
        A Jupiter ismerős csíkjai és örvényei valójában hideg, szeles ammónia- és vízfelhők,
        amelyek hidrogén és hélium légkörében lebegnek. A Jupiter ikonikus Nagy Vörös Foltja
        a Földnél nagyobb óriásvihar, amely több száz éve tombol.
      </p>
      <p>
        Egy űrszonda – a NASA Juno orbitere – jelenleg ezt az óriási világot kutatja.
      </p>
    </section>
    <section class="tudnivalok">
      <h2>Amit érdemes tudni...</h2>
      <ul>
        <li>
          Tizenegy Föld fér el a Jupiter egyenlítőjén. Ha a Föld akkora lenne,
          mint egy szőlő, akkor a Jupiter akkora lenne, mint egy kosárlabda.
        </li>
        <li>
          A Jupiter körülbelül 778 millió kilométerre vagy 5,2 csillagászati egységre (CsE)
          kering a Napunktól (a Föld egy CsE távolságra van a Naptól).
        </li>
        <li>
          A Jupiter körülbelül 10 óránként egyszer megfordul, de körülbelül
          12 földi év kell ahhoz, hogy egy Nap körüli keringést teljesítsen.
        </li>
        <li>
          A Jupiter egy gázóriás, ezért nincs a Földhöz hasonló felszíne.
          Ha egyáltalán van szilárd belső magja, akkor valószínűleg csak akkora,
          mint a Föld.
        </li>
        <li>
          A Jupiter légköre nagyrészt hidrogénből (H2) és héliumból (He) áll.
          áll.
        </li>
        <li>A Jupiternek több mint 75 holdja van.</li>
        <li>
          1979-ben a Voyager küldetés felfedezte a Jupiter halvány gyűrűrendszerét.
          Naprendszerünkben mind a négy óriásbolygónak van gyűrűrendszere.
        </li>
        <li>
          Kilenc űrszonda látogatta meg a Jupitert. Heten elrepültek, ketten pedig
          megkerülték a gázóriást. A Juno, a legutóbbi, 2016-ban érkezett meg a Jupiterhez.
        </li>
        <li>
          A Jupiter nem támogatja az általunk ismert élet feltételeit. De a Jupiter egyes holdjainak
          kérge alatt óceánok vannak, amelyek támogathatják az életet.
        </li>
        <li>
          A Jupiter Nagy Vörös Foltja egy gigantikus vihar, amely körülbelül kétszer akkora,
          mint a Föld, és több mint egy évszázada tombol.
        </li>
      </ul>
    </section>
    <section>
      <h2>Pár fun fact</h2>
      <table>
        <thead>
          <tr>
            <th>Tulajdonság</th>
            <th>Jupiter</th>
            <th>Föld</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Távolsága a naptól (AU)</td>
            <td>5.20</td>
            <td>1.00</td>
          </tr>
          <tr>
            <td>Orbitális periódus (nap)</td>
            <td>4,333</td>
            <td>365.25</td>
          </tr>
          <tr>
            <td>Átmérő (km)</td>
            <td>139,820</td>
            <td>12,742</td>
          </tr>
          <tr>
            <td>Átlagos felszíni hőmérséklet (°C)</td>
            <td>-110</td>
            <td>14</td>
          </tr>
          <tr>
            <td>Holdjainak száma</td>
            <td>&gt;75</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Légkör</td>
            <td>Vastag, főleg héliumot és hidrogént, nyomokban vizet,<br />ammóniát, metánt és egyéb szénvegyületeket tartalmaz</td>
            <td>Főleg nitrogénból és oxigénből áll</td>
          </tr>
          <tr>
            <td>Mágneses mező</td>
            <td>A legerősebb és legkiterjedtebb</td>
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