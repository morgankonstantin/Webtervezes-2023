<!DOCTYPE html>
<html lang="hu">
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <title>A Naprendszer bolygói - Uránusz</title>
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
                <li><a href="szaturnusz.php">Szaturnusz</a></li>
                <li><a class="active" href="uranusz.php">Uránusz</a></li>
                <li><a href="neptunusz.php">Neptunusz</a></li>
                <?php if (isset($_SESSION["user"])) { ?>
                    <li id="nav-regisztracio"><a href="../kijelentkezes.php">Kijelentkezés</a></li>
                    <li id="belepes"><a href="../profil.php">Profilom</a></li>
                <?php } else { ?>
                    <li id="belepes"><a href="../belepes.php">Bejelentkezés</a></li>
                    <li id="nav-regisztracio"><a href="../register.php">Regisztráció</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Uránusz</h1>
        <section class="attekintes">
            <h2>Áttekintés</h2>
            <img class="bolygo-img" src="../img/uranusz.jpg" alt="Uránusz Bolygó" />
            <p>
                Az Uránusz a hetedik bolygó a Naptól számítva, és a harmadik legnagyobb átmérővel
                rendelkezik naprendszerünkben.
            </p>
            <p>
                Ez volt az első távcső segítségével talált bolygó, az Uránuszt 1781-ben fedezte fel
                William Herschel csillagász, bár eredetileg üstökösnek vagy csillagnak gondolta.
            </p>
            <p>
                Két évvel később az objektumot általánosan elfogadták új bolygóként, részben
                Johann Elert Bode csillagász megfigyelései miatt. Herschel sikertelenül próbálta
                III. György királyról Georgium Sidusnak nevezni felfedezését. Ehelyett a tudományos közösség
                elfogadta Bode javaslatát, hogy Uránusznak, az égbolt görög istenének nevezzék el,
                ahogy Bode javasolta.
            </p>
        </section>
        <section class="tudnivalok">
            <h2>Amit érdemes tudni...</h2>
            <ul>
                <li>
                    Az Uránusz körülbelül négyszer szélesebb, mint a Föld. Ha a Föld egy nagy alma lenne,
                    az Uránusz akkora lenne, mint egy kosárlabda.
                </li>
                <li>
                    Az Uránusz a hetedik bolygó ami a Napunk körül kering, a Naptól körülbelül
                    2,9 milliárd kilométerre.
                </li>
                <li>
                    Az Uránusznak körülbelül 17 órát vesz igénybe, hogy egyszer megforduljon tengelye körül,
                    és körülbelül 84 földi év, hogy befejezze a Nap körüli pályáját (egy uráni év).
                </li>
                <li>
                    Az Uránusz egy jégóriás. Tömegének nagy része "jeges" anyagok – víz, metán és ammónia –
                    forró, sűrű folyadéka egy kis sziklás mag felett.
                </li>
                <li>
                    Az Uránusz légköre többnyire molekuláris hidrogénből és atomi héliumból áll, kis mennyiségű metánnal.
                </li>
                <li>
                    Az Uránusznak 27 ismert holdja van, és ezeket William Shakespeare és Alexander Pope műveinek
                    szereplőiről nevezték el.
                </li>
                <li>
                    Az Uránusznak 13 ismert gyűrűje van. A belső gyűrűk keskenyek és sötétek,
                    a külső gyűrűk élénk színűek.
                </li>
                <li>
                    A Voyager 2 az egyetlen űrhajó, amely járt az Uránusz mellett. Azonban egyetlen űrhajó sem
                    keringett e távoli bolygó körül, hogy hosszan és közelről tanulmányozhassa azt.
                </li>
                <li>
                    Az Uránusz nem támogatja az általunk ismert életet.
                </li>
                <li>
                    A Vénuszhoz hasonlóan az Uránusz is keletről nyugatra forog. De az Uránusz egyedülálló abban,
                    hogy az oldalán forog.
                </li>
            </ul>
        </section>
        <section>
            <h2>Pár fun fact</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tulajdonság</th>
                        <th>Uránusz</th>
                        <th>Föld</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Távolsága a naptól (AU)</td>
                        <td>19.20</td>
                        <td>1.00</td>
                    </tr>
                    <tr>
                        <td>Orbitális periódus (nap)</td>
                        <td>30,687</td>
                        <td>365.25</td>
                    </tr>
                    <tr>
                        <td>Átmérő (km)</td>
                        <td>50,724</td>
                        <td>12,742</td>
                    </tr>
                    <tr>
                        <td>Átlagos felszíni hőmérséklet (°C)</td>
                        <td>-195</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>Holdjainak száma</td>
                        <td>27</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Légkör</td>
                        <td>Főként hidrogénből és kis mennyiségű héliumból valamint metánból áll</td>
                        <td>Főleg nitrogénból és oxigénből áll</td>
                    </tr>
                    <tr>
                        <td>Mágneses mező</td>
                        <td>Erős és rendkívül kiterjedt</td>
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