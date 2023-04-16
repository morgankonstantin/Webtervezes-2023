<?php
  $usersDB = "db/users.txt";
  $bolygoValueNameDict = [
      "merkur" => "Merkúr",
      "venusz" => "Vénusz",
      "fold" => "Föld",
      "mars" => "Mars",
      "jupiter" => "Jupiter",
      "szaturnusz" => "Szaturnusz",
      "uranusz" => "Uránusz",
      "neptunusz" => "Neptunusz",
  ];

  function loadUsers() {
    $users = [];
    global $usersDB;

    $file = fopen($usersDB, "r");
    if ($file === FALSE)
      die("HIBA: A fájl megnyitása nem sikerült!");

    while (($line = fgets($file)) !== FALSE) {
      $user = unserialize($line);
      $users[] = $user;
    }

    fclose($file);
    return $users;
  }

  function findUser($email, $password)
  {
    $users = loadUsers();
    foreach ($users as $user) {
      if ($user["email"] === $email && checkPassword($password, $user["jelszo"]))
        return $user;
    }
  }

  function findNextID() {
    $users = loadUsers();
    $id = 0;
    foreach ($users as $user) {
      if ($user['id'] >= $id) {
        $id = $user['id'] + 1;
      }
    }
    return $id;
  }

  function isRegisteredEmail($email) {
    $users = loadUsers();
    foreach ($users as $user) {
      if ($user['email'] === $email)
        return true;
      return false;
    }
  }

  function modifyUser($user) {
    global $usersDB;
    $reading = fopen($usersDB, 'r');
    $writing = fopen('db/users.tmp', 'w');

    $replaced = false;

    while (!feof($reading)) {
      $line = fgets($reading);
      $dbUser = unserialize($line);
      if (isset($dbUser["id"]) && isset($user["id"]) && $dbUser["id"] === $user["id"]) {
        if(isset($dbUser["jelszo"]) && isset($user["jelszo"]) && $dbUser["jelszo"] !== $user["jelszo"])
          $user['jelszo'] = createPasswordHash($user['jelszo']);
        $line = serialize($user) . "\n";
        $replaced = true;
      }
      fputs($writing, $line);
    }
    fclose($reading);
    fclose($writing);

    if ($replaced)
    {
      rename('db/users.tmp', $usersDB);
    } else {
      unlink('db/users.tmp');
    }
  }

  function saveUser($user) {
    global $usersDB;
    $file = fopen($usersDB, "a");

    if ($file === FALSE)
      die("HIBA: A fájl megnyitása nem sikerült!");

    fwrite($file, serialize($user) . "\n");
    fclose($file);
  }

  function createPasswordHash($password) {
    return password_hash($password, PASSWORD_BCRYPT);
  }

  function checkPassword($password, $passwordHash) {
    return password_verify($password, $passwordHash);
  }

  function isKedvenc($bolygo) {
    if ($_SESSION["user"]["kedvenc"] === $bolygo)
      return 'checked';
    return '';
  }

  function uploadProfilePicture($user) {
    global $fajlfeltoltes_hiba;    // ez a változó abban a fájlban található, amiben ezt a függvényt meghívjuk, ezért újradeklaráljuk globálisként

    if (isset($_FILES["profilkep"]) && is_uploaded_file($_FILES["profilkep"]["tmp_name"])) {  // ha töltöttek fel fájlt...
      $allowed_extensions = ["png", "jpg", "jpeg"];                                           // az engedélyezett kiterjesztések tömbje
      $extension = strtolower(pathinfo($_FILES["profilkep"]["name"], PATHINFO_EXTENSION));  // a feltöltött fájl kiterjesztése

      if (in_array($extension, $allowed_extensions)) {      // ha a fájl kiterjesztése megfelelő...
        if ($_FILES["profilkep"]["error"] === 0) {        // ha a fájl feltöltése sikeres volt...
          if ($_FILES["profilkep"]["size"] <= 31457280) { // ha a fájlméret nem nagyobb 30 MB-nál
            $path = "db/uploaded_img/" . $user['nev'] . "." . $extension;   // a cél útvonal összeállítása
            $user['img'] = $path;

            if (!move_uploaded_file($_FILES["profilkep"]["tmp_name"], $path)) { // fájl átmozgatása a cél útvonalra
              $fajlfeltoltes_hiba = "A fájl átmozgatása nem sikerült!";
            } else {
              $_SESSION['user'] = $user;
              modifyUser($user);
            }
          } else {
            $fajlfeltoltes_hiba = "A fájl mérete túl nagy!";
          }
        } else {
          $fajlfeltoltes_hiba = "A fájlfeltöltés nem sikerült!";
        }
      } else {
        $fajlfeltoltes_hiba = "A fájl kiterjesztése nem megfelelő!";
      }
    }
  }
?>
