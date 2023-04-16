<!DOCTYPE html>
<html lang="hu">
<?php
    session_start();
    include "kozos.php";
    $users = loadUsers();
    processForm();

    function processForm() {
        if (isFormSent()) {
            global $users;
            foreach ($users as &$user) {
                $found = 0;
                foreach ($_POST["admin"] as $value) {
                    if($user['id'] == $value) {
                        if(!$user['admin']) {
                            $user['admin'] = 'checked';
                            modifyUser($user);
                        }
                        $found = 1;
                    }
                }
                if (!$found && $user['admin']) {
                    $user['admin'] = '';
                    modifyUser($user);
                }
            }
        }
    }

    function isFormSent() {
        if (isset($_POST['submit']))
            return true;
        return false;
    }
?>
<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <title>A Naprendszerünk</title>
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
                    <li class="right-menu"><a href="profil.php">Profilom</a></li>
                    <li class="right-menu"><a class="active" href="felhasznalok.php">Felhasználók</a></li>
                <?php } else { ?>
                    <li class="right-menu"><a href="belepes.php">Bejelentkezés</a></li>
                    <li class="right-menu"><a href="register.php">Regisztráció</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <h1 class="naprendszer-cim"><strong>Felhasználók</strong></h1>
        <form action="felhasznalok.php" method="post" enctype="multipart/form-data">
            <table id="table-felhasznalok">
                <thead>
                    <tr>
                        <th id="felh-profilkep">Profilkép</th>
                        <th id="felh-nev">Név</th>
                        <th id="felh-email">Email</th>
                        <th id="felh-tel">Telefonszám</th>
                        <th id="felh-szul-datum">Születési dátum</th>
                        <th id="felh-cim">Cím</th>
                        <th id="felh-kedvenc">Kedvenc bolygó</th>
                        <th id="felh-admin">Admin jog</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    global $bolygoValueNameDict;
                    foreach ($users as $user) {?>
                        <tr>
                            <td headers="felh-profilkep">
                                <?php
                                    if (!empty($user['img'])) {
                                        $url = $user['img'];
                                        echo "<a href=$url><img class='img-profil' src=$url alt=''></a>";
                                    }
                                ?>
                            </td>
                            <td headers="felh-nev"><?=$user['nev']?></td>
                            <td headers="felh-email"><?=$user['email']?></td>
                            <td headers="felh-tel"><?=$user['tel']?></td>
                            <td headers="felh-szul-datum"><?=$user['szul-datum']?></td>
                            <td headers="felh-cim"><?=$user['irszam']?> <?=$user['varos']?>,<br /> <?=$user['utca']?></td>
                            <td headers="felh-kedvenc"><?=$bolygoValueNameDict[$user['kedvenc']]?></td>
                            <td headers="felh-admin"><input class="admin-checkbox" type="checkbox" name="admin[]" value="<?=$user['id']?>" <?=$user['admin']?> /></td>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
            <input type="submit" name="submit" id="submit-admin" value="Admin Jogok Mentése">
        </form>
    </main>
    <footer>
        <p>Készítők: Konstantin Morgan</p>
        <p>
            email:
            <a href="mailto:Konstantin.Morgan@stud.u-szeged.hu">Konstantin.Morgan@stud.u-szeged.hu</a>
        </p>
        <p>Slezák Attila</p>
        <p>
            email: <a href="mailto:h880402@stud.u-szeged.hu">h880402@stud.u-szeged.hu</a>
        </p>
    </footer>
</body>

</html>
