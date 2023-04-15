<!DOCTYPE html>
<html lang="hu">

<?php
    session_start();
    include 'kozos.php';
    $errors = [];
    $errorInput = "hibas-input";
    processForm();

    function processForm() {
        if (isFormSent()) {
            checkNev();
            checkJelszo();
            checkEmail();
            checkTel();
            checkSzulDatum();
            checkIrszam();
            checkVaros();
            checkUtca();
            checkKedvenc();
            checkIfPasswordsAreEqual();
            global $errors;
            if (count($errors) == 0) {
                saveUser(createUser($_POST));
                $_SESSION['user'] = 1;
                header("Location: index.php");
            }
        }
    }

    function isFormSent() {
        if (isset($_POST['submit']))
            return true;
        return false;
    }

    function createUser($post) {
        $user = $post;
        unset($user['jelszoism']);
        unset($user['submit']);
        foreach (array_keys($user) as $key) {
            if ($key != 'jelszo')
                $user['pub_' . $key] = "checked";
            else
                $user['jelszo'] = createPasswordHash($user['jelszo']);
        }
        $user['img'] = '';
        $user['id'] = findNextID();
        $user['admin'] = '';
        return $user;
    }

    function checkNev() {
        global $errors;
        if (strlen($_POST['nev']) < 2)
            $errors['nev'] = "A név legalább 2 karakter legyen!";
        if (!preg_match('/^[A-Za-záéíöőüűÁÉÍÖÜŐŰ .]+$/', $_POST['nev']))
            $errors['nev'] = "A név csak betűkből állhat!";
    }

    function checkJelszo() {
        if (strlen($_POST['jelszo']) < 6) {
            global $errors;
            $msg = "A jelszó min. 6 karakter legyen!";
            $errors['jelszo'] = $msg;
            $errors['jelszoism'] = $msg;
        }
    }

    function checkEmail() {
        global $errors;
        if(isRegisteredEmail($_POST['email']))
            $errors['email'] = "Az email cím már foglalt!";
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            $errors['email'] = "Érvényes email címet írjon!";
    }

    function checkTel() {
        if(!empty($_POST['tel']) && strlen($_POST['tel']) < 3) {
            global $errors;
            $errors['tel'] = "A szám érvénytelen!";
        }
    }

    function checkSzulDatum() {
        $dateDiff = date_diff(new DateTime('now'), new DateTime($_POST['szul-datum']));
        if(!empty($_POST['szul-datum']) && ($dateDiff->format("%R%y") > -1 || $dateDiff->format("%R%y") < -120)) {
            global $errors;
            $errors['szul-datum'] = "A dátum valótlan!";
        }
    }

    function checkIrszam() {
        if(strlen($_POST['irszam']) < 2) {
            global $errors;
            $errors['irszam'] = "Valótlan irányítószám!";
        }
    }

    function checkVaros() {
        global $errors;
        if(strlen($_POST['varos']) < 1)
            $errors['varos'] = "Kötelező kitölteni!";
        elseif (!preg_match('/^[A-Za-záéíöőüűÁÉÍÖÜŐŰ .]+$/', $_POST['varos']))
            $errors['varos'] = "A város csak betűkböl állhat!";
    }

    function checkUtca() {
        if(strlen($_POST['utca']) < 3) {
            global $errors;
            $errors['utca'] = "Valótlan adat!";
        }
    }

    function checkKedvenc() {
        if (!isset($_POST['kedvenc'])) {
            global $errors;
            $errors['kedvenc'] = "Nem adtál meg kedvenc bolygót!";
        }
    }

    function checkIfPasswordsAreEqual() {
        global $errors;
        if (empty($errors['jelszo']) && $_POST['jelszo'] !== $_POST['jelszoism']) {
            $msg = "A jelszók nem azonosak!";
            $errors['jelszo'] = $msg;
            $errors['jelszoism'] = $msg;
        }
    }

    function isFieldOK($field) {
        global $errors;
        global $errorInput;
        if (!empty($errors[$field]))
            return $errorInput;
        return '';
    }

    function getErrorLabel($field) {
        global $errors;
        if (!empty($errors[$field])) {
            $msg = $errors[$field] . str_repeat("&nbsp;", 10);
            return "<label class='hibas-label' for=\"$field\">$msg</label>";
        }
        return '';
    }

    function getPostVariable($variableName) {
        if (isset($_POST[$variableName]))
            return $_POST[$variableName];
        return '';
    }
?>

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
                    <li id="nav-regisztracio"><a href="kijelentkezes.php">Kijelentkezés</a></li>
                    <li id="belepes"><a href="profil.php">Profilom</a></li>
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
                    <input class="<?=isFieldOK("nev")?>" id="nev" name="nev" type="text" placeholder="Név" maxlength="50"
                           value="<?=getPostVariable('nev')?>" required /><br />
                    <label for="nev">Név</label><?=getErrorLabel('nev')?><br />
                    <input class="<?=isFieldOK("jelszo")?>" id="jelszo" name="jelszo" type="password" placeholder="Jelszó" maxlength="64"
                           value="<?=getPostVariable('jelszo')?>" required /><br />
                    <label for="jelszo">Jelszó</label><?=getErrorLabel('jelszo')?><br />
                    <input class="<?=isFieldOK("jelszoism")?>" id="jelszoism" name="jelszoism" type="password" placeholder="Jelszó megerősítése"
                           maxlength="64" value="<?=getPostVariable('jelszoism')?>" required /><br />
                    <label for="jelszoism">Jelszó megerősítése</label><br />
                </div>
                <div class="oszlop">
                    <input class="<?=isFieldOK("email")?>" id="email" name="email" type="email" placeholder="Email"
                           maxlength="320" value="<?=getPostVariable('email')?>" required /><br />
                    <label for="email">Email</label><?=getErrorLabel('email')?><br />
                    <input class="<?=isFieldOK("tel")?>" id="tel" name="tel" type="tel" placeholder="Telefonszám: +36301234567"
                           maxlength="20" value="<?=getPostVariable('tel')?>" /><br />
                    <label for="tel">Telefonszám</label><?=getErrorLabel('tel')?><br />
                    <input class="<?=isFieldOK("szul-datum")?>" id="szul-datum" name="szul-datum" type="date"
                           value="<?=getPostVariable('szul-datum')?>" /><br />
                    <label for="szul-datum">Születési dátum</label><?=getErrorLabel('szul-datum')?><br />
                </div>
                <div>
                    <input class="<?=isFieldOK("irszam")?>" id="irszam" name="irszam" type="text" placeholder="Irányítószám"
                           maxlength="10" value="<?=getPostVariable('irszam')?>" required /><br />
                    <label for="irszam">Irányítószám</label><?=getErrorLabel('irszam')?><br />
                    <input class="<?=isFieldOK("varos")?>" id="varos" name="varos" type="text" placeholder="Város" maxlength="40"
                           value="<?=getPostVariable('varos')?>" required /><br />
                    <label for="varos">Város</label><?=getErrorLabel('varos')?><br />
                    <input class="<?=isFieldOK("utca")?>" id="utca" name="utca" type="text" placeholder="Utca, házszám..."
                           maxlength="40" value="<?=getPostVariable('utca')?>" required /><br />
                    <label for="utca">Utca, házszám...</label><?=getErrorLabel('utca')?><br />
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
                    <?=getErrorLabel('kedvenc')?>
                    <div id="urlap-gombok">
                        <input name="submit" type="submit" value="Tovább" />
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