<?php

  function loadUsers($path) {
    $users = [];

    $file = fopen($path, "r");
    if ($file === FALSE)
      die("HIBA: A fájl megnyitása nem sikerült!");

    while (($line = fgets($file)) !== FALSE) {
      $user = unserialize($line);
      $users[] = $user;
    }

    fclose($file);
    return $users;
  }

?>
