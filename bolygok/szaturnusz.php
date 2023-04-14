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
    <title>A Naprendszer bolygói - Szaturnusz</title>
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
                <li><a href="jupiter.php">Jupiter</a></li>
                <li><a class="active" href="szaturnusz.php">Szaturnusz</a></li>
                <li><a href="uranusz.php">Uránusz</a></li>
                <li><a href="neptunusz.php">Neptunusz</a></li>
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
        <h1>Szaturnusz</h1>
        <section class="attekintes">
            <h2>Áttekintés</h2>
            <img class="bolygo-img" src="../img/szaturnusz.jpg" alt="Szaturnusz Bolygó" />
            <p>
                A Szaturnusz a hatodik bolygó a Naptól számítva, és a második legnagyobb bolygó
                Naprendszerünkben.
            </p>
            <p>
                A több ezer gyönyörű gyűrűvel díszített Szaturnusz egyedülálló a bolygók között.
                Nem ez az egyetlen bolygó, amelynek gyűrűi vannak – jég- és szikladarabokból –,
                de egyik sem olyan látványos vagy bonyolult, mint a Szaturnuszé.
            </p>
            <p>
                A Jupiter másik gázóriásához hasonlóan a Szaturnusz is egy hatalmas golyó,
                amely többnyire hidrogénből és héliumból áll.
            </p>
        </section>
        <section class="tudnivalok">
            <h2>Amit érdemes tudni...</h2>
            <ul>
                <li>
                    Kilenc Föld egymás mellett majdnem átfogná a Szaturnusz átmérőjét.
                    Ez nem tartalmazza a Szaturnusz gyűrűit.
                </li>
                <li>
                    A Szaturnusz a hatodik bolygó a Napunktól (csillagtól) számítva,
                    és körülbelül 1,4 milliárd kilométerre kering a Naptól.
                </li>
                <li>
                    A Szaturnusznak körülbelül 10,7 órát vesz igénybe (senki sem tudja pontosan),
                    hogy egyszer megforduljon a tengelye körül – ez a Szaturnusz egy „napja” –,
                    és 29 földi év kell ahhoz, hogy megkerülje a Napot.
                </li>
                <li>
                    A Szaturnusz gáz-óriásbolygó, ezért nincs olyan szilárd felszíne, mint a Földnek.
                    De lehet, hogy valahol szilárd magja van.
                </li>
                <li>
                    A Szaturnusz légköre nagyrészt hidrogénből (H2) és héliumból (He) áll.
                </li>
                <li>
                    A Szaturnusznak 53 ismert holdja van, és további 29 hold várja
                    felfedezésük megerősítését – ez összesen 82 hold.
                </li>
                <li>
                    A Szaturnusznak van a leglátványosabb gyűrűrendszere, hét gyűrűvel
                    és közöttük számos rés és felosztás van.
                </li>
                <li>
                    Kevés küldetés látogatta meg a Saturnuszt: a Pioneer 11 és a Voyagers 1 és 2
                    repült el mellette; De a Cassini 2004 és 2017 között 294 alkalommal keringett
                    a Szaturnusz körül.
                </li>
                <li>
                    A Szaturnusz nem tudja fenntartani az általunk ismert életet, de a Szaturnusz
                    egyes holdjain olyanok a feltételek, amelyek támogathatják az életet.
                </li>
                <li>
                    Körülbelül két tonna a Szaturnusz tömegéből a Földről származik: a Cassini űrszondát
                    szándékosan elpárologtatták a Szaturnusz légkörében 2017-ben.
                </li>
            </ul>
        </section>
        <section>
            <h2>Pár fun fact</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tulajdonság</th>
                        <th>Szaturnusz</th>
                        <th>Föld</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Távolsága a naptól (AU)</td>
                        <td>9.58</td>
                        <td>1.00</td>
                    </tr>
                    <tr>
                        <td>Orbitális periódus (nap)</td>
                        <td>10,759</td>
                        <td>365.25</td>
                    </tr>
                    <tr>
                        <td>Átmérő (km)</td>
                        <td>116,460</td>
                        <td>12,742</td>
                    </tr>
                    <tr>
                        <td>Átlagos felszíni hőmérséklet (°C)</td>
                        <td>-140</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>Holdjainak száma</td>
                        <td>&gt;53 (+29?)</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Légkör</td>
                        <td>Vastag, főleg hidrogénből és héliumból áll</td>
                        <td>Főleg nitrogénból és oxigénből áll</td>
                    </tr>
                    <tr>
                        <td>Mágneses mező</td>
                        <td>A Jupiter után a legerősebb és legkiterjedtebb</td>
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