<?php
  session_start();
  session_destroy();
  setcookie("login", "", time() - 60);

  header("Location: login.php");
  exit();
  ?>
