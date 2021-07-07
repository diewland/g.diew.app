<?php
  // include db
  include 'db.php';
  
  // get redirect url from hash
  $hash = substr($_SERVER['REQUEST_URI'], 1);
  $url = $db[$hash] ?? $default_url;

  // redirect
  header("location: $url");
  exit(0);
?>
