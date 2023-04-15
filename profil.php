<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <title>A Naprendszer bolygói - Profilom</title>
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
                    <li id="nav-regisztracio"><a href="kijelentkezes.php">Kijelentkezés</a></li>
                    <li id="belepes"><a class="active" href="profil.php">Profilom</a></li>
                <?php } else { ?>
                    <li id="belepes"><a class="active" href="belepes.php">Bejelentkezés</a></li>
                    <li id="nav-regisztracio"><a href="register.php">Regisztráció</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Profilom</h1>
        <table border="1" style="display:flex;justify-content:center;align-items:center" class="profil-form">
            <form action="profil.php" class="profil-table">
                <tr>
                    <th>Adatok</th>
                    <th>Publikus</th>
                </tr>
                <tr>
                    <td>
                        <label for="nev">Név</label><br>
                        <input type="text" id="nev" class="nev" name="nev" value="<?php echo htmlspecialchars($_SESSION["user"]["nev"]); ?>" required>
                    </td>
                    <td>
                        <input type="checkbox" name="pub_nev" id="pub_nev" <?= $_SESSION["user"]["pub_nev"] ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jelszo">Jelszó</label><br>
                        <input type="password" id="jelszo" class="jelszo" name="jelszo" value="<?php echo htmlspecialchars($_SESSION["user"]["jelszo"]); ?>">
                    </td>
                    <td>
                        <input type="hidden" name="jelszo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jelszoism">Jelszó megerősítése</label><br>
                        <input type="password" id="jelszo" class="jelszo" value="<?php echo htmlspecialchars($_SESSION["user"]["jelszo"]); ?>">
                    </td>
                    <td>
                        <input type="hidden" name="jelszoism">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email</label><br>
                        <input type="email" id="email" class="email" name="email" value="<?php echo htmlspecialchars($_SESSION["user"]["email"]); ?>">
                    </td>
                    <td>
                        <input type="checkbox" name="pub_email" id="pub_email" <?= $_SESSION["user"]["pub_email"] ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tel">Tel.:</label><br>
                        <input type="tel" id="tel" class="tel" name="tel" value="<?php echo htmlspecialchars($_SESSION["user"]["tel"]); ?>">
                    </td>
                    <td>
                        <input type="checkbox" name="pub_tel" id="pub_tel" <?= $_SESSION["user"]["pub_tel"] ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="szul-datum">Születési dátum</label><br>
                        <input type="date" name="szul-datum" id="szul-datum" class="szul-datum" value="<?php echo htmlspecialchars($_SESSION["user"]["szul-datum"]); ?>">
                    </td>
                    <td>
                        <input type="checkbox" name="pub_szul-datum" id="pub_szul-datum" <?= $_SESSION["user"]["pub_szul-datum"] ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="irszam">Irányítószám</label><br>
                        <input type="text" name="irszam" id="irszam" value="<?php echo htmlspecialchars($_SESSION["user"]["irszam"]); ?>">
                    </td>
                    <td>
                        <input type="checkbox" name="pub_irszam" id="pub_irszam" <?= $_SESSION["user"]["pub_irszam"] ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="varos">Város</label><br>
                        <input type="text" name="varos" id="varos" value="<?php echo htmlspecialchars($_SESSION["user"]["varos"]); ?>">
                    </td>
                    <td>
                        <input type="checkbox" name="pub_varos" id="pub_varos" <?= $_SESSION["user"]["pub_varos"] ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="utca">Utca, házszám</label><br>
                        <input type="text" name="utca" id="utca" value="<?php echo htmlspecialchars($_SESSION["user"]["utca"]); ?>">
                    </td>
                    <td>
                        <input type="checkbox" name="pub_utca" id="pub_utca" <?= $_SESSION["user"]["pub_utca"] ?>>
                    </td>
                </tr>
            </form>
        </table>
        <div class="kedvenc-bolygo">
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
                <div class="pub-kedvenc">
                    <input type="checkbox" name="pub_kedvenc" id="pub_kedvenc" <?= $_SESSION["user"]["pub_kedvenc"] ?>>
                    <label for="pub_kedvenc" id="pub-kedvenc-label">Publikus</label>
                </div>
            </fieldset>
        </div>
        <div class="mentes">
            <input type="submit" value="Mentés">
        </div>
    </main>
    <footer>
        <p>Készítők: Konstantin Morgan</p>
        <p>email: <a href="mailto:Konstantin.Morgan@stud.u-szeged.hu">Konstantin.Morgan@stud.u-szeged.hu</a></p>
        <p>Slezák Attila</p>
        <p>email: <a href="mailto:h880402@stud.u-szeged.hu">h880402@stud.u-szeged.hu</a></p>
    </footer>
</body>

</html>