<?php
  $usersDB = "db/users.txt";
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
      if ($user["email"] === $email && checkPassword($password, $user["password"]))
        return $user;
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
      if ($dbUser["email"] === $user["email"]) {
        $line = serialize($user);
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

    fwrite($file, serialize($user));
    fclose($file);
  }

  function createPasswordHash($password) {
    return password_hash($password, PASSWORD_BCRYPT);
  }

  function checkPassword($password, $passwordHash) {
    return password_verify($password, $passwordHash);
  }
?>
