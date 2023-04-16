<?php
session_start();
include "kozos.php";

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}

$uzenet = "";

if (isset($_POST["mentes"])) {
    if (trim($_POST["jelszoism"]) !== trim($_POST["jelszo"])) {
        $uzenet = "<strong>Hiba:</strong> Nem egyezik meg a jelszó!";
    }
    foreach ($_SESSION as $key => $value) {
        if (isset($_POST[$key])) {
            if ($_POST[$key] !== $value) {
                $_SESSION[$key] = $_POST[$key];
            }
        }
    }
    modifyUser($_SESSION["user"]);
    header("Location: profil.php");
}

$fajlfeltoltes_hiba = "";
uploadProfilePicture($_SESSION["user"]["nev"]);

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
    <title>Profilom</title>
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
                    <li class="right-menu"><a href="kijelentkezes.php">Kijelentkezés</a></li>
                    <li class="right-menu"><a class="active" href="profil.php">Profilom</a></li>
                    <li class="right-menu"><a href="felhasznalok.php">Felhasználók</a></li>
                <?php } else { ?>
                    <li class="right-menu"><a class="active" href="belepes.php">Bejelentkezés</a></li>
                    <li class="right-menu"><a href="register.php">Regisztráció</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Profilom</h1>
        <?php
        // a profilkép elérési útvonalának eltárolása egy változóban

        $profilkep = "db/uploaded_img/default.png";      // alapértelmezett kép, amit akkor jelenítünk meg, ha valakinek nincs feltöltött profilképe
        $utvonal = "db/uploaded_img/" . $_SESSION["user"]["nev"]; // a kép neve a felhasználó nevével egyezik meg

        $kiterjesztesek = ["png", "jpg", "jpeg"];     // a lehetséges kiterjesztések, amivel egy profilkép rendelkezhet

        foreach ($kiterjesztesek as $kiterjesztes) {  // minden kiterjesztésre megnézzük, hogy létezik-e adott kiterjesztéssel profilképe a felhasználónak
            if (file_exists($utvonal . "." . $kiterjesztes)) {
                $profilkep = $utvonal . "." . $kiterjesztes;  // ha megtaláltuk a felhasználó profilképét, eltároljuk annak az elérési útvonalát egy változóban
            }
        }
        ?>
        <div class="img-form">
            <img src="<?php echo $profilkep; ?>" alt="Profilkép" height="300">
            <form action="profil.php" method="POST" enctype="multipart/form-data">
                <input type="file" id="file-upload" name="profilkep" accept="image/*" /> <br />
                <input type="submit" name="upload-img" value="Feltöltés" />
            </form>
        </div>
        <form action="profil.php" class="profil-table" method="post" enctype="multipart/form-data">
            <table border="1" style="display:flex;justify-content:center;align-items:center" class="profil-form">

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
                        <input type="password" id="jelszoism" class="jelszo" name="jelszoism" value="<?php echo htmlspecialchars($_SESSION["user"]["jelszo"]); ?>">
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
                <label for="kedvenc-merkur">Merkúr: </label> <input id="kedvenc-merkur" name="kedvenc" type="radio" value="merkur" <?= isKedvenc("merkur") ?> />
                <label for="kedvenc-venusz">Vénusz: </label> <input id="kedvenc-venusz" name="kedvenc" type="radio" value="venusz" <?= isKedvenc("venusz") ?> /><br />
                <label for="kedvenc-fold">Föld: </label> <input id="kedvenc-fold" name="kedvenc" type="radio" value="fold" <?= isKedvenc("fold") ?> />
                <label for="kedvenc-mars">Mars: </label> <input id="kedvenc-mars" name="kedvenc" type="radio" value="mars" <?= isKedvenc("mars") ?> /><br />
                <label for="kedvenc-jupiter">Jupiter: </label> <input id="kedvenc-jupiter" name="kedvenc" type="radio" value="jupiter" <?= isKedvenc("jupiter") ?> />
                <label for="kedvenc-szaturnusz">Szaturnusz: </label> <input id="kedvenc-szaturnusz" name="kedvenc" type="radio" value="szaturnusz" <?= isKedvenc("szaturnusz") ?> /><br />
                <label for="kedvenc-uranusz">Uránusz: </label> <input id="kedvenc-uranusz" name="kedvenc" type="radio" value="uranusz" <?= isKedvenc("uranusz") ?> />
                <label for="kedvenc-neptunusz">Neptunusz: </label> <input id="kedvenc-neptunusz" name="kedvenc" type="radio" value="neptunusz" <?= isKedvenc("neptunusz") ?> />
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