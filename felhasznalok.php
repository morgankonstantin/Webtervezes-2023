<!DOCTYPE html>
<html lang="hu">
<?php
    session_start();
    include "kozos.php";
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
                <li><a class="active" href="index.php">Naprendszerünk</a></li>
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
                    <li class="right-menu"><a href="felhasznalok.php">Felhasználók</a></li>
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
                        <th>Profilkép</th>
                        <th>Név</th>
                        <th>Email</th>
                        <th>Telefonszám</th>
                        <th>Születési dátum</th>
                        <th>Cím</th>
                        <th id="table-admin">Admin jog</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $users = loadUsers();
                    foreach ($users as $user) {?>
                        <tr>
                            <td>
                                <?php
                                    if (!empty($user['img'])) {
                                        $url = $user['img'];
                                        echo "<a href=$url><img class='img-profil' src=$url alt=''></a>";
                                    }
                                ?>
                            </td>
                            <td><?=$user['nev']?></td>
                            <td><?=$user['email']?></td>
                            <td><?=$user['tel']?></td>
                            <td><?=$user['szul-datum']?></td>
                            <td><?=$user['irszam']?> <?=$user['varos']?>,<br /> <?=$user['utca']?></td>
                            <td><input class="admin-checkbox" type="checkbox" name="admin" value="<?=$user['id']?>" <?=$user['admin']?> /></td>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
            <input type="submit" id="submit-admin" value="Admin Jogok Mentése">
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
