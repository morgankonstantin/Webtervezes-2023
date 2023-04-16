<?php
session_start();

include "kozos.php";
$fiokok = loadUsers("db/users.txt");

$uzenet = "";

if (isset($_POST["belepes"])) {
    if (!isset($_POST["email"]) || trim($_POST["email"]) === "" || !isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "") {
        $uzenet = "<strong>Hiba:</strong> Adj meg minden adatot!";
    } else {
        $email = $_POST["email"];
        $jelszo = $_POST["jelszo"];

        $uzenet = "Sikertelen belépés! A belépési adatok nem megfelelők!";

        foreach ($fiokok as $fiok) {
            if ($fiok["email"] === $email && password_verify($jelszo, $fiok["jelszo"])) {
                $uzenet = "Sikeres belépés!";
                $_SESSION["user"] = $fiok;
                header("Location: index.php");
            }
        }
    }
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
    <title>A Naprendszer bolygói - Bejelentkezés</title>
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
        <h1>Bejelentkezés</h1>
        <section class="urlap">
            <h3>Üdvözöljük</h3>
            <h4>Írja be az e-mail címét és jelszavát:</h4>
            <form action="belepes.php" method="POST" enctype="multipart/form-data">
                <div class="belepes">
                    <input id="email" name="email" type="email" placeholder="Email" maxlength="320"/><br />
                    <input id="jelszo" name="jelszo" type="password" placeholder="Jelszó" maxlength="64"/><br />
                    <input type="submit" name="belepes" value="Belépés" /> <br /><br />
                </div>
            </form>
            <?php echo $uzenet . "<br/>"; ?>
        </section>
    </main>
    <footer>
        <p>Készítők: Konstantin Morgan</p>
        <p>email: <a href="mailto:Konstantin.Morgan@stud.u-szeged.hu">Konstantin.Morgan@stud.u-szeged.hu</a></p>
        <p>Slezák Attila</p>
        <p>email: <a href="mailto:Slezak.Attila@stud.u-szeged.hu">Slezak.Attila@stud.u-szeged.hu</a></p>
    </footer>
</body>

</html>