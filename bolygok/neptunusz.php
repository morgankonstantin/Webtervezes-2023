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
    <title>A Naprendszer bolygói - Neptunusz</title>
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
                <li><a href="uranusz.php">Uránusz</a></li>
                <li><a class="active" href="neptunusz.php">Neptunusz</a></li>
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
        <h1>Neptunusz</h1>
        <section class="attekintes">
            <h2>Áttekintés</h2>
            <img class="bolygo-img" src="../img/neptunusz.jpg" alt="Neptunusz Bolygó" />
            <p>
                Sötét, hideg és szuperszonikus szelek által korbácsolt jégóriás, a Neptunusz a nyolcadik
                és legtávolabbi bolygó Naprendszerünkben.
            </p>
            <p>
                A Naptól több mint 30-szor távolabb mint a Föld, a Neptunusz az egyetlen bolygó a Naprendszerünkben,
                amely szabad szemmel nem látható, és az első, amelyet a matematika jósolt a felfedezése előtt.
                A Neptunusz 2011-ben tette meg első 165 éves pályáját 1846-os felfedezése óta.
            </p>
            <p>
                A NASA Voyager 2-je az egyetlen űrszonda, amely közelről meglátogatta a Neptunuszt.
                1989-ben repült el mellette a Naprendszerből kifelé menet.
            </p>
        </section>
        <section class="tudnivalok">
            <h2>Amit érdemes tudni...</h2>
            <ul>
                <li>
                    A Neptunusz körülbelül négyszer szélesebb, mint a Föld. Ha a Föld egy nagy alma lenne,
                    a Neptunusz akkora lenne, mint egy kosárlabda.
                </li>
                <li>
                    A Neptunusz a nyolcadik bolygó ami a Nap körül kering, a Naptól körülbelül
                    4,5 milliárd kilométerre.
                </li>
                <li>
                    A Neptunusznak körülbelül 16 órára van szüksége, hogy egyszer megforduljon tengelye körül
                    (egy neptunuszi nap), és körülbelül 165 földi évbe telik, hogy megkerülje a napot (egy neptunuszi év).
                </li>
                <li>
                    A Neptunusz egy jégóriás. Tömegének nagy része "jeges" anyagok – víz, metán és ammónia –
                    forró, sűrű folyadéka egy kis sziklás mag felett.
                </li>
                <li>
                    A Neptunusz légköre nagyrészt molekuláris hidrogénből, héliumból és metánból áll.
                </li>
                <li>
                    A Neptunusznak 14 ismert holdja van, amelyeket tengeri istenekről és nimfákról neveztek el
                    a görög mitológiából.
                </li>
                <li>
                    A Neptunusznak legalább öt fő gyűrűje és további négy gyűrűíve van, amelyek valószínűleg
                    egy közeli hold gravitációja következtében keletkező por- és törmelékcsomók.
                </li>
                <li>
                    A Voyager 2 az egyetlen űrszonda, amely meglátogatta a Neptunuszt. Egyetlen űrhajó sem
                    keringett e távoli bolygó körül, hogy hosszan és közelről tanulmányozhassa azt.
                </li>
                <li>
                    A Neptunusz nem támogatja az általunk ismert életet.
                </li>
                <li>
                    A Plútó törpebolygó elliptikus pályája miatt a Plútó néha közelebb van a Naphoz (és hozzánk),
                    mint a Neptunusz.
                </li>
            </ul>
        </section>
        <section>
            <h2>Pár fun fact</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tulajdonság</th>
                        <th>Neptunusz</th>
                        <th>Föld</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Távolsága a naptól (AU)</td>
                        <td>30.10</td>
                        <td>1.00</td>
                    </tr>
                    <tr>
                        <td>Orbitális periódus (nap)</td>
                        <td>60,190</td>
                        <td>365.25</td>
                    </tr>
                    <tr>
                        <td>Átmérő (km)</td>
                        <td>49,244</td>
                        <td>12,742</td>
                    </tr>
                    <tr>
                        <td>Átlagos felszíni hőmérséklet (°C)</td>
                        <td>-200</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>Holdjainak száma</td>
                        <td>14</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Légkör</td>
                        <td>Főleg hidrogénből és héliumból áll, de 2,5-3% metánt is tartalmaz</td>
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