<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <title>A Naprendszer bolygói - Regisztráció</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Naprendszerünk</a></li>
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
        <h1>Regisztráció</h1>
        <section class="urlap">
            <h3>Kérjük töltse ki az alábbi regisztrációs űrlapot!</h3>
            <form action="register.php" method="post" enctype="multipart/form-data">
                <div class="oszlop">
                    <input id="nev" name="nev" type="text" placeholder="Név" maxlength="50" required /><br />
                    <label for="nev">Név</label><br />
                    <input id="jelszo" name="jelszo" type="password" placeholder="Jelszó" maxlength="64" required /><br />
                    <label for="jelszo">Jelszó</label><br />
                    <input id="jelszoism" name="jelszoism" type="password" placeholder="Jelszó megerősítése" maxlength="64" required /><br />
                    <label for="jelszoism">Jelszó megerősítése</label><br />
                </div>
                <div class="oszlop">
                    <input id="email" name="email" type="email" placeholder="Email" maxlength="320" required /><br />
                    <label for="email">Email</label><br />
                    <input id="tel" name="tel" type="tel" placeholder="Telefonszám: +36301234567" maxlength="20" /><br />
                    <label for="tel">Telefonszám</label><br />
                    <input id="szul-datum" name="szul-datum" type="date" /><br />
                    <label for="szul-datum">Születési dátum</label><br />
                </div>
                <div>
                    <input id="irszam" name="irszam" type="text" placeholder="Irányítószám" maxlength="10" required /><br />
                    <label for="irszam">Irányítószám</label><br />
                    <input id="varos" name="varos" type="text" placeholder="Város" maxlength="40" required /><br />
                    <label for="varos">Város</label><br />
                    <input id="utca" name="utca" type="text" placeholder="Utca, házszám..." maxlength="40" required /><br />
                    <label for="utca">Utca, házszám...</label><br />
                    <fieldset id="kedvenc-bolygo">
                        <legend>Kedvenc bolygó:</legend>
                        <label for="kedvenc-merkur">Merkúr: </label> <input id="kedvenc-merkur" name="kedvenc" type="radio" value="merkur" />
                        <label for="kedvenc-venusz">Vénusz: </label> <input id="kedvenc-venusz" name="kedvenc" type="radio" value="venusz" /><br />
                        <label for="kedvenc-fold">Föld: </label> <input id="kedvenc-fold" name="kedvenc" type="radio" value="fold" checked />
                        <label for="kedvenc-mars">Mars: </label> <input id="kedvenc-mars" name="kedvenc" type="radio" value="mars" /><br />
                        <label for="kedvenc-jupiter">Jupiter: </label> <input id="kedvenc-jupiter" name="kedvenc" type="radio" value="jupiter" />
                        <label for="kedvenc-szaturnusz">Szaturnusz: </label> <input id="kedvenc-szaturnusz" name="kedvenc" type="radio" value="szaturnusz" /><br />
                        <label for="kedvenc-uranusz">Uránusz: </label> <input id="kedvenc-uranusz" name="kedvenc" type="radio" value="uranusz" />
                        <label for="kedvenc-neptunusz">Neptunusz: </label> <input id="kedvenc-neptunusz" name="kedvenc" type="radio" value="neptunusz" />
                    </fieldset>
                    <div id="urlap-gombok">
                        <input type="submit" value="Tovább" />
                        <input type="reset" value="Töröl" />
                    </div>
                </div>
            </form>
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