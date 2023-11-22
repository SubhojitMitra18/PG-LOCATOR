<?php
  session_start();
  session_destroy();
  header("location: /PG-LOCATOR/index.php");
  exit();
?>
